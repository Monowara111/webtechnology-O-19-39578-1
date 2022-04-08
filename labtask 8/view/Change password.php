<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    fieldset{
      width: 400px;
      height: 300px;
     margin-left: 200px;
     
    }
  </style>
  
</head>
<body>
  
  <?php
  include '../controller/Passwordcheck.php';
      
    require'headpage.php';  
    
    
  

?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <div style='border:1px solid black;height:400px;margin: auto;width: 1000px;'>
      <table style='height:400px;width:1000px;'><tr><td style='text-align:left;width:200px;background-color: #DEB887;'><p style='color:darkred;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p><hr style='width:100px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='dashboard.php' style='color:darkred;'>DashBoard</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view profile.php' style='color:darkred;'>View Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php' style='color:darkred;'>Edit Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Change password.php' style='color:darkred;'>Change Password</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='fileupload.php' style='color:darkred;'>Change Profile</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='../Controller/logout.php' style='color:darkred;'>Logout</a></td>
        <td style='text-align:left;'>
    <fieldset>
    <legend style='color:darkred;'><h2>Change Password</h2></legend>
    <label for="cpass">Current Password:</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="cpass" id="cpass"><br><span style="color: red;"><?php echo $cpassErr;?></span><br>
    <label for="npass">New Password:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="npass" id="npass"><br><span style="color: red;"><?php echo $npassErr;?></span><br>
    <label for="rpass">Retype new Password:</label>
    <input type="Password" name="rpass" id="rpass"><br><span style="color: red;"><?php echo $rpassErr;?></span><br>
    <hr>

   <input type="submit" name="submit" value="submit">
   
    


  </fieldset>
  </td>
</tr>
</table>
   
</div>

  </form>
</body>
</html>