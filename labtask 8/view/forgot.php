<!DOCTYPE html>
<html>
<head>
   
 
</head>
<body>
  
  <?php
    require'headpage.php';
  include '../controller/forgotpasscheck.php';
      

?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <div style='border:1px solid black;height:400px;width: 1000px;margin: auto;'>
      <table style='height:400px;width:950px;'>
      
    <fieldset>
    <legend style='color:#ff0040;'><h2>Forgot Password</h2></legend>
    
    <label for="npass">New Password:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="npass" id="npass"><br><span style="color: red"><?php echo $npassErr;?></span><br>
    <label for="rpass">Confirm Password:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="rpass" id="rpass"><br><span style="color: red"><?php echo $rpassErr;?></span><br>
    <hr>

   <input style="color: red;" type="submit" name="submit" value="submit">
      
   
    

  </fieldset>
</div>
  

  </form>
</body>
</html>