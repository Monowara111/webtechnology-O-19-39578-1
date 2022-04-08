<!DOCTYPE html>
<html>
<head>
  

 
</head>
<body>
  <?php
  
    include'../controller/Registrationcheck.php';   
  include 'headpage.php';    

    

  
  ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div style="border: 1px solid darkred;width: 1200px;height: 800px;margin: auto;background-image: url('img2.jpg');background-repeat: no-repeat;background-size: 700px;">
    <br><br><br>
    <div style="border: 1px solid darkred;width: 400px;height: 720px;margin-left: 750px;">
   <br><h2 style="color:darkred;text-align: center;">Registration</h2><br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="name">Name:</label>
    <input type="text" name="name" id="name"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: red;"><?php echo $nameErr;?></span><br><br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label for="email">Email:</label>
    <input type="text" name="email" id="email"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: red;"><?php echo $emailErr;?></span><br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="usname">User Name:</label>
    <input type="text" name="usname" id="usname"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: red;"><?php echo $usnameErr;?></span><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label for="phone">Phone Number:</label>
    <input type="text" name="phone" id="phone"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: red;"><?php echo $phoneErr;?></span><br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="pass2">Password:</label>
    <input type="Password" name="pass2" id="pass2"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: red;"><?php echo $pass2Err;?></span><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label for="pass3">Confirm Password:</label>
    <input type="Password" name="pass3" id="pass3"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: red;"><?php echo $pass3Err;?></span><br><br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="address">Address:</label>
    <input type="text" name="address" id="address"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: red;"><?php echo $addressErr;?></span><br><br>
     <fieldset style="width: 250px;height: 30px;margin-left: 50px;"> 
      <legend>Gender</legend>
       <input type="radio" name="gender" id="g1" value="Male">
       <label for="g1">Male</label>
        <input type="radio" name="gender" id="g2" value="Female">
        <label for="g2">Female</label>
         <input type="radio" name="gender" id="g3" value="Other">
         <label for="g3">Other</label><br>
         <br><span style="color: red;"><?php echo $genderErr;?></span>
    </fieldset><br><br>
 <fieldset style="width: 250px;height: 35px;margin-left: 50px;">
      <legend>Date of Birth</legend>
      <input type="date" name="date" size="3" placeholder="dd/mm/yyyy">
      <br>
      <span style="color: red;"><?php echo $dateErr?></span>
       
      
     
     <br> <br>

    </fieldset><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="submit">
      
      <input type="reset" name="reset" value="reset"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: red;"><?php echo $message?></span>
      
     



</div>
  
</div>

  
  </form>
</body>
</html>