<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .divreg1{
      border: 1px solid #cc0052;width: 1497px;height: 900px;background-image: url('del3.png');background-repeat: no-repeat;background-size: 700px;

    }
    .divreg2{
      border: 1px solid #cc0052;width: 420px;height: 750px;margin-left: 900px;

    }
  </style>

 
</head>
<body>
  <?php
  require_once("../javascript/registrationscript.js");
       
  include 'headpage.php';    

    

  
  ?>

  <form method="post" action="../controller/Registrationcheck.php" onclick="return validation();">
<div class="divreg1">
    <br><br><br>
    <div class="divreg2">
   <br><h2 style="color:#cc0052;text-align: center;">Registration</h2><br>

    &nbsp;&nbsp;&nbsp;<label for="name">Name:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" id="name" onkeypress="checkName()" onblur="checkName()"><br><span style="color: red;" id="nameErr"><?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];}?></span><br><hr>
     &nbsp;&nbsp;&nbsp;<label for="email">Email:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" id="email" onkeypress="checkEmail()" onblur="checkEmail()"><br><span style="color: red;" id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];}?></span><br><hr>
     &nbsp;&nbsp;&nbsp;<label for="usname">User Name:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="usname" id="usname" onkeypress="checkUsername(this.value)" onblur="checkUsername(this.value)"><br><span style="color: red;" id="usnameErr"><?php if(!empty($_GET['usnameErr'])){echo $_GET['usnameErr'];}?></span><br><hr>
    &nbsp;&nbsp;&nbsp;<label for="phone">Phone Number:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="phone" id="phone" onkeypress="checkPhone()" onblur="checkPhone()"><br><span style="color: red;" id="phoneErr"><?php if(!empty($_GET['phoneErr'])){echo $_GET['phoneErr'];}?></span><br><hr>
     &nbsp;&nbsp;&nbsp;<label for="pass2">Password:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="pass2" id="pass2" onkeypress="checkPassword()" onblur="checkPassword()"><br><span style="color: red;" id="pass2Err"><?php if(!empty($_GET['pass2Err'])){echo $_GET['pass2Err'];}?></span><br><hr>
   &nbsp;&nbsp;&nbsp; <label for="pass3">Confirm Password:</label>
    <input type="Password" name="pass3" id="pass3" onkeypress="checkConfirmPassword()" onblur="checkConfirmPassword()"><br><span style="color: red;" id="pass3Err"><?php if(!empty($_GET['pass3Err'])){echo $_GET['pass3Err'];}?></span><br><hr>
    &nbsp;&nbsp;&nbsp;<label for="address">Address:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="address" id="address" onkeypress="checkAddress()" onblur="checkAddress()"><br><span style="color: red;" id="addressErr"><?php if(!empty($_GET['addressErr'])){echo $_GET['addressErr'];}?></span><br><hr>

    &nbsp;&nbsp;&nbsp;<fieldset style="width: 330px;height: 30px;" id="radio" onkeypress="checkGender()" onblur="checkGender()">
      <legend>Gender</legend>
       <input type="radio" name="gender" id="g1" value="Male">
       <label for="g1">Male</label>
        <input type="radio" name="gender" id="g2" value="Female">
        <label for="g2">Female</label>
         <input type="radio" name="gender" id="g3" value="Other">
         <label for="g3">Other</label><br>
         <br><span style="color: red;" id="genderErr"><?php if(!empty($_GET['genderErr'])){echo $_GET['genderErr'];}?></span>
    </fieldset><br><hr>
   &nbsp;&nbsp;&nbsp; <fieldset style="width: 330px;height: 35px;">
      <legend>Date of Birth</legend>
      <input type="date" name="date" size="3" onkeypress="checkDate()" onblur="checkDate()" placeholder="dd/mm/yyyy">
      <br>
      <span style="color: red;" id="dateErr"><?php if(!empty($_GET['dateErr'])){echo $_GET['dateErr'];}?></span>
       
      
     
     <br> <br>

    </fieldset><br>
    &nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="submit">
      
      <input type="reset" name="reset" value="reset"><br>    
     


      
     



</div>
  
</div>

  
  </form>
</body>
</html>