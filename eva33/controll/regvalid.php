<?php
include ('../controll/connection.php');
if (isset($_POST['submit'])){
 
$name = $_POST['name'];
$email =$_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$phoneno = $_POST['phoneno'];
$adress =$_POST['adress'];

if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
$name_error = "Name must contain only alphabets and space";
}
if (!preg_match("/^[a-zA-Z ]+$/",$adress)) {
$adress_error = "Name must contain only alphabets and space";
 }
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($password) < 6) {
$password_error = "Password must be minimum of 6 characters";
}       
if(strlen($phoneno) < 11) {
$phoneno_error = "Mobile number must be minimum of 10 characters";

}
$register = $mysqli->query("INSERT INTO users (name,email,username,password,phoneno,adress) VALUES ('$name', '$email', '$username','". md5($password)."','$phoneno', '$adress')");
if ($register) {
header("Location: ../view/clientregistration.php");
} else {
echo $mysqli->error;
}

}
    
    ?>