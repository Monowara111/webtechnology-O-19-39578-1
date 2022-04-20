<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    
    hr{
      width: 250px;
    }
    .divview2{
      background-image: url('del6.jpg');
      background-repeat: no-repeat;
     background-size: 650px;
     margin-left: 20px;
     background-position: left;text-align:left; background-color:white;background-color:white;
     text-align:left; background-color:white;background-color:white;
     
      
    }
    .divview1{border:1px solid #cc0052;height:600px;width:1497px;}
    .divview3{height:400px;width:1497px;}
    .divview4{text-align:left;width:200px;background-color:#ff8080;height:597px;vertical-align:top;}
    .divview5{border: 1px solid #cc0052;width: 400px;height: 400px;margin-left: 700px;}
  </style>
  
  <title></title>
</head>

<body>
  
  <?php
  session_start();
    $name = $email = $dob = $gender =  "";
    if(isset($_SESSION['uname']))
{
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM deliveryman WHERE username='".$_SESSION['uname']."' AND password='".$_SESSION['pass']."'";
$result= $conn->query($sql);
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
  $name = $row["name"];
  $email = $row["email"];
  $gender = $row["gender"];
  $dob = $row["date"];
}
}
else
{
  $usnamedb="";
  $passdb="";
}


$conn->close();

}
        
      
      ?>

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <?php 
          require'headpage.php';
        if (isset($_SESSION['uname'])) {
         echo" <div class='divview1'>
      <table class='divview3'><tr><td class='divview4'><br><br><br><br><p style='color:darkred;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p><hr style='width:100px;'><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='dashboard.php' style='color:darkred;'>DashBoard</a><br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='displayorderlist.php'style='color:darkred;'>orderlist</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view profile.php' style='color:darkred;'>View Profile</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php' style='color:darkred;'>Edit Profile</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Change password.php' style='color:darkred;'>Change Password</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='fileupload.php' style='color:darkred;'>Change Profile</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='../controller/logout.php' style='color:darkred;'>Logout</a></td>
        <td class='divview2'>

<div class='divview5'>
      <h2 style='color:#cc0052; text-align:center;'>View Profile</h2><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: $name <br><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: $email<br><br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gender: $gender<br><br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date Of Birth: $dob<br><br>


      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php' style='color:#cc0052;'>Edit Profile</a>

  
  </div
  
  
  
</td>
</tr>
</table>
</div>";
}
   
?>

  
      
     





  </form>

</body>
</html>     
