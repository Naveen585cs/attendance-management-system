<!DOCTYPE html>
<html>
<head>
	<title id="signtitle">SIGN UP</title>
     <link rel="stylesheet"  href="signup12.css" type="text/css">
    <link rel="stylesheet"  href="style.css" type="text/css">
</head>
<body id="mainsignup">
     <form id="signupform" action="signup-check.php" method="post">
     	<h2 id="signuph2">SIGN UP :</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label class="signupl">Name :</label>
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

          <label class="signupl">User Name :</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label class="signupl">Password :</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label class="signupl">Re Password :</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" id="singuplink" class="ca">Already have an account?</a>
     </form>
</body>
</html>