<!DOCTYPE html>
<html>
<head>
     
</head>
<body>
  <?php
    $nameErr=$emailErr=$usnameErr=$password1Err=$password2Err=$genderErr=$dateErr=$monthErr=$yearErr="";
    $name=$email=$usname=$password1=$password2=$gender=$date=$month=$year=$message="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty($_POST["name"]))
    {
      $nameErr="Name is required";
    }
    else
    {

      $name=$_POST["name"];
      if(!preg_match("/^[a-zA-Z- ]*$/",$name))
      {
        $nameErr="Must start with a letter. Can contain a-z, A-Z, period, dash only";
        
      }
    }
    if(empty($_POST["email"]))
    {
      $emailErr="Email is required";
    }
    else
    {

      $email=$_POST["email"];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        $emailErr="Invalid email format";
      }
    }
    if(empty($_POST["usname"]))
    {
      $usnameErr="Username is required";
    }
    else
    {
 
      $usname=$_POST["usname"];
      if(strlen($_POST["usname"])<2)
      {
        $usnameErr="User Name must contain at least two (2) characters";
      }

    }
    if(empty($_POST["password1"]))
    {
      $password1Err="Password is required";
    }
    else
    {
 
      $pass2=$_POST["password1"];
      if(strlen($_POST["password1"])<8)
      {
        $password1Err="Password must not be less than eight (8) characters";
        
      }
        else if(!preg_match("/\W/",$password1))
      {
        $password1Err="Password must contain at least one of the special characters";
        
      }
      
      
    }
    if(empty($_POST["password2"]))
    {
      $password2Err="Confirm Password is required";
    }
    else
    {
 
      $password2=$_POST["password2"];
      if($_POST["password1"]!=$_POST["password2"])
      {
        $password2Err="Password and confirm password are not matched";

      }
    }
    if(empty($_POST["gender"]))
    {
      $genderErr="Gender is required";
    }
    else
    {
 
      $gender=$_POST["gender"];
    }
    if(empty($_POST["date"]))
    {
      $dateErr="Date of birth  is required";
    }
    else
    {
       $date=$_POST["date"];
      if(!preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])$/",$date))
      {
        $dateErr="Must be valid number date:1-31";
          
      }
    }
    if(empty($_POST["month"]))
    {
      $dateErr="Date of birth is required";
    }
    else
    {

         $month=$_POST["month"];
    if(!preg_match("/^(0[1-9]|1[0-2])$/",$month))
    {
      $monthErr="Must be valid number month:1-12";
         
    }

    }
    if(empty($_POST["year"]))
    {
          $dateErr="Date of birth is required";
    }
    else
    {

        
    if($_POST['year']>=1900)
    {
       $year=$_POST["year"];
    }
    else
    {
      $yearErr="Must be valid number year:1953-1998";
      
    }

    }
    if(file_exists('data.json'))
    {
      $current=file_get_contents('data.json');
      $array=json_decode($current,true);
      $new=array(
      'name' => $_POST["name"],
      'email' => $_POST["email"],
      'username' => $_POST["usname"],
      'password' => $_POST["password1"],
      'gender' => $_POST["gender"],
      'date' => $_POST["date"].$_POST["month"].$_POST["year"] 
     
      );
      $array[]=$new;
      $final=json_encode($array);
      if(file_put_contents('data.json',$final))
      {
        $message="file append successfully";
      }
    }
    else{
      $message="json file not exists";

    }

  }
  

  
  ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <fieldset style="width:350px;height:570px;">
        
    <legend><h2>Registration</h2></legend>
   
    <label for="name">Name:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" id="name"><br><span><?php echo $nameErr;?></span><br><hr>
     <label for="email">Email:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" id="email"><br><span><?php echo $emailErr;?></span><br><hr>
     <label for="usname">User Name:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="usname" id="usname"><br><span><?php echo $usnameErr;?></span><br><hr>
     <label for="password1">Password:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="password1" id="password1"><br><span><?php echo $password1Err;?></span><br><hr>
    <label for="password2">Confirm Password:</label>
    <input type="Password" name="password2" id="password2"><br><span><?php echo $password2Err;?></span><br><hr>
    <fieldset style="width: 330px;height: 30px;">
      <legend>Gender</legend>
       <input type="radio" name="gender" id="gender1" value="Male">
       <label for="gender1">Male</label>
        <input type="radio" name="gender" id="gender2" value="Female">
        <label for="gender2">Female</label>
         <input type="radio" name="gender" id="gender3" value="Other">
         <label for="gender3">Other</label><br>
         <br><span><?php echo $genderErr;?></span>
    </fieldset><br><hr>
    <fieldset style="width: 350px;height: 50px;">
      <legend>Date of Birth</legend>
      <input type="text" name="date" size="3" placeholder="dd">&nbsp;&nbsp;/
      <input type="text" name="month" size="3" placeholder="mm">&nbsp;&nbsp;/
      <input type="text" name="year" size="4" placeholder="yyyy"><br>
      <span><?php echo $dateErr?></span>
       <span><?php echo $monthErr?></span>
        <span><?php echo $yearErr?></span>
      
     
     <br> <br>

    </fieldset><br>
    <input type="submit" name="submit" value="submit">
      
      <input type="reset" name="reset" value="reset"><br><span><?php echo $message?></span>
      &nbsp;&nbsp;<a href="Login.php" style="text-align: right;">Login</a>
    </fieldset>
  </form>
</body>
</html>