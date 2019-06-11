

<?php

session_start();
$n=$_POST['x'];
$m=$_POST['y'];
if($n=="admin" && $m=="admin")
{
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("pvr");
	$query="SELECT * from userinfo where userid='$n' && password='$m'";
	$data=mysql_query($query);
	$result=mysql_num_rows($data);
	if($result==0)
	{
		
	}
	else{
		$_SESSION['username']=$n;
		header("location:homeadmin.php");
		
	}
	
}
else
{
$conn=mysql_connect("localhost","root","");
mysql_select_db("pvr");
$query1="SELECT * FROM userinfo WHERE userid='$n' && password='$m'";
$result=mysql_query($query1);
$con=mysql_num_rows($result);
if($con==0)
{echo"<b>please sign in the form first</b>";
echo"<a href='login.php'><br><br><b>click to go back</b>";
}
else
{
echo"login successful";
$_SESSION['name']=$n;
header("location:Home 2.html");

}
}
