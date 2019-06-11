<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#grad1 {
  height: 100%;
  background-color: red; /* For browsers that do not support gradients */
  background-image: linear-gradient(red, yellow); /* Standard syntax (must be last) */
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 10%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form method="POST" action="signcon.php"  style="border:1px solid #ccc">
  <div class="container" id="grad1">
    <h1><center>Create New Account</center></h1>
   </div>
    <hr>
<div class="container" >
	<label for="uname"><b>UserId</b></label>
	<input type="text" placeholder="Enter UserId" name="a" required>
	<label for="nme"><b>Username</b></label>
	<input type="text" placeholder="Enter Username" name="b" required>
	<label for="phn"><b>Phonenumber</b></label>
	<input type="text" placeholder="Enter Phonenumber" name="c" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="d" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="e" required>
    <div class="clearfix" >
    
      <button type="submit" class="signupbtn">Sign Up</button>
	  <button type="submit" class="cancelbtn" id="mybtn">Home page</button>
	  <script>
	var btn = document.getElementById('mybtn');
    btn.addEventListener('click', function() {
      document.location.href = "Home 2.html";
    });
	</script>
    </div>
  </div>
</form>

</body>
</html>
