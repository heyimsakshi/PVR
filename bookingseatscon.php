<?php
  session_start();
  
   if(isset($_SESSION['name']))
   {
	   $d=$_POST['date'];
	   $t=$_POST['time'];
	   $s=$_POST['seats'];
	   $movie=$_SESSION['mvname'];
	   $name=$_SESSION['name'];
	   mysql_connect("localhost","root","");
	   mysql_select_db("pvr");
	   $query="SELECT * from addmovie WHERE moviename='$movie' ";
	   $data=mysql_query($query);
	   $row=mysql_fetch_array($data);
	   $pric=$s*$row['cost'];
		$_SESSION['seats']=$s;
	   $_SESSION['pri']=$pric;
	   $seatsleft=$row['seats'];
	   if($seatsleft>0)
	   {
		  
		  $query2="UPDATE moviereport SET date='$d',time='$t',seats='$s',amount='$pric' WHERE moviename='$movie' && name='$name'";
		  $data2=mysql_query($query2);
		  if($data2)
		  {
			  echo"data succesfully inserted";
			  header("location:transaction.php");
		  }
		  
		  else
			  echo"issue";
		  
		  
	   }
		
		else
		{
			echo" sorry seats are not available";
		}
	   
   }
   else{
	   echo"you are not logged in";
	   header("location:login.php");
   }
?>