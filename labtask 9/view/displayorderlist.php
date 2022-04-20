
<?php 
session_start();
require('headpage.php'); 
require_once '../controller/customerInfo.php';

$students = fetchAllCustomers();


    



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,th,td{
			width: 720px;
			border: 1px solid black;
			margin-left: 400px;
		}
	</style>
</head>
<body>
	<br><br>
	<h3 style="color:#cc0052;text-align: center;"><u>Orderlist</u></h3>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Phone Number</th>
			<th>Ordered Food</th>
			<th>Quantity</th>
			<th>Total Amount</th>
			<th>Order Date</th>
			<th>confirm</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$customers="";
		foreach ($students as $i => $customer): ?>
			<tr>
				<td><?php echo $customer['name'] ?></a></td>
				<td><?php echo $customer['address'] ?></td>
				<td><?php echo $customer['phone'] ?></td>
				<td><?php echo $customer['name'] ?></td>
				<td><?php echo $customer['quantity'] ?></td>
				<td><?php echo $customer['total'] ?></td>
				<td><?php echo $customer['order_date']?></td>
				<td><?php if($customer['is_accepted']==1)
			                {
			                	echo "Accepted";
			                }
			                else {
			                	echo "Pending";
			                }?></td>

				<td><a href="../controller/acceptorder.php?order_id=<?php echo $customer['order_id'] ?>">Accept</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>