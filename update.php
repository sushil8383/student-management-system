<?php
include("connection.php");
$qry ="select * from reg where name ='" .$_REQUEST["name"] ."'";
$sql = mysqli_query($con,$qry);
$row = mysqli_fetch_array($sql);
if(isset($_POST['btn']))
{
	$n=$_POST['txtn'];
	$sn=$_POST['txtsn'];
	$e=$_POST['txte'];
	$c=$_POST['txtc'];
	$cn=$_POST['txtcn'];
	$q=$_POST['txtq'];
	$co=$_POST['txtco'];
	$f=$_POST['txtf'];
	$p=$_POST['txtp'];
	$r=$_POST['txtr'];

	$qry = "update reg set name='$n',sname='$sn',email='$e',con='$c',cname='$cn',qal='$q',course='$co',fees='$f',paid='$p',remain='$r' where name ='" .$_REQUEST["name"] ."'";
	$sql = mysqli_query($con,$qry);
	if($sql)
		echo "<script>alert('Data updated')</script>";
	else
		echo "<script>alert('Data not updated')</script>";
}

?>



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

	<!-- registration table -->

	<table border="1" id="menu" width="80%" align="center" height="8%">
		<tr>
			<td>
				<center>
					<fieldset style="width: 400px; font-size: 30px">
						<legend>Registration Form</legend>
						<form action="#" method="post" oninput="txtr.value=parseInt(txtf.value)-parseInt(txtp.value)" enctype="multipart/form-data">
							<table border="0" align="center" width="400px" cellpadding="10" style="color: navy;font-size: 20px;">
								<tr><td>Name</td><td><input type="text" name="txtn" required></td></tr>

								<tr><td>Surname</td><td><input type="text" name="txtsn" required></td></tr>

								<tr><td>Email</td><td><input type="text" name="txte" required></td></tr>

								<tr><td>Contact</td><td><input type="text" name="txtc" required></td></tr>

								<tr><td>College Name</td><td><input type="text" name="txtcn" required></td></tr>

								<tr><td>Qualification</td><td><input type="text" name="txtq" required></td></tr>

								<tr><td>Course</td><td><input type="text" name="txtco" required></td></tr>

								<tr><td>Fees</td><td><input type="text" name="txtf" required></td></tr>

								<tr><td>Paid</td><td><input type="text" name="txtp" required></td></tr>

								<tr><td>Remaining</td><td><input type="text" name="txtr" required></td></tr>

								<tr><td></td><td><input type="submit" value="Update" name="btn" required></td></tr>
							</table>
						</form>
					</fieldset>
				</center>
			</td>
		</tr>
	</table>




</body>
</html>
