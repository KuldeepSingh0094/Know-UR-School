<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=email], input[type=password] {
  width: 15%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=email]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button, .signupbtn{
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.signupbtn, button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn{
  padding: 14px 20px;
  background-color: maroon;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn{
  float: center;
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
.error {color: #ffffff;}
</style>
<body>
<?php
// define variables and set to empty values
$usernameErr = $emailErr = $genderErr = "";
$username = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Name is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

   if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="signup.php" style="background-color:#f44336; border:1px solid #ccc;">
<?php include('errors.php'); ?>
  <div class="container"><center>
    <h1>Sign Up</h1>
    <hr>
    <label for="name"><b>Name</b></label><br>
    <input type="text" placeholder="Enter Name" name="username" required>
    <span class="error">* <?php echo $usernameErr;?></span>
<br>
    <label for="email"><b>Email</b></label><br>
    <input type="email" placeholder="Enter Email" name="email" required>
    <span class="error">* <?php echo $emailErr;?></span>
<br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password_1" required>
<br>
    <label for="psw-repeat"><b>Confirm Password</b></label><br>
    <input type="password" placeholder="Confirm Password" name="password_2" required>
    <br>
<input type="radio" name="gender" value="female" required>Female
<input type="radio" name="gender" value="male" required>Male
<input type="radio" name="gender" value="other" required>Other
<span class="error">* <?php echo $genderErr;?></span>
<br>
<br>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn"><a href="index.php" style="text-decoration:none; color:white;">Cancel</a></button>
      <button type="submit" class="signupbtn" name="reg_user">Sign Up</button>
    </div>
	<h4 align='center'><a href="login.php" style="text-decoration:none; color:white;">Already have an Account?</a></h4>
	</center>
  </div>
</form>

</body>
</html>
