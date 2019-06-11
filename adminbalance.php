<style>
td{
	padding:10px;
	background-color: #4CAF50;
	
}
</style>

<?php
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db("pvr");
$query="SELECT * from addmovie";
$data=mysql_query($query);
$total=mysql_num_rows($data);

	if($total!=0) //if table has records 
	{
		?>
		<html>
		<body bgcolor="#FF5733">
		<h1 align='center'>PROFIT REPORT<h1>
		<table border='5' align='center'>
			<tr>
				<th>Moviename</th>
	
				<th>EARNING</th>
				
				<th>AVAILABLE SEATS</th>
				
			</tr>
		
		
		<?php  //closes the php tag
		while($result=mysql_fetch_assoc($data))
		{
			echo "<tr>
					<td>".$result['moviename']."</td>
					<td>".$result['earning']."</td>
					
					<td>".$result['seats']."</td>
					
				
				</tr>";
		}
	}
	else
	{
		echo"NO such record";
	}

?>
</table>
<center><a href="administration.php">back</center>
</body>
</html>