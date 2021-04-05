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

		#book td{width: 20%;}
	</style>


</head>
<body>
	<!-- header table -->
	<table border="1" width="80%" align="center" height="20%">
		<tr>
			<td width="10%" bgcolor="#00CCC">
				<img src="logo.jpg" alt="sushil" width="150px" height="150px">
			</td>
			<td bgcolor="#000000" style="font-size: 60px; color: red;font-variant: small-caps; font-family: arial;text-shadow: 4px 4px 4px white;" align="center">
				Student Management System
			</td>
		</tr>
	</table>

	<!-- banner image table -->

	<table border="1" width="80%" align="center" height="40%">
		<tr>
			<td >
				<img src="logo.jpg" alt="sushil" width="100%" height="80%">
			</td>
		</tr>
	</table>

	<!-- menubar table -->

	<table border="1" id="menu" width="80%" align="center" height="8%">
		<tr height="80px">
			<td ><a href="index.php">Home</a></td>
			<td ><a href="reg.php">Registration</a></td>
			<td ><a href="view.php">Student Record</a></td>
			<td ><a href="viewdel.php">Edit</a></td>
		</tr>
	</table>

	<!-- heading table -->

	<table border="1" width="80%" align="center" height="8%">
		<tr bgcolor="#006666">
			<td style="font-size: 20px;text-align: center;font-weight: bold;color: white;">
				<marquee direction="right">Expert Faculties</marquee>
			</td>
		
		</tr>
	</table>

	<!-- faculty table -->
	<table border="1" id="book" width="80%" align="center" height="40%">
		<tr>
			<td><img src="1.jpg" alt="sushil" width="235px" height="300px"></td>
			<td><img src="1.jpg" alt="sushil" width="235px" height="300px"></td>
			<td><img src="1.jpg" alt="sushil" width="235px" height="300px"></td>
			<td><img src="1.jpg" alt="sushil" width="235px" height="300px"></td>
			<!-- <td><img src="1.jpg" alt="sushil" width="230px" height="300px"></td> -->
		
		</tr>
	</table>

	<!-- footer table -->
	<table border="1" id="book" width="80%" align="center" height="8%">
		<tr style="background-color: #333399;color: white;font-size: 20px">
			<td align="center">Made by Sushil</td>
		</tr>
	</table>


</body>
</html>