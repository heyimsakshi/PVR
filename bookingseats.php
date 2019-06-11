<?php
session_start();
?>
<html>
<head>
<link href="myStyle.css" rel="stylesheet" />
</head>
<style>
body {
	background-color: brown;
}


.border
	{  border-color: grey; border-style: solid; } 
	
 h1 {
	color: white;
  
	padding:0px;
	}
</style>
<body  align='center'>
<?php
 
  if(isset($_SESSION['name']))
	  
  {
	  
	  ?>
		   <h1>BOOK MOVIE TICKET</h1>
		   <hr>
		<form method="POST" action="bookingseatscon.php">
			<b><font size="4">Date:</font></b>
			<input name="date" type="date"/><br><br>
			<b><font size="4">time:</font></b>
			<input name="time" type="time"/><br><br>
			<b><font size="4">seats:</font></b>
			<input type="number" name="seats" size="30"><br><br>
			<input type="submit" name="submit" value="BOOK">
			<input type="reset" value="reset">
		
		</form>
	  <?php
	  
  }
  else
  {
	  echo"<font color='red'>you are not logged in ";
	  echo"kindly log in<br>";
	  echo"<a href='login.php'><b>click to go back</b>";
  }
?>
</body>
</html>