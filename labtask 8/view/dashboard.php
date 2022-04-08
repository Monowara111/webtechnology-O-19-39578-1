<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.color{
			background-image: url('img3.jpg');
			background-repeat: no-repeat;
			background-size: 800px;
		}
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title></title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<?php 
	
session_start();
include'headpage.php';


if (isset($_SESSION['uname'])) {

	echo "<div style='border:1px solid darkred;height:400px;margin:auto;width:1000px;'><table style='height:400px;width:1000px;'><tr><td style='text-align:left;width:200px;background-color:#DEB887;'><p style='color:darkred;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p><hr style='margin-left: 20px;width: 150px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='dashboard.php'style='color:darkred;'>DashBoard</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view profile.php' style='color:darkred;'>View Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php' style='color:darkred;'>Edit Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Change password.php' style='color:darkred;'>Change Password</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='fileupload.php' style='color:darkred;'>Change Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='../Controller/logout.php' style='color:darkred;'>Logout</a></td><td style='text-align:center;color:black;font-size:60px;' class='color'><h3>Welcome </h3></td></tr></table></div>";
	

} else {
	header("location:Login.php");
}


 ?>
</form>


</body>
</html>




