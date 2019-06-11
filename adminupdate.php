<?php
error_reporting(0);

?>

<html>
<body bgcolor="#FF5733" align='center'>
<h3>MOVIE ADD FORM</h3><br>
<form method="POST" action="adminupdatecon.php" enctype="multipart/form-data">
 
<b>Movie name:</b>
<input type="text" name="a" value="<?php echo $_GET['mn'];?>" size="30"/><br><br>
<b>Movie Certificate:</b>
<input type="text" name="b"  value="<?php echo $_GET['cn'];?>" size="30"/><br><br>
<b>Movie Language:</b>
<input type="text" name="c" value="<?php echo $_GET['ln'];?>" size="30"/><br><br>
<b>Genre:</b>
<input type="text" name="d" value="<?php echo $_GET['gn'];?>" size="30"/><br><br>
<b>Duration:</b>
<input type="text" name="e" value="<?php echo $_GET['dn'];?>" size="30"/><br><br>
<b>Director:</b>
<input type="text" name="f" value="<?php echo $_GET['dirn'];?>" size="30"/><br><br>
<b>Casting:</b>
<input type="text" name="g" value="<?php echo $_GET['can'];?>" size="30"/><br><br >
<b>Release Date:</b>
<input type="text" name="h" value="<?php echo $_GET['dan'];?>" size="30"/><br><br>
<b>COST:</b>
<input type="text" name="j" value="<?php echo $_GET['con'];?>" size="30"/><br><br>
<b>SEATS:</b>
<input type="number" name="k" value="<?php echo $_GET['sn'];?>" size="30"/><br><br>
<b>photo Upload:</b>
<input type="file" name="i" value="<?php echo $_GET['pn'];?>" size="30"/><br><br>

<input type="submit" name="update" value="update">


</form>

</body>
</html>
