<?php
if($_POST['submit'])
{
	$m=$_POST['a'];
	$n=$_POST['b'];
	$o=$_POST['c'];
	$p=$_POST['d'];
	$q=$_POST['e'];
	$r=$_POST['f'];
	$s=$_POST['g'];
	$t=$_POST['h'];
	$u=$_POST['j'];
	$v=$_POST['k'];
    $filename=$_FILES["i"]["name"];
	$tempname=$_FILES["i"]["tmp_name"];
	$folder="movies/".$filename;
	move_uploaded_file($tempname,$folder);  //moves from temporary file to this folder
	
    if($m!="" && $n!="" && $o!="" && $p!="" && $q!="" && $r!="" && $s!="" && $u!="" && $v!="" && $filename!="")
    {
	mysql_connect("localhost","root","");
    mysql_select_db("pvr");
    $query="INSERT INTO addmovie (moviename,certificate,language,genre,duration,director,cast,date,picsrc,cost,seats) VALUES ('$m','$n','$o','$p','$q','$r','$s','$t','$filename','$u','$v')";
    $data=mysql_query($query);
	
	
	if($data==1)
	echo"<font color='green'>data inserted into database<br><a href='administration.php'><b>back</b>";
	}
	else
	{
		echo "all the entries are not filled";
	}
  
}
?>

