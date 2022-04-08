<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    fieldset{
      width: 400px;
      height: 300px;
     margin-left: 200px;
     
    }
    hr{
      width: 250px;
    }
    .color{
      background-image: url('img4.jpg');
      background-repeat: no-repeat;
     background-size: 430px;
      background-position: left ;
      
    }
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
         echo" <div style='border:1px solid darkred;height:400px;margin:auto;width:1000px;'>
      <table style='height:400px;width:1000px;'><tr><td style='text-align:left;width:200px;background-color:#DEB887;' ><p style='color:darkred;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p><hr style='width:100px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='dashboard.php' style='color:darkred;'>DashBoard</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view profile.php' style='color:darkred;'>View Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php' style='color:darkred;'>Edit Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Change password.php' style='color:darkred;'>Change Password</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='fileupload.php' style='color:darkred;'>Change Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='../controller/logout.php' style='color:darkred;'>Logout</a></td>
        <td style='text-align:left; background-color:white;background-color:#DEB887;' class='color'>

<div style='border: 1px solid darkred;width: 300px;height: 300px;margin-left: 450px;'>
      <h2 style='color:darkred; text-align:center;'>View Profile</h2>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: $name <br><hr>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: $email<br><hr>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gender: $gender<br><hr>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date Of Birth: $dob<br><hr>


      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php' style='color:darkred;'>Edit Profile</a>

  
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
