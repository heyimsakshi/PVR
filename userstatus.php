<style>
td{
	padding:10px;
	background-color: #4CAF50;
	
}
</style>

<?php
error_reporting(0);
session_start();
$name= $_SESSION['name'];
$movie=$_SESSION['mvname'];
mysql_connect("localhost","root","");
mysql_select_db("pvr");
$query="SELECT * from moviereport WHERE name='$name'";
$data=mysql_query($query);
$total=mysql_num_rows($data);




	if(($total)!=0) //if table has records 
	{
		?>
		<html>
		<body bgcolor="#FF5733">
		<h1 align='center'>BOOKING STATUS<h1>
		<hr>
		<table border='5' align='center'>
			<tr>
				<th>BOOKING ID</th><br>
			
				<th>NAME</th><br>
			
				<th>MOVIE NAME</th><br>
			
				<th>DATE</th><br>
		
				<th>TIME</th><br>
			
				<th>SEATS</th><br>
			
				<th>AMOUNT PAID</th><br>
		
				
				
				
			</tr>
		
		
		<?php  //closes the php tag
		while($result=mysql_fetch_assoc($data) )
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

?>
</table>
<center><a href="Home 2.html">back</center>
</body>
</html>