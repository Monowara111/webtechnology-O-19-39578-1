<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .divchange1{
      width: 400px;
      height: 300px;
     margin-left: 300px;
     
    }
    .divchange2{border:1px solid #cc0052;height:600px;width: 1497px;}
    .divchange3{height:400px;width:1497px;}
    .divchange4{text-align:left;width:200px;background-color: #ff8080;height:597px;vertical-align:top;}
  </style>
  
</head>
<body>
  
  <?php
  include '../controller/Passwordcheck.php';
      
    require'headpage.php';  
    
    
  

?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <div class="divchange2">
      <table class="divchange3"><tr><td class="divchange4"><br><br><br><br><p style='color:darkred;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p><hr style='width:100px;'><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='dashboard.php' style='color:darkred;'>DashBoard</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='displayorderlist.php'style='color:darkred;'>orderlist</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view profile.php' style='color:darkred;'>View Profile</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit profile.php' style='color:darkred;'>Edit Profile</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Change password.php' style='color:darkred;'>Change Password</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='fileupload.php' style='color:darkred;'>Change Profile</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='../Controller/logout.php' style='color:darkred;'>Logout</a></td>
        <td style='text-align:left;'>
    <fieldset class="divchange1">
    <legend style='color:#cc0052;;'><h2>Change Password</h2></legend>
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