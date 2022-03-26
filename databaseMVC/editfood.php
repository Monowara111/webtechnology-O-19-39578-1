<?php 

require_once ('controller/displaycheck.php');
$food = fetchfood($_GET['code']);





 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updatefood.php" method="POST">
    <label>Food Code:</label>
            <input type="text" name="code" value="<?php echo $_GET['code'] ?>"><br><br>
  <label for="name"> Food Name:</label><br>
  <input value="<?php echo $food['name'] ?>" type="text" id="name" name="name"><br>
  <label for="price">Price:</label><br>
  <input value="<?php echo $food['price'] ?>" type="text" id="price" name="price"><br>
  <input type="checkbox" name="display" id="display" value="<?php echo $food['display'] ?>">
            <label for="display">display</label><br><br>
 
 
  <input type="submit" name = "updatefood" value="Update">
  
</form> 

</body>
</html>

