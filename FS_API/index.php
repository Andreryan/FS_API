<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php
require_once("DB.php");


$db = new DB("localhost","pre_order","root","");


$content =   file_get_contents('order.json');
$result = json_decode($content);

?>

 <div class="container" style="margin-top: 40px;">
  <div class="jumbotron" style="height:560px;
">
    <h1>Pre Order</h1>      
    <p>Late Orders are not accepted</p>
    
    
    <form action="order.php" method="POST" class="form-vertical">
    <div class="col-sm-4 form-group">
    <label for="fname">First Name</label>
    <input type="text" name="fname" class="form-control" required>
    </div>
     <div class="col-sm-4 form-group">
    <label for="lname">Last Name</label>
    <input type="text" name="lname" class="form-control" required>
    </div>
     <div class="col-sm-4 form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" required>
    </div>
    <div class="col-sm-4 form-group">
    <label for="bread">Bread:</label>
    
     <select class="form-control" name="bread">
     <option value="">-</option>
     <?php foreach($result->Bread as $key => $value){?>
        <option value="<?php echo $result->Bread[$key] ?>"><?php echo $result->Bread[$key] ?></option>
	<?php } ?>
	</select>
      </div>
      <div class="col-sm-4 form-group">
    <label for="sauce">Sauce:</label>
     <select class="form-control" name="sauce">
     <option value="">-</option>
     <?php foreach($result->Sauce as $key => $value){?>
		<option value="<?php echo $result->Sauce[$key] ?>"><?php echo $result->Sauce[$key] ?></option>
		<?php } ?>
	</select>
      </div>
      <div class="col-sm-4 form-group">
    <label for="sandwich">Sandwich Type</label>
     <select class="form-control" name="sandwich">
     <option value="">-</option>
        <?php foreach($result->Sandwich as $key => $value){?>
		<option value="<?php echo $result->Sandwich[$key] ?>"><?php echo $result->Sandwich[$key] ?></option>
		<?php } ?>
		
	</select>
      </div>
      <div class="col-sm-4 form-group">
    <label for="cheese">Cheese:</label>
     <select class="form-control" name="cheese">
     <option value="">-</option>
        <?php foreach($result->Cheese as $key => $value){?>
		<option value="<?php echo $result->Cheese[$key] ?>"><?php echo $result->Cheese[$key] ?></option>
		<?php } ?>
	</select>
      </div>
      <div class="col-sm-4 form-group">
    <label for="veggies">Veggies:</label>
     <select class="form-control" name="veggies">
     <option value="">-</option>
        <?php foreach($result->Veggies as $key => $value){?>
		<option value="<?php echo $result->Veggies[$key] ?>"><?php echo $result->Veggies[$key] ?></option>
		<?php } ?>
	</select>
      </div>
      <div class="col-sm-4 form-group">

     <input type="submit" name="submit" class="btn btn-primary" value="Submit" style="margin-top:25px;">
      </div>
       </form>
   
  </div>

  
</div>
</body>
</html>
