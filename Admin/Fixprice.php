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
            <?php
			 // Connect myql
			 $con =mysqli_connect ('127.0.0.1','root','') ;
			 //db
			 mysqli_select_db($con,'quiz');
			 //query
			 $sql="SELECT * FROM quiz_category";
			 //query executing
			 $records = mysqli_query($con,$sql);
			 ?>
             <center>
             <table border="0">
             <tr>
                <th>  <font color="#CC0099">Product Name</font></th>
                <th>  <font color="#CC0099">average Price </font></th>
             </tr>
      <?php
	  while($row = mysqli_fetch_array($records))
	  {
		  echo"<tr> <form action= InsertFixprice.php method = post>";
		  echo "<td><input type=text name= Name value='".$row['Quiz_Name']."'></td>";
		  echo "<td><input type=text name= fprice value='".$row['fprice']."'></td>";
		  echo "<input type=hidden name= id value='".$row['Quiz_Id']."'></td>";
		  echo "<td><input type=submit name=submit value=FixPrice ></td>";
		  echo "</form></tr>";
	  }
	  ?>
      </table>
      </center>
	
	  </div>
		
		<div id="footerline"></div>
	</div>
	
	<div id="footer"><font color="#FFFFFF">HAPPY KISSAN</div>	
</div>
</body>
</html>