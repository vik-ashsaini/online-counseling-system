<?php
	session_start();

	include("dbconn.php");
	if(isset($_POST['submitdatalogin'])){
		$email=$_POST['email'];
		$password=$_POST['password'];

		$sql=" SELECT * FROM `regt` WHERE `email`='$email' ";

		$qry=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($qry))
		{
			$dbemail=$row['email'];
			$dbpassword=$row['password'];

			if($email==$dbemail && $password==$dbpassword )
			{
				header("location: afterlogin.php");
			}
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Online Counseiling System</title>
	<link rel="stylesheet" type="text/css" href="activity.css">
</head>
<body>
	<center>
		<h1><b>log in From</b></h1>
	</center>
	<hr>
	<div class="registerfrom">
		<form method="post" id="register",action="login.php">
		<!--	<label>First Name :</label><br>
			<input type="text" name="fname" placeholder="Enter First name" id="name" required><br>
			<label>Last Name :</label><br>
			<input type="text" name="lname" placeholder="Enter Last name" id="name" required><br>-->
			<label>Email-id :<label><br>
			<input type="email" name="email" placeholder="Enter Email-id" id="name" required><br>
			<!--<label>Gender :<label><br>
			<input type="radio" name="gender" id="male"><span>Male</span>
			<input type="radio" name="gender" id="male" ><span>Female</span><br>
			<label>Mobile number:<label><br>
			<select id="ph">
				<option>+91</option>
				<option>+92</option>
				<option>+93</option>
			</select>
			<input type="number" name="mnumber" placeholder="Enter Mobile Number" id="num" required><br>
			<br>-->
			<label>Password :<label><br>
			<input type="password" name="password" placeholder="Enter Password" id="name" required><br><br>
			<!--<label>Re-Enter Password:<label><br>
			<input type="password" name="rpassword"  placeholder="Re-Enter Password"  id="name" required><br>
			<input type="checkbox" name="chkbox"><label>Remember me</label><br>-->
			<input type="submit"  name="submitdatalogin" value="submit" id="name">	
		</form>
	</div>
</body>
</html>
<!--<?/*phps
	include("index.php");
	if(isset($_POST['Log in']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$mnumber=$_POST['mnumber'];
		$pass=$_POST['pass'];
		$rpassword=$_POST['rpassword'];
		$chkbox=$_POST['chkbox'];
	

		$qry='select * from 'admin' where 'email'="$email" and 'password'="$pass" ;";
		$run=mysqli_query($db,$qry);

		$row=mysqli_num_rows($run);
		if($row<1)
		{
			?>
			<script>alert('email id or password not match!!');
			window.open('login.php','self');
			</script>	
			<? php
		}
		else
		{
			$data=mysqli_fetch_assoc($run);
			$id=$data['id'];

			session_start();

			$_SESSION['uid']=$id;

			header('location:');
		}

	}*/

?>-->
