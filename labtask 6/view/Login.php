<!DOCTYPE html>
<html>
<head>
  
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
  
<body>
  <?php 

  $unameErr=$passErr=$message2="";
   require 'headpage.php';   
  include ('../controller/Logincheck.php');

  
?>
  

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div style="border: 1px solid darkred;width: 1200px;height: 450px;margin: auto;background-image: url('img7.png');background-repeat: no-repeat;background-size: 820px;">
    <br><br><br><br><br><br>
    <div style="border: 1px solid darkred;width: 300px;height: 300px;margin-left: 850px;">
 <br><h2 style="color:darkred;text-align: center;">Log in</h2><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="uname" style='color:darkblue;'><i class="fa fa-user" style="font-size:24px;color: darkred;"></i></label>
    <input type="text" name="uname" id="uname"value="<?php if(isset($_COOKIE['uname'])){echo $_COOKIE['uname']; } ?>"placeholder="Username" ><br><span style="color:red"><?php echo $unameErr;?></span><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="pass" style='color:darkblue;'><i class="fa fa-lock" style="font-size:24px;color:darkred;"></i></label>
   
    <input type="Password" name="pass" id="pass" value="<?php if(isset($_COOKIE['pass'])) {echo $_COOKIE['pass'];} ?>" placeholder="Password"><br><span style="color:red;"><?php echo $passErr;?></span><br><hr style="width:200px;">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="remember" id="remember">
   <label for="remember" style='color:darkred;'>Remember me</label><br><span style="color:red;"><?php if(!empty($_POST['remember'])) {echo $message;}else{echo $error;}?></span><br>
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="submit" name="Lsubmit" value="submit">

   <a href="forgot.php" style='color:darkred;'>Forgot Password?</a>
   &nbsp;<a href="Registration.php" style='color:darkred;'>Sign Up</a>
   <br><span  style="color:red;"><?php echo $message2?></span>



  <br>
</div>

</div>

  

</form>
</body>
</html>