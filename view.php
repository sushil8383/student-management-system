<!DOCTYPE html>
<html>
<head>
	<title>student management</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<style>
		table{border-collapse: collapse;}
		body{background-color: #666633;}
		a{color: white;text-decoration: none;}
		#menu td{width: 13%;text-align: center;background-color: #666633;
			color: white;font-size: 20px;}

	</style>


</head>
<body>
	<!-- header table -->
	<table border="1" width="80%" align="center" height="20%">
		<tr>
			<td width="10%" bgcolor="#00CCC">
				<img src="1.jpg" alt="sushil" width="150px" height="150px">
			</td>
			<td bgcolor="#000000" style="font-size: 60px; color: red;font-variant: small-caps; font-family: arial;text-shadow: 4px 4px 4px white;" align="center">
				Student Management System
			</td>
		</tr>
	</table>


	<!-- menubar table -->

	<table border="1" id="menu" width="80%" align="center" height="8%">
		<tr>
			<td ><a href="index.php">Home</a></td>
			<td ><a href="reg.php">Registration</a></td>
			<td ><a href="view.php">Student Record</a></td>
			<td ><a href="viewdel.php">Edit</a></td>
		</tr>
	</table>

	<!-- display table -->

	<table border="1" width="80%" align="center" height="8%" bgcolor="white">
		<tr>
			<td valign="top">
	<table border="1" align="center" width="100%" cellpadding="10" style="color: navy;font-size: 20px;">
		<tr style="background-color: #003366;color: white">
			
			<td>First Name</td>
			<td>Last Name</td>
			<td>Email</td>
			<td>Contact</td>
			<td>College Name</td>
			<td>Qualification</td>
			<td>Course</td>
			<td>Fees</td>
			<td>Paid</td>
			<td>Remaining</td>
		</tr>

	<?php
	include("connection.php");
	$qry="select * from reg";
	$sql = mysqli_query($con,$qry);
	while($row = mysqli_fetch_array($sql))
	{

	?>

	<tr>
		<td><?php echo $row['name'];  ?></td>
		<td><?php echo $row['sname'];  ?></td>
		<td><?php echo $row['email'];  ?></td>
		<td><?php echo $row['con'];  ?></td>
		<td><?php echo $row['cname'];  ?></td>
		<td><?php echo $row['qal'];  ?></td>
		<td><?php echo $row['course'];  ?></td>
		<td><?php echo $row['fees'];  ?></td>
		<td><?php echo $row['paid'];  ?></td>
		<td><?php echo $row['remain'];  ?></td>
	</tr>
	<?php
	}
	?>
</table>
</td>
</tr>
</table>




</body>
</html>
