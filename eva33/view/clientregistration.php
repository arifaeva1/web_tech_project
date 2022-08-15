<?php
include ('../controll/connection.php');

include ('../controll/regvalid.php');

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validated register Form</title>
	<link rel="stylesheet" href="../view/style.css">
</head>
<body>
<?php
if (!isset($_SESSION['username'])) { ?>

<?php
if (isset($_GET['regvalid'])) {
if ($_GET['regvalid'] == "success") { ?>
Successfully Registered!
<?php }
}
?>
	<div class="container">
		<h1 class="label">welcome to user Registration</h1>
        <h1 class="label">Registration Here</h1>


        
<form class="registation_form" action="../view/clientlogin.php"  method="post">

<div class="font">Name</div>
<input type="text" name="name"  value="" required="">
<?php if (isset($name_error)) echo $name_error; ?>
<div id="name_error">Please fill up your Name</div>

<div class="font">Email </div>
<input type="email" name="email" value="" required="">
<?php if (isset($email_error)) echo $email_error; ?>
<div id="email_error">Please fill up your Email</div>


<div class="font">Username</div>
<input type="text" name="name"  value="" required="">
<?php if (isset($username_error)) echo $username_error; ?>
<div id="username_error">Please fill up your Name</div>

<div class="font font2">Password</div>
<input type="password" name="password" class="form-control" value="" required="">
<?php if (isset($password_error)) echo $password_error; ?>
<div id="pass_error">Please fill up your Password</div>

<div class="font">phone No </div>
<input type="text" name="phoneno" value=""  required="">
<?php if (isset($phoneno_error)) echo $phoneno_error; ?>
<div id="phoneno_error">Please fill up your phone no</div>


<div class="font">Address</div>
<input type="text" name="adress"  value=""  required="">
<?php if (isset($adress_error)) echo $adress_error; ?>
<div id="adress_error">Please fill up your Adress</div>



<button type="submit" name="signup" class="btn btn-primary" value="Register">Signup</button>

Already have a account?<a href="../view/clientlogin.php" >Login</a>
<?php } else { ?>
	<?php }?>
<h4><a href="http://localhost/eva33/view/startup.php#home"><i>Go Back To Home</h4></i></a>
</form>
       
	</div>	

</body>
</html>
