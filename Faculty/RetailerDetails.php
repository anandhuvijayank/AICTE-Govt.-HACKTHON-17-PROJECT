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
			<h1>Welcome <font color="#FF00FF"><?php echo $_SESSION['Name'];?></font></h1>
            <li>Retailer Details</li>
             <?php
			 // Connect myql
			 $con =mysqli_connect ('127.0.0.1','root','') ;
			 //db
			 mysqli_select_db($con,'quiz');
			 //query
			 $sql="SELECT * FROM student_registration";
			 //query executing
			 $records = mysqli_query($con,$sql);
			 ?>
             <center>
             <table border="0">
             <tr>
                <th>  <font color="#63270E">Retailer Name</font></th>
               <!-- <th>  <font color="#63270E">Email </font></th>-->
                <th>  <font color="#63270E">Mobile </font></th>
                <th>  <font color="#63270E">Location </font></th>
                <th>  <font color="#63270E">Interested Products </font></th>
             </tr> 
      <?php
	  while($row = mysqli_fetch_array($records))
	  {
		  echo"<tr> <form>";
		  echo "<td><input type=text name= Name value='".$row['Name']."'></td>";
		  //echo "<td><input type=text name= Email value='".$row['Email']."'></td>";
		  echo "<td><input type=text name= Mobile value='".$row['Mobile']."'></td>";
		  echo "<td><input type=text name= flocation value='".$row['flocation']."'></td>";
		  echo "<td><input type=text name= interestedproduct value='".$row['interestedproduct']."'></td>";
		  
		  echo "<input type=hidden name= Student_Id value='".$row['Student_Id']."'></td>";
		  		  echo "</form></tr>";
	  }
	  ?>
      </table>
      </center>
			
	<p>&nbsp;</p>
	
	<h1>&nbsp;</h1>
	  </div>
		
		<div id="footerline"></div>
	</div>
	
	<div id="footer"><strong><font color="#FFFFFF">HAPPY FARMER</font></strong></div>	
</div>
</body>
</html>