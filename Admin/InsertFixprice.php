<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KISSANKIGHAR</title>
</head>

<body>
<?php
	
			 // Connect myql
			 $con =mysqli_connect ('127.0.0.1','root','') ;
			 //db
			 mysqli_select_db($con,'quiz');
			 //update query
			 $sql="UPDATE quiz_category SET Quiz_Name='$_POST[Name]',
											fprice='$_POST[fprice]' 
											WHERE Quiz_Id='$_POST[id]'";
			 //query executing
			 if(mysqli_query($con,$sql))
			 header("refresh:1; url=Fixprice.php");
			 else
			 echo "Not Update";
	echo '<script type="text/javascript">alert("Product Fixed Price Inserted Succesfully");window.location=\'Fixprice.php\';</script>';

?>
</body>
</html>


