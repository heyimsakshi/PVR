<html>
<style>
body {
  background-color: brown;
}


.border {  border-color: grey; border-style: solid; } 
h1 {
  color: white;
  
  padding:0px;
}
</style>
<body >
<center><h1>MOVIE INFO<h1></center>
<?php
	session_start();
	$movie=$_POST['movie'];
	$n=$_SESSION['name'];
	$_SESSION['mvname']=$movie;
	if(isset($_SESSION['name']))
	{
		mysql_connect("localhost","root","");
		mysql_select_db("pvr");
		$query="SELECT * from addmovie WHERE moviename='$movie'";
		$data=mysql_query($query);
		$query1="INSERT INTO moviereport (moviename,name,date,time,seats,amount) VALUES ('$movie','$n','0','0','0','0')";
		mysql_query($query1);
		while($row=mysql_fetch_array($data))
		{
			?><center><img src="movies/<?php echo $row["picsrc"];?>" height="300" width="350"  hspace="0" vspace="10" border="2" class="border" ></center><?php
			
			echo"<table border='5'  align='center' style='padding:10px' >";
			echo"<tr>";
			echo"<td> MOVIE NAME: </td>";
			echo"<td>".$row['moviename']."</td>";
			echo"</tr>";

			echo"<tr>";
			echo"<td>CERTIFICATE: </td>";
			echo"<td>".$row['certificate']."</td>";
			echo"</tr>";

			echo"<tr>";
			echo"<td> LANGUAGE: </td>";
			echo"<td>".$row['language']."</td>";
			echo"</tr>";

			echo"<tr>";
			echo"<td> GENRE: </td>";
			echo"<td>".$row['genre']."</td>";
			echo"</tr>";

			echo"<tr>";
			echo"<td> DURATION: </td>";
			echo"<td>".$row['duration']."</td>";
			echo"</tr>";

			echo"<tr>";
			echo"<td>DIRECTOR: </td>";
			echo"<td>".$row['director']."</td>";
			echo"</tr>";

			echo"<tr>";
			echo"<td> CAST: </td>";
			echo"<td>".$row['cast']."</td>";
			echo"</tr>";
			
			echo"<tr>";
			echo"<td> DATE: </td>";
			echo"<td>".$row['date']."</td>";
			echo"</tr>";
			
			


			echo"</table>";
			echo"<br>";
		
			echo"
						<form method='POST' action='bookingseats.php'>
						
						<center><input type='submit' name='submit' value='BOOK TICKETS' /></center>
						</form>";
			
		}
	}
	else
	{
		
		header("location:login.php");
	}
?>
</body>
<html>