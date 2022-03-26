<?php  
require_once 'controller/displaycheck.php';

$food = fetchfood($_GET['code']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Food Code</th>
		<th>Food Name</th>
		<th>Price</th>
		
	</tr>
	<tr>
		<td><?php echo $food['code']?></td>
		<td><a href="showfood.php?code=<?php echo $food['code'] ?>"><?php echo $food['name'] ?></a></td>
		<td><?php echo $food['price'] ?></td>
		
		
	</tr>

</table>


</body>
</html>