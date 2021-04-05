<?php
include("connection.php");
$qry ="delete from reg where name ='" .$_REQUEST["name"] ."'";
$sql = mysqli_query($con,$qry);
if($sql)
header("location:viewdel.php");
?>