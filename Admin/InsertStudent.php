<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$txtRoll=$_POST['txtRoll'];
	$txtName=$_POST['txtName'];
	$txtEmail=$_POST['txtEmail'];
	$txtMobile=$_POST['txtMobile'];
	$flocation=$_POST['flocation'];
	$interestedproduct=$_POST['interestedproduct'];
	$txtUserName=$_POST['txtUserName'];
	$txtPassword=$_POST['txtPassword'];
	$Status="Active";
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("QUIZ", $con);
	// Specify the query to Insert Record
	$sql = "insert into student_registration 			(RollNumber,Name,Email,Mobile,UserName,Password,Status,flocation,interestedproduct) 	values('".$txtRoll."','".$txtName."','".$txtEmail."','".$txtMobile."','".$txtUserName."','".$txtPassword."','Active','".$flocation."','".$interestedproduct."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("New Retailer Inserted Succesfully");window.location=\'Student.php\';</script>';

?>
</body>
</html>
