<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="../library/style_sign.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2><p style="font-family: Gabriola">S i g n - U p !</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label style="font-family: Gabriola">Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label style="font-family: Gabriola">Username</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Username"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Username"><br>
          <?php }?>


     	<label style="font-family: Gabriola">Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label style="font-family: Gabriola">Repeat Password</label>
          <input type="password" 
                 name="repassword" 
                 placeholder="Repeat Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="signin.php" class="ca" style="font-family: Gabriola"; >Already have an account?</a>
     </form>
</body>
</html>
