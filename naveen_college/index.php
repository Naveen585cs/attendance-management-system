<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="home12.css" type="text/css">                                                       
	<link rel="stylesheet" href="style.css" type="text/css">                                                        
</head>
<body id="mainlogin">
     <form id="loginform" action="login.php" method="post">
     	<h2 id="loginh2">Login</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label class="loginl">User Name :</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label class="loginl">Password :</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" id="loginlink" class="ca">Create an new account :</a>
     </form>
</body>
</html>