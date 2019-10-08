<?php
	session_start();
	include("dbconn.php");

	if(isset($_POST['submitdet'])){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$mnumber=$_POST['mnumber'];
		$tenyear=$_POST['tenyear'];
		$tenper=$_POST['tenper'];
		$twlyear=$_POST['twlyear'];
		$twlper=$_POST['twlper'];

		$tenmar=$_FILES['tenmar']['name'];
		$fileuploadtmp=$_FILES['tenmar']['tmp_name'];

		$folder="images/";
		move_uploaded_file($fileuploadtmp, $folder.$tenmar);

		$twlmar=$_FILES['twlmar']['name1'];
		$fileuploadtmp=$_FILES['twlmar']['tmp_name1'];

		$folder="images/";
		move_uploaded_file($fileuploadtmp, $folder.$twlmar);

		$jeerollno=$_POST['jeerollno'];
		$jeerank=$_POST['jeerank'];
		$colname=$_POST['colname'];
		$colbch=$_POST['colbch'];

	
		

	$insert=" INSERT INTO `student`(`fname`, `lname`, `dob`, 'gender',`email`, `mnumber`, `tenyear`, `tenper`, `twlyear`, `twlper`, `tenmar`, `twlmar`,`jeerollno`, `jeerank`, `colname`, `colbch`) VALUES ('fname','lname','dob','','email','mnumber','tenyear','tenper','twlyear','twlper','','','jeerollno','jeerank','colname','colbch') ";
	$qry=mysqli_query($conn,$insert);

	if($qry){
		$_SESSION['email']=$email;
		header("location: nextpage.php");
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Counselling System</title>
	<link href="activity.css" rel="stylesheet" type="text/css">
</head>
<body>
	<center>
		<h1><b>Online Counselling System</b></h1>
	</center><hr>
	<div class="menu">
		<button><a href="afterlogin.php">Home</a></button>
		<button>About</button>
		<button><a href="applicationpage.php">Application from</a></button>
		<button>Demo</button>
		<button><a href="logout.php">Log out</a></button><br>
	</div>
	

	<div class="applicationfrom">
		<marquee><h2>Personal Details :</h2></marquee><hr><br><br>
		<form action="applicationpage.php" method="post" id="register">
			<label>First Name :</label>
			<input type="text" name="fname" placeholder="Enter First Name" id="name" required>
			<label>last Name :</label>
			<input type="text" name="lname" placeholder="Enter Last Name" id="name" required><br><br>
			
			<label>D.O.B :</label>
			<input type="Date" name="dob" id="name">
			<label>Gender :<label>
			<input type="radio" name="gender" id="" value="Male"><span>male</span>
			<input type="radio" name="gender" id="" value="female"><span>female</span><br><br>
			<label>Email-id :<label>
			<input type="email" name="email" placeholder="Enter Email-id" id="name" required>
			<label>Mobile number:<label>
			<select id="ph">
				<option>+91</option>
				<option>+92</option>
				<option>+93</option>
			</select>
			<input type="text" name="mnumber" placeholder="Enter Mobile No" id="num" required><br><br>
			<br>
			
			<br>
			<hr>
			<marquee><h2>Academic Details :</h2></marquee>
			<label>10 th class year :<label>
			<input type="text" name="tenyear" placeholder="Enter Year" id="name" required>
			<label>10 th class percentage :<label>
			<input type="text" name="tenper"  placeholder="Enter Percentage"id="name" required><br><br>
			<label>12 th class year :<label>
			<input type="text" name="twlyear" placeholder="Enter Year" id="name" required>
			<label>12 th class percentage :<label>
			<input type="text" name="twlper"  placeholder="Enter Percentage" id="name" required><br><br>

			<label>10 th class Marksheet:<label>
			<input type="file" name="tenmar" placeholder="Choose Folder" id="name" required>
			<label>12 th class Marksheet:<label>
			<input type="file" name="twlmar"  placeholder="Choose Folder" id="name" required><br><br>

			<label>JEE Roll no :<label>
			<input type="number" name="jeerollno"  id="name" required>
			<label>JEE rank :<label>
			<input type="text" name="jeerank"  id="name" required><br><br>
			
			<label>Choose College name:<label>
			<select id="name">
				<option>NIT KURUKSHTERA</option>
				<option>IIIT SOIPAT</option>
				<option>MNIT JAIPUR</option>
				<option>NIT JALANDAR</option>
				<option>IIIT Heydrabad</option>
				<option>IIT M</option>
			</select>
			<label>Choose branch :<label>
			<input type="text" name="colbch"  id="name" required><br><br>

			<input type="Submit" name="submitdet" id="name">		
		</form>
	</div>
</body>
</html>