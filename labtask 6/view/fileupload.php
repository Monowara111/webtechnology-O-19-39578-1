<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    fieldset{
      width: 400px;
      height: 300px;
     margin-left: 200px;
     
    }
    img{
      width: 100px;
      height: 80px;
    }
  </style>

 
</head>
<body>
 

  
     <?php 
     session_start();
     
     require'headpage.php';
     if (isset($_SESSION['uname'])) {
         echo" <form action='upload.php' method='post' enctype='multipart/form-data'><div style='border:1px solid black;height:400px;margin:auto;width:1000px'>
      <table style='height:400px;width:1000px;'><tr><td style='text-align:left;width:200px;background-color:#DEB887;' ><p style='color:darkred;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p><hr style='width:100px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='dashboard.php' style='color:darkred;'>DashBoard</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view profile.php' style='color:darkred;'>View Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php' style='color:darkred;'>Edit Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Change password.php' style='color:darkred;'>Change Password</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='fileupload.php' style='color:darkred;'>Change Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='../Controller/logout.php' style='color:darkred;'>Logout</a></td>
        <td style='text-align:left;'>
  <fieldset>
    <legend style='color:darkred;'><h2>Profile Picture</h2></legend>
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