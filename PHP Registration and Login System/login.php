<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>LOGIN</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required placeholder="enter your username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required placeholder="enter your password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
	  Don't have an account? <a href="register.php">Register</a>
  	</p>
  </form>
</body>
</html>