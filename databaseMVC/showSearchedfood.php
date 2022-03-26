
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<?php 
    include "nav.php";

?>

<table>
	<thead>
		<tr>
			<th>Food Code</th>
			<th>Food Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedfoods as $i => $food): ?>
			<tr>
				<td><a href="../showfood.php?code=<?php echo $food['code'] ?>"><?php echo $food['code'] ?></a></td>
				<td><?php echo $food['name'] ?></td>
				<td><a href="../editfood.php?code=<?php echo $food['code'] ?>">Edit</a>&nbsp<a href="deletefood.php?code=<?php echo $food['code'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>