<?php
	
	if(isset($_REQUEST["update"]))
	{
		$m= $_POST['a'];
		$c= $_POST['b'];
		$l= $_POST['c'];
		$g= $_POST['d'];
		$d= $_POST['e'];
		$dir= $_POST['f'];
		$ca= $_POST['g'];
		$da= $_POST['h'];
		$cn=$_POST['j'];
		$sn=$_POST['k'];
		$file=$_FILES["i"]["name"];
		$tmpname=$_FILES["i"]["tmp_name"];
		$path="movies/".$file;
		$file1=explode(".",$file);
		$ext=$file1[1];
		$allowed=array("jpg","png","gif","pdf","wmv");
		if(in_array($ext,$allowed))
		{
			move_uploaded_file($tmpname,$path);
			 mysql_connect("localhost","root","");
			mysql_select_db("pvr");
			$query="update addmovie SET certificate='$c',language='$l',genre='$g',duration='$d',director='$dir' ,cast='$ca',date='$da',picsrc='$file',cost='$cn',seats='$sn' WHERE moviename='$m'";
			$data=mysql_query($query);
			if($data)
			{
			echo"<font color='green'>records updated <br><a href='movierep.php' font color='pink'>check updated list here";
			
			}
			else{
				echo"<font color='red'>records not updated.<a href='movierep.php' font color='green'>check updated list here";
			}
		}
	}	
	else
	{
		echo"<font color='yellow'>Click on the update button to save the changes"; 
	}
	
	
		
	

	
?>