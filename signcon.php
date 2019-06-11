<?php

$m=$_POST['a'];
$n=$_POST['b'];
$p=$_POST['c'];
$q=$_POST['d'];
$r=$_POST['e'];

if($m=="" || $n=="" || $p=="" || $q=="" || $r=="")
{
echo"Kindly fill in all entries";
}

else
{
mysql_connect("localhost","root","");
mysql_select_db("pvr");
$query1="SELECT * FROM userinfo WHERE userid='$m' && password='$r'";
$result=mysql_query($query1);
$con=mysql_num_rows($result);
if($con!=0)
{
echo"User already exists";
}
else
{
$query="INSERT INTO userinfo (userid,name,phone,email,password) VALUES ('$m','$n','$p','$q','$r')";
mysql_query($query);
echo "Signup successful!";
echo"<a href='login.php'><br><br>Login now!";

}
}


?>
