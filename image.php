<?php
$filename=$_FILES["i"]["name"];
$tempname=$_FILES["i"]["tmp_name"];
$x="movies/".$filename;
echo $x;
move_uploaded_file($tempname,$x);
echo"<img src='$x' height='100' width='100'>"

?>