<?php 
include ('../controll/connection.php');
include ('../controll/loginaction.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Client Login Form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if (!isset($_SESSION['username'])) { ?>
	<div class="container">
		<h1 class="label" aline="center">Welcome To Covid-19 Test Kit</h1>
        <h1 class="label">User Login</h1>

		<form class="login_form" action="clienthome.php" method="post" name="form" onsubmit="return validated()">

			<div class="font">Username or Email</div>
			<input autocomplete="off" type="text" name="email">
			<div id="email_error">Please fill up your Username</div>

			<div class="font font2">Password</div>
			<input type="password" name="password">
			<div id="pass_error">Please fill up your Password</div>

			<button type="submit" value="submit">Login</button>

            <h4> Create an Account <a href="../view/clientregistration.php">
                        <i>Register Here</h4></i></a>

                        <h4><a href="http://localhost/eva33/view/startup.php#home">
                        <i>Go Back To Home</h4></i></a>

						 <script src="../controll/lvalid.js"></script>

		</form>
		<?php } 
 

?>
       
                    
	</div>	

	
    
</body>
</html>