<!DOCTYPE html>
<html>
<head>
	<title>orders</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
 <div class="container" style="margin-top: 40px;">
  <div class="jumbotron" style="height:560px;
">
    <h1>Your Order</h1>      
 
    <label>Name:</label><?php echo $_POST['fname'].' '.$_POST['lname']?><br>
    <label>Email:</label><?php echo $_POST['email']?><br>
    <label>Orders:</label><?php echo $_POST['bread'].','.$_POST['sauce'].','.$_POST['sandwich'].','.$_POST['cheese'].','.$_POST['veggies']?>
    </div>
    </div>
</body>
</html>
<?php 
require_once("DB.php");

$db = new DB("localhost","pre_order","root","");


if($_SERVER['REQUEST_METHOD']== 'GET'){
	http_response_code(200);
	
}
else if($_SERVER['REQUEST_METHOD'] == "POST")
{	if(empty($_POST['bread']) && empty($_POST['sauce']) && empty($_POST['sandwich']) && empty($_POST['cheese']) && empty($_POST['veggies']))
	{
		echo '<script>alert("You order Atleast 1"); window.history.back();</script>';
	}	
	else
	{
	$order = array($_POST['bread'],$_POST['sauce'],$_POST['sandwich'],$_POST['cheese'],$_POST['veggies']);
	$serord = serialize($order);
	$date = date("Y-m-d h:i:sa",strtotime('now'));
	$db->query("INSERT INTO orders (fname,lname,email,order_date,orders) values(
		'".$_POST['fname']."',
		'".$_POST['lname']."',
		'".$_POST['email']."',
		'".$date."',
		'".$serord."')"
		);
	}

}

?>
