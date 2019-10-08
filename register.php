<?php
	session_start();
	include("dbconn.php");

	if(isset($_POST['submitdata']))
	{
		$fname=$_POST['fname'];
		$email=$_POST['email'];
		/*$fileupload=$_FILES['fileupload']['name'];
		$fileuploadtmp=$_FILES['fileupload']['tmp_name'];*/
		$password=$_POST['password'];
	
		/*$folder="images/";
		move_uploaded_file($fileuploadtmp, $folder.$fileupload);*/

		$insert="INSERT INTO `regt`(`fname`, `email`,  `password`) VALUES ('$fname','$email','$password')";

		$qry=mysqli_query($conn,$insert);

		if($qry)
		{
			$_SESSION['email']=$email;
			header("location: website.php");
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Counselling System</title>
	<link rel="stylesheet" type="text/css" href="activity.css">
</head>
<body>
	<center><h1><b>Registration from</b></h1></center><hr>
	<div class="registerfrom">
		<form action="" method="post" id="register" enctype="multipart/from-data">
			
			<label>First Name :</label><br>
			<input type="text" name="fname" placeholder="Enter First Name" id="name" required><br>
			
			<!--<label>Last Name :</label><br>
			<input type="text" name="lname" placeholder="Enter Last Name" id="name" required><br>-->
			
			<label>Email-id :<label><br>
			<input type="email" name="email" placeholder="Enter Email-id" id="name" required><br>
			
			<!--<label>Gender :<label><br>
			<input type="radio" name="gender" id="male"><span>Male</span>
			
			<input type="radio" name="gender" id="male" ><span>Female</span><br>
			
			<label>Mobile Number:<label><br>
			<select id="ph">
				<option>+91</option>
				<option>+92</option>
				<option>+93</option>
			</select>
			
			<input type="number" name="mnumber" placeholder="Enter Mobile Number" id="num" required><br>
			
			<br>
			<input type="file" name="fileupload"  id="name" required><br>-->
			
			<label>Password :<label><br>
			<input type="password" name="password" placeholder="Enter Password" id="name" required><br><br>
			<!--<label>Re-Enter Password :<label><br>
			<input type="password" name="rpassword"  placeholder="Re-Enter Password"  id="name" required><br><br />-->
			<input type="submit" name="submitdata" value="submit" id="name"><br />		
		</form>
	</div>
</body>
</html>