<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>KISSANKIGHAR</title>
</head>

<body>
<div id="container">
	<?php
		include "Header.php";
		?>
	<div id="content">
		<div id="left">
			<h1>Welcome Admin</h1>
            <li> Can Manage the Product,Farmer,Retailer.</li>		
	<p>&nbsp;</p>
    <?php
	$link=mysql_connect("localhost","root","");
	mysql_select_db("quiz",$link);
	$result=mysql_query("SELECT * FROM transaction",$link);
	$num_rows=mysql_num_rows($result);
	echo "$num_rows Transaction Completed\n";
	?>
	
	  </div>
		
		<div id="footerline"></div>
	</div>
	
	<div id="footer"><font color="#FFFFFF">HAPPY KISSAN</div>	
</div>
</body>
</html>