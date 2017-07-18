<?php
$no=1;
$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("QUIZ", $con);
	// Specify the query to Insert Record
	$sql = "insert into transaction(no) values('".$no."')";
	mysql_query ($sql,$con);
echo '<script type="text/javascript">alert("Transaction Completed Succesfully");window.location=\'index.php\';</script>';

?>
