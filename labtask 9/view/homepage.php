<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylist.css">
	<style type="text/css">
		.divh1{height:600px; 
background-image: url('del13.jpg');
background-repeat: no-repeat;
background-size: 1497px; 
border: 1 px solid #ff9933;
width: 1497px;}
	</style>
		<title></title>
</head>
<body>
	<?php   require 'headpage.php'?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
		<div class="divh1"></div>
		<?php require'footer.php';?>
		</form>
		
	

</body>
</html>