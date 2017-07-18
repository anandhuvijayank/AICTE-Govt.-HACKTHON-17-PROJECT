<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
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
			<h1>Welcome <font color="#00FF00"><?php echo $_SESSION['Name'];?></font></h1>
			<li>Hi  <?php echo $_SESSION['Name'];?>  complete your payment <font color="#003366">
            <br/><br/>
            
            PAY WITH CREDIT CARD<br/>
</b>
</font></center>
Enter Your biling Information<br>
<form action="transaction.php">
<table border="1">
<tr>
<td>
First name:</td>
<td>
<input type="text" value="" required>
</td>
</tr>
<tr>
<td>
Last Name:
</td>
<td>
<input type="text" value="" required>
</td>
</tr>
<tr>
<td>
Credit Card Number:
</td>
<td>
<input type="text" value="" required>
</td>
</tr>
<tr>
<td>
IFC code:
</td>
<td>
<input type="text" value="" required>
</td>
</tr>
<tr>
<td>
Enter your pin:
</td>
<td>
<input type="text" value="" required>
</td>
</tr>
<tr>
<td>
Confirm pin:
</td>
<td>
<input type="text" value="" required>
</td>
</tr>
<tr>
<td>
Enter The amount to transfer:
</td>
<td>
<input type="text" value="" required>
</td>

</tr>
<tr><td><center>
<input type="submit" value="PAY" >
</center>
</td>
</tr>
</table>
</form>
	<p>&nbsp;</p>
	
	<h1>&nbsp;</h1>
	  </div>
		
		<div id="footerline"></div>
	</div>
	
	<div id="footer"><font color="#FFFFFF">HAPPY FARMER</font></div>	
</div>
</body>
</html>