<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="controller/addfoodcheck.php" method="POST">
  <label for="code">Food Code:</label><br>
  <input type="text" id="code" name="code"><br>
  <label for="name">Food Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="price">Price:</label><br>
  <input type="text" id="price" name="price"><br>
  <input type="checkbox" name="display" id="display" value="Yes" >
            <label for="display">display</label><br><br>
  
  <input type="submit" name = "addfoodcheck" value="Create">
 
</form> 

</body>
</html>

