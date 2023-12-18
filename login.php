<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=email], input[type=password] {
  width: 55%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<form action="login.php" method="post" style="background-color:#f44336">
<?php include('errors.php'); ?>
  <div class="imgcontainer">
<h2 align='center'>Login</h2>
<hr>
    <img src="new1/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container"><center>
    <label for="uname"><b>Email</b></label><br>
    <input type="email" placeholder="Enter Email" name="email" required>
<br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required>
        <br>
    <button type="submit" name="login_user">LogIn</button>
    <label><br>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label></center>
	<h4 align='right'><a href="signup.php" style="text-decoration:none">Create an Account?</a></h4>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"><a href="index.php" style="text-decoration:none; color:white;">Cancel</a></button>
    <span class="psw"><a href="#" style="text-decoration:none">Forgot password?</a></span>
  </div>
</form>

</body>
</html>
