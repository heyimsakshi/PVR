<?php
session_start();
if(isset($_SESSION['name']))
{
$name=$_SESSION['name'];
$card=$_POST['a'];
$expiry=$_POST['b'];
$cvv=$_POST['c'];
$amount=$_POST['d'];

mysql_connect("localhost","root","");
mysql_select_db("pvr");
$query="INSERT INTO userbalanceinfo (card,expiry,cvv,balance,name) VALUES ('$card','$expiry','$cvv','$amount','$name')";
$data=mysql_query($query);
if($data)
{
	echo"Your account balance updated successfully";
	header("location:transation.php");
}
else
	echo"something is wrong please check it";

}
else
{
header('location:login.php');
}

?>