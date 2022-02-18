<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
  
  <?php
  $CurrentpassErr=$newpassErr=$repassErr="";
  $Currentpass=$newpass=$repass="";
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty($_POST["Currentpass"]))
    {
      $CurrentpassErr="Current Password is required";

    }
    else
    {
      $Currentpass=$_POST["Currentpass"];
      }
      if(empty($_POST["newpass"]))
    {
      $newpassErr="New Password is required";

    }
    else
    {
      $newpass=$_POST["newpass"];
       if(strlen($_POST["newpass"])<8)
      {
        $newpassErr="Password must not be less than eight (8) characters";
        
      }
        else if(!preg_match("/\W/",$newpass))
      {
        $newpassErr="Password must contain at least one of the special characters";
        
      }
    }
    if(empty($_POST["repass"]))
    {
      $repassErr="Retype Password is required";

    }
    else
    {
      $repass=$_POST["repass"];
      if($_POST["newpass"]!=$_POST["repass"])
      {
        $repassErr="Password and confirm password are not matched";

      }
    }
  }
?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <fieldset>
    <legend><h2>Change Password</h2></legend>
    <label for="Currentpass">Current Password:</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="Currentpass" id="Currentpass"><br><span><?php echo $CurrentpassErr;?></span><br>
    <label for="newpass">New Password:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="newpass" id="newpass"><br><span><?php echo $newpassErr;?></span><br>
    <label for="repass">Retype new Password:</label>
    <input type="Password" name="repass" id="repass"><br><span><?php echo $repassErr;?></span><br>
    <hr>

   <input type="submit" name="submit" value="submit">
   
    


  </fieldset>
  </form>
</body>
</html>