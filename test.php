if($total!=0)
{
$row1=mysql_fetch_array($data1);
$seats=$row1['seats'];
$amount=$row1['amount'];
$name=$_SESSION['name'];
$movie=$row1['moviename'];
$query2="SELECT * FROM addmovie WHERE moviename='$movie'";
$data2=mysql_query($query2);
$row2=mysql_fetch_array($data2);
$upseats=$row2['seats']+$seats;
$upearning=$row2['earning']-$amount;

$query3="UPDATE addmovie SET seats='$upseats',earning='$upearning' WHERE moviename='$movie'";
$data3=mysql_query($query3);

$query4="SELECT * FROM userinfobalance WHERE name='$name'";
$data4=mysql_query($query4);
$row3=mysql_fetch_array($data4);
$upbalance=$row3['balance']+$amount;

$query5="UPDATE userbalanceinfo SET balance='$upbalance' WHERE name='$name'";
$data5=mysql_query($query5);

$query6="INSERT INTO cancelinfo (bookingid,name,moviename,seats,amount) VALUES ('$id','$name','$movie','$seats','$amount')";
$data6=mysql_query($query6);

$query7="DELETE * FROM moviereport WHERE bookingid='$id'";
$data7=mysql_query($query);

if($data7 && $data5 && $data3 && $data6)
{
echo "Your tickets cancelled successfully!";
echo "<br><a href='Home 2.html'>Go back to home</a>";
}
}
else
{
echo"Booking ID invalid!";
echo $_SESSION['name'];
}
}