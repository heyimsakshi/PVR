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
		<h1 align='center'>MOVIE REPORTS<h1>
		<table border='5' align='center'>
			<tr>
				<th>Moviename</th>
				<th>Certificate</th>
				<th>language</th>
				<th>genre</th>
				<th>Duration</th>
				<th>Director</th>
				<th>Cast</th>
				<th>Release Date</th>
				<th>COST</th>
				<th>SEATS</th>
				<th>Picsrc</th>
				<th colspan="2">action</th>
				
			</tr>
		
		
		<?php  //closes the php tag
		while($result=mysql_fetch_assoc($data))
		{
			echo "<tr>
					<td>".$result['moviename']."</td>
					<td>".$result['certificate']."</td>
					<td>".$result['language']."</td>
					<td>".$result['genre']."</td>
					<td>".$result['duration']."</td>
					<td>".$result['director']."</td>
					<td>".$result['cast']."</td>
					<td>".$result['date']."</td>
					<td>".$result['cost']."</td>
					<td>".$result['seats']."</td>
					<td><img src='movies/".$result['picsrc']."' height='100' width='100'/></td>
					<td><a href='adminupdate.php? mn=$result[moviename] & cn=$result[certificate]& ln=$result[language]&gn=$result[genre]&dn=$result[duration]& dirn=$result[director]& can=$result[cast]& dan=$result[date]& con=$result[cost]& sn=$result[seats] & pn=$result[picsrc]'>edit</td>
					<td><a href='admindelete.php? delid=$result[moviename]' onclick='return checkdelete()'>delete</td>
				
				</tr>";
		}
	}
	else
	{
		echo"NO such record";
	}

?>
</table>
<script>
function checkdelete()
{
	  return confirm('are u sure u really want to delete this data');
}
</script>
<center><a href="administration.php">back</center>
</body>
</html>