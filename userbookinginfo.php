<style>
td{
	padding:10px;
	background-color: #4CAF50;
	
}
</style>

<?php
session_start();

if(isset($_SESSION['name']))
{
$name=$_SESSION['name'];
mysql_connect("localhost","root","");
mysql_select_db("pvr");
$query="SELECT * from moviereport info WHERE name='$name' ";
$data=mysql_query($query);
$total=mysql_num_rows($data);

	if($total!=0) //if table has records 
	{
		?>
		<html>
		<body bgcolor="#FF5733">
		<h1 align='center'>MY BOOKING REPORT INFO<h1>
		
		<table border='5' align='center'>
			<tr>
				<th>BOOKINGID</th>
	
				<th>NAME</th>

				<th>MOVIENAME</th>
				<th>DATE</th>
				<th>TIME</th>
				<th>SEATS</th>
				<th>AMOUNT PAID</th>
				
				
				
			</tr>
		
		
		<?php  //closes the php tag
		while($result=mysql_fetch_assoc($data))
		{
			echo "<tr>
					<td>".$result['bookingid']."</td>
					<td>".$result['name']."</td>
					
					<td>".$result['moviename']."</td>
					<td>".$result['date']."</td>
					<td>".$result['time']."</td>
					<td>".$result['seats']."</td>
					<td>".$result['amount']."</td>
					
					
				
				</tr>";
		}
	}
	else
	{
		echo"NO such record";
	}
	echo"
		<form action='Home 2.html' align='center'>
		<input type='submit' value='BACK ' style='font-weight:bold; font-size:17;'/>
		</form>";
}
else
{
	echo"you are not logged in";
	echo"<br>";
	echo"<a href='login.php'>back";
}
?>
</table>


</body>
</html>