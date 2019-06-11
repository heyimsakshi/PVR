
<?php



session_start();
$n=$_POST['a'];

$m=$_POST['c'];
$p=$_SESSION['name'];

if($p==$n)
{

mysql_connect("localhost","root","");
mysql_select_db("pvr");
$query1="SELECT * FROM userinfo WHERE userid='$p' ";
$result=mysql_query($query1);
$con=mysql_num_rows($result);
if($con==0)
{echo"<b>please log in the form first</b>";
echo"<a href='login.php'><br><br><b>click to go back</b>";
}
else{
mysql_connect("localhost","root","");
mysql_select_db("pvr");
$query="INSERT INTO msginfo (userid,message) VALUES ('$n','$m')";
mysql_query($query);
echo"<b>your message has been sent successfully</b>";
echo"<a href='Home 2.html'><br><br><b>back</b>";
}
}
else
{
	
	echo"please enter valid userid<br>";
	echo"or either u r not logged in";
	echo"<a href='Home 2.html'><b>click to go back</b>";
}



?>
