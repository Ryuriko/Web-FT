<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="../library/style_sign.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2><p style="font-family: Gabriola">L o g i n !</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label style="font-family: Gabriola">Username</label>
     	<input type="text" name="uname" placeholder="Username"><br>

     	<label style="font-family: Gabriola">Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca" style="font-family: Gabriola">Create New Account</a>
     </form>
</body>
</html>
