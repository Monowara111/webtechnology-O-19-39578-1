<!DOCTYPE html>
<html>
<head>

	<title>Assessment Task</title>
	
</head>
<body>

	<h1>Assessment Task</h1>
	<?php
	$nameErr=$emailErr=$dateErr=$genderErr=$bloodErr=$monthErr=$yearErr=$degreeErr="";
	$name=$email=$date=$gender=$blood=$year=$month="";
	$degree=array();
	
	
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
				$name="";
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
				$emailErr="Invalid email";
			}
		}
		if(empty($_POST["date"]))
		{
			$dateErr="Dob is required";
		}
		else
		{
			 $date=$_POST["date"];
			if(!preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])$/",$date))
			{
				$dateErr="Must be valid number date:1-31";
			    $date="";
			}
		}
		if(empty($_POST["month"]))
		{
			$dateErr="Dob is required";
		}
		else
		{

        $month=$_POST["month"];
		if(!preg_match("/^(0[1-9]|1[0-2])$/",$month))
		{
			$monthErr="Must be valid number month:1-12";
			$month="";
		}

		}
		if(empty($_POST["year"]))
		{
          $dateErr="Dob is required";
		}
		else
		{

        
		if($_POST['year']>1953 && $_POST['year']<1998)
		{
			 $year=$_POST["year"];
		}
		else
		{
			$yearErr="Must be valid number year:1953-1998";
			$year="";
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
		if(empty($_POST["blood"]))
		{
			$bloodErr="Blood group is required";
		}
		else
		{
			$blood=$_POST["blood"];
		}
		if(empty($_POST["degree"]))
		{
			$degreeErr="Degree is required";
		}
		else
		{			
			if(count($_POST["degree"])>=2)
				{
                  foreach ($_POST["degree"] as $key)
                   {
                  	$degree[]= $key;
                   }
				}
				else
				{
					$degreeErr="atleast two of them must be selected";
				}
			
		}
		

	}
	?>
	
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<br><br><br>
		<fieldset>
			<legend>Name</legend><br>
			<input type="text" name="name"><br>
			<span><?php echo $nameErr?></span>
			<hr>
			
		</fieldset>&nbsp;<br>
		<fieldset>
			<legend>Email</legend><br>
			<input type="text" name="email"><br>
			<span><?php echo $emailErr?></span>
			<hr>
			
		</fieldset><br>
		<fieldset>
			<legend>Date of Birth</legend><br>
			<input type="text" name="date"  placeholder="dd">&nbsp;&nbsp;
			<input type="text" name="month" placeholder="mm">&nbsp;&nbsp;
			<input type="text" name="year" placeholder="yyyy"><br>
			<span><?php echo $dateErr?></span>
			<span><?php echo $monthErr?></span>
			<span><?php echo $yearErr?></span><hr>

			
		</fieldset><br>
		<fieldset>
			<legend>Gender</legend><br>
			<input type="radio" name="gender" value="Male" id="male">
			<label for="male">Male</label>&nbsp;&nbsp;&nbsp;
			<input type="radio" name="gender" value="Female" id="female">
			<label for="female">Female</label>&nbsp;&nbsp;&nbsp;
			<input type="radio" name="gender" value="Other" id="other">
			<label for="other">Other</label><br>
            <span><?php echo $genderErr?></span>
			<hr>
			
		</fieldset><br>
		<fieldset>
			<legend>Degree</legend><br>
			<input type="checkbox" name="degree[]" value="SSC" id="click1">
			<label for="click1">SSC</label>&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="degree[]" value="HSC" id="click2">
			<label for="click2">HSC</label>&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="degree[]" value="BSc" id="click3">
			<label for="click3">BSc</label>&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="degree[]" value="MSc" id="click4">
			<label for="click4">MSc</label><br>
            <span><?php echo $degreeErr?></span>
			<hr>
			
		</fieldset><br>
		<fieldset>
			<legend>Blood Group</legend><br>
			<input list="blood" name="blood">
			<datalist id="blood">
				<option value="A+">
				<option value="B+">
				<option value="O+">
				<option value="AB+">
				<option value="O-">
			</datalist><br>
			<span><?php echo $bloodErr?></span><hr>
			
		</fieldset><br>

	<input type="submit" name="submit">
	



	</form>
	<h2>Input</h2>
	<?php
	
   
	 
	 
	echo $name."<br>";
	echo $email."<br>";
	echo $date."/".$month."/".$year."<br>"; 
	echo $gender."<br>";
    echo implode(" ", $degree)."<br>";
    echo $blood;
     	 
	 ?>
	
	
</body>
</html>