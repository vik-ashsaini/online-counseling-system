<?php
	include("dbconn.php");
	$quer="select * from student";
	$result=mysqli_query($conn,$quer);
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Online Counseiling System</title>
	<link rel="stylesheet" type="text/css" href="activity.css">
</head>
<body>
	<center><h1><b>Online Counseiling System</b></h1></center></body><hr>
	
	<div class="menu">
		<button><a href="afterlogin.php">Home</a></button>
		<button>About</button>
		<button><a href="#">Print From</a></button>
		<button>Demo</button>
		<button><a href="logout.php">Log out</a></button><br>
	</div>

	<div>
		<table background:"white">
			<tr>
				<td>First name:</td>
				<td>Last name: </td>
				<td>Date of birth:</td>
				<td>Gender</td>
				<td>Email id:</td>
				<td>Mobile No.</td>
				<td>10 th class year</td>
				<td>10 th class Percentage :</td>
				<td>12 th class year :</td>
				<td>12 th class Percentage :</td>
				<td>JEE Roll No:</td>
				<td>JEE Rank:</td>
				<td>Choose College Name :</td>
				<td>Choose Branch</td>
			</tr>
		<?php 
			while($row=mysqli_fetch_assoc($result))
			{
		?>
			<tr>
				
				<td><?php echo $row['fname']; ?></td>
				<td><?php echo $row['lname']; ?></td>
				<td><?php echo $row['dob']; ?></td>
				<td></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['mnumber']; ?></td>
				<td><?php echo $row['tenyear']; ?></td>
				<td><?php echo $row['tenper']; ?></td>
				<td><?php echo $row['twlyear']; ?></td>				
				<td><?php echo $row['twlper']; ?></td>
				<td><?php echo $row['jeerollno']; ?></td>
				<td><?php echo $row['jeerank']; ?></td>
				<td><?php echo $row['colname']; ?></td>
				<td><?php echo $row['colbch']; ?></td>
			</tr>
	<?php		
		}
		?>
		</table>
	</div>

</body>
</html>