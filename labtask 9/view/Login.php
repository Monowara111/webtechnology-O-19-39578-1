<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylist.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .divlog1{
  border: 1px solid #cc0052;width: 1497px;height: 600px;background-image: url('del2.png');background-repeat: no-repeat;background-size: 820px;
}
.divlog2{border: 1px solid #cc0052;width: 300px;height: 300px;margin-left: 1000px;}
</style></head>
  
<body>
  <?php 

  $unameErr=$passErr=$message2=$error="";
   require 'headpage.php';  
   require_once("../controller/Logincheck.php");
   require_once("../javascript/loginscript.php"); 
   
  

  
?>
  

<form method="post" action="" onsubmit="return validation()">
  <div class="divlog1">
    <br><br><br><br><br><br>
    <div class="divlog2">
 <br><h2 style="color:#cc0052;text-align: center;">Log in</h2>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="uname" style='color:#cc0052;'><i class="fa fa-user" style="font-size:24px;color: #cc0052;"></i></label>
     <input type="text" name="uname" id="uname"value="<?php if(isset($_COOKIE['uname'])){echo $_COOKIE['uname']; } ?>"placeholder="Username" onkeydown="checkUsername()" onblur="checkUsername ()"><br><span style="color: red;text-align: center;" id="unameErr"><?php if(!empty($_GET['unameErr'])){echo $_GET['unameErr'];} ?></span><br>

   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="pass" style='color:#cc0052;'><i class="fa fa-lock" style="font-size:24px;color:#cc0052;"></i></label>
   
    <input type="Password" name="pass" id="pass" value="<?php if(isset($_COOKIE['pass'])) {echo $_COOKIE['pass'];} ?>"placeholder="Password" onkeydown="checkPassword()" onblur="checkPassword()"><br><span style="color:red;text-align: center;" id="passErr"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];} ?></span><hr>

   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="remember" id="remember">
   <label for="remember" style='color:#cc0052;'>Remember me</label><br><span style="color:black;"><?php if(!empty($_POST['remember'])) {echo $message;}else{echo $error;}?></span><br>
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="submit" name="Lsubmit" value="Sign In"><br><br>

   
   &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<a href="Registration.php" style='color:#cc0052;'>Don't have an account?</a>
   <br><span  style="color:black;"><?php echo $message2?></span>



  </fieldset><br>
</div>


  

</form>
</body>
</html>