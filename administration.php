<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
   background-image: url("photographer.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  height:300px;
  width: 50%;
  padding: 20px;
  text-align: center;
}

</style>
</head>
<body>

<div class="bg-image"></div>

<div class="bg-text">

 <form action="addmovie.php" align='center'>
<input type="submit" value=" ADD MOVIE " style="font-weight:bold; font-size:17;"/>
</form>
<br>
<form action="movierep.php" align='center'>
<input type="submit" value=" MOVIE REPORT " style="font-weight:bold; font-size:17;"/>
</form>
<br>
<form action="adminbalance.php" align='center'>
<input type="submit" value="SEATBALANCE REPORT" style="font-weight:bold; font-size:17;"/>
</form>
<br>
<form action="bookingrep.php" align='center'>
<input type="submit" value="BOOKING REPORT" style="font-weight:bold; font-size:17;"/>
</form>
<br>
<form action="canceladminrep.php" align='center'>
<input type="submit" value="CANCEL REPORT" style="font-weight:bold; font-size:17;"/>
</form>
<br>
<form action="homeadmin.php" align='center'>
<input type="submit" value="BACK " style="font-weight:bold; font-size:17;"/>
</form>

</div>

</body>
</html>
