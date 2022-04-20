<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .divup{
      width: 400px;
      height: 300px;
     margin-left: 300px;
     
    }
    img{
      width: 100px;
      height: 80px;
    }
    .divup1{border:1px solid #cc0052;height:600px;width:1497px;}
    .divup2{height:400px;width:1497px;}
    .divup3{text-align:left;width:200px;background-color:#ff8080;height:597px;vertical-align:top;}

  </style>

 
</head>
<body>
 

  
     <?php 
     session_start();
     
     require'headpage.php';
     if (isset($_SESSION['uname'])) {
         echo" <form action='upload.php' method='post' enctype='multipart/form-data'><div class='divup1'>
      <table class='divup2'><tr><td class='divup3'><br><br><br><br><p style='color:darkred;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p><hr style='width:100px;'><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='dashboard.php' style='color:darkred;'>DashBoard</a><br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='displayorderlist.php'style='color:darkred;'>orderlist</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view profile.php' style='color:darkred;'>View Profile</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php' style='color:darkred;'>Edit Profile</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Change password.php' style='color:darkred;'>Change Password</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='fileupload.php' style='color:darkred;'>Change Profile</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='../Controller/logout.php' style='color:darkred;'>Logout</a></td>
        <td style='text-align:left;'>
  <fieldset class='divup'>
    <legend style='color:#cc0052;'><h2>Profile Picture</h2></legend>
    <img src='img1.jpg'><br>
  <input type='file' name='fileToUpload' id='fileToUpload'><br><hr>
  <input type='submit' value='submit' name='submit'>
  </fieldset><br>
  </td>
  </tr>
  </table>
  </div></form>";}
  ?>




</body>
</html>