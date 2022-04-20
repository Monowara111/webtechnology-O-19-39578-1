<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.divdas1{
			text-align:center;color:black;font-size:60px;
			background-image: url('del5.png');
			background-repeat: no-repeat;
			background-size: 1300px;
		}
		.divdas2{border:1px solid #cc0052;height:600px;width:1497px;}
		.divdas3{height:400px;width:1500px;}
		.divdas4{text-align:left;width:200px;background-color:#ff8080;height:597px;vertical-align:top;}
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

	echo "<div class='divdas2'><table class='divdas3'><tr><td class='divdas4'><br><br><br><br><p style='color:darkred;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p><hr style='margin-left: 20px;width: 150px;'><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='dashboard.php'style='color:darkred;'>DashBoard</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='displayorderlist.php'style='color:darkred;'>orderlist</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view profile.php' style='color:darkred;'>View Profile</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php' style='color:darkred;'>Edit Profile</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Change password.php' style='color:darkred;'>Change Password</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='fileupload.php' style='color:darkred;'>Change Profile</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='../Controller/logout.php' style='color:darkred;'>Logout</a></td><td class='divdas1'><h3>Welcome </h3></td></tr></table></div>";
	

} else {
	header("location:Login.php");
}


 ?>
</form>


</body>
</html>




