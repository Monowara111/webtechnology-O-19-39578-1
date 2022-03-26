<?php 
require_once('Controller/displaycheck.php');

$food=fetchAllfood();


   



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	table,th,td{
		width: 620px;
		border: 1px solid black;
	}	
	</style>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Food Code</th>
			<th>Food Name</th>
			<th>Price</th>
			
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($food as $i => $foods): ?>
			<tr>
				<td><?php echo $foods['code']?></td>
				<td><a href="showfood.php?code=<?php echo $foods['code'] ?>"><?php echo $foods['name'] ?></a></td>
				
				<td><?php echo $foods['price']?></td>
				<td><a href="editfood.php?code=<?php echo $foods['code'] ?>">Edit</a>&nbsp<a href="controller/deletefood.php?code=<?php echo $foods['code'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>