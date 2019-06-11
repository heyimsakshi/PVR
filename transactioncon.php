<?php
session_start();
$name= $_SESSION['name'];
$movie=$_SESSION['mvname'];
$pric=$_SESSION['pri'];

$s=$_SESSION['seats'];

  if(isset($_REQUEST['submit']))
  {
	  mysql_connect("localhost","root","");
	  mysql_select_db("pvr");
	  $query1="Select * from userbalanceinfo WHERE name='$name'";
	  $data1=mysql_query($query1);
	  $row=mysql_fetch_array($data1);
	  $currbalance=$row['balance']-$pric;
	  $query2="UPDATE userbalanceinfo SET balance='$currbalance' WHERE  name='$name'";
	  $data2=mysql_query($query2);
	  $query3="SELECT * from addmovie WHERE moviename='$movie'";
	  $data3=mysql_query($query3);
	  $row1=mysql_fetch_array($data3);
	  $seatsleft=$row1['seats']-$s;
	  $earningup=$row1['earning']+$pric;
	  $query4="UPDATE addmovie SET seats='$seatsleft',earning='$earningup' WHERE moviename='$movie'";
		$data4=mysql_query($query4);
      if($data2 && $data4)
	  {
		  header("location:userstatus.php");
		  
	  }
	  else
	  {
		  echo"something is wrong";
	  }
	  
  }
  else
	 echo "no";
?>