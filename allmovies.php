<?php
	session_start();
	
?>
<html>
<head>
<style>
body {
  background-color: brown;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
.border {  border-color: grey; border-style: solid; } 
</style>
</head>
<body>
<h1>ALL CURRENT MOVIES</h1>
<hr>
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("pvr");
		$query="SELECT *from addmovie";
		$data=mysql_query("$query");
		
		while($result=mysql_fetch_assoc($data))
		{
		echo"<div style='padding:20px'>
			<center><p><b>".$result['moviename']."</b></p></center>
			
				<div>
					<center><img src='movies/".$result['picsrc']."' height='200' width='200' class='border'/></center><br>
				     <form method='POST' action='chmovieinfo.php'>
					     <input type='hidden' name='movie' value='$result[moviename]'>
						<center><input type='submit' name='submit' value='BUY TICKETS' /></center>
					 </form>
				</div>
        </div><br>";
		}
	?>
</body>
</html>
