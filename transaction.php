
<html>
<style>
body {
  background-color: brown;
}
</style>
<body>
<?php
	session_start();
	$name=$_SESSION['name'];
	echo"<font color='yellow'>you are required to pay for the movie: ";
	$p=$_SESSION['pri'];
	echo $p;
	echo"<br>";
	mysql_connect("localhost","root","");
	mysql_select_db("pvr");
	$query="SELECT * from userbalanceinfo WHERE name='$name' ";
	$data=mysql_query($query);
	$row=mysql_fetch_array($data);
	$currbalance=$row['balance'];
	if($currbalance>$p)
	{
		echo"
				<h1>SO LET'S BEGIN OUR PAYMENT PROCEDURE</h1>
				<form method='POST' action='transactioncon.php'>
				Enter your card details:
				<input type='number' name='a' size='30'><br><br>
				Expiry/Validity Date:
				<input type='text' name='b' size='30'><br><br>
				CVV:
				<input type='number' name='c' size='30'><br><br>
				Amount:
				<input type='number' name='d' size='30'><br><br>
				<input type='submit' name='submit' value='submit' />
					 </form>";
	}
	else
	{
		echo"you have insufficient balance";
		header("location:addmoney.php");
	}
	
?>
</body>
</html>