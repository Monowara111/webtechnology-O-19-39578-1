<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    a{
      color: darkred;
    }
    .divedit1{border:1px solid #cc0052;height:600px;width: 1497px;}
    .divedit2{height:400px;width:1497px;}
    .divedit3{text-align:left;width:200px;background-color:#ff8080;height:597px;vertical-align:top;}
    .divedit4{width:500px;height: 300px;margin-left: 400px;}
  </style>
  
  <title></title>
</head>

<body>
  
  <?php 
 require("../controller/EditProfileCheck.php"); 
      require("headpage.php");
      
  ?>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        
      <div class="divedit1">
      <table class="divedit2">
        <tr>
          <td class="divedit3"><br><br><br><br>
            <p style="color: darkred">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</p>
            <hr style='width:100px;'><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href='dashboard.php'>DashBoard</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href='displayorderlist.php'>Orderlist</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href='view profile.php'>View Profile</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href='edit profile.php'>Edit Profile</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href='Change password.php'>Change Password</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href='fileupload.php'>Change Profile</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href='../controller/logout.php'>Logout</a>
          </td>
          <td style='text-align:left;'>
            <fieldset class="divedit4">   
              <legend style='color:#cc0052;'><h2>Edit Profile</h2></legend>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                Name: <input type='text' name='name'value='<?php echo $name ?>'> 
                <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                Email: <input type='text' name='email'value='<?php echo $email ?>'>
                <br><br>
                
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
                Gender: <input type='text' name='gender'value='<?php echo $gender ?>'>
                <br><br>
                Date Of Birth: <input type='text' name='date'value='<?php echo $dob ?>'>
                <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <input type='submit' name='submit' value="Change">
          
            </fieldset>
          </td>
        </tr>
      </table>
   </div>
</form>



</body>
</html>