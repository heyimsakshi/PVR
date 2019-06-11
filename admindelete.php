<?php

	if(isset($_REQUEST["delid"]))
	{
	 $delid=$_REQUEST["delid"];
	 mysql_connect("localhost","root","");
	 mysql_select_db("pvr");
	 $query=mysql_query("SELECT * from addmovie WHERE moviename='$delid'");
	 $row=mysql_fetch_array($query);
	 $image=$row["picsrc"];
	 unlink("movies/".$image);
	 $query1="DELETE from addmovie WHERE moviename='$delid'";
	 $data=mysql_query($query1);
		if($data)
		{
			echo"<font color='green'>records deleted succesfully";
			echo" <script>alert('record deleted')</script>";
			?>
				<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=http://localhost/includes/movierep.php">
			<?php
		}
		else 
		{
			echo "<font color='red'>records failed to delete";
		}
	 
	}
?>