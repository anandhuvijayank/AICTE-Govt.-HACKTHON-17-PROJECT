<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<html>
<head>
<title>Check Box</title>
</head>

<body>
<?Php
$cat=$_POST['cat'];
$subcat=$_POST['subcat'];
$fname=$_SESSION['Name'];
if ($cat==1)
{
	$val = 'RICE';
}
	else if($cal ='2')
	{
		$val = 'WHEAT';
	}
	else
	{
		$val ='MANGO';	
	}
// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("QUIZ", $con);
	// Specify the query to Insert Record
	$sql = "insert into product (cat,subcat,fname) 	values('".$val."','".$subcat."','".$fname."') ";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("New Product Inserted Succesfully");window.location=\'ProductDetails.php\';</script>';
?>
</center> 
</body>

</html>
