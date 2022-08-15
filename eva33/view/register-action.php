<?php
include ('../controll/connection.php');
if (isset($_POST['submit'])){
 
$name = $_POST['name'];
$email =$_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$phoneno = $_POST['phoneno'];
$adress =$_POST['adress'];

$register = $mysqli->query("INSERT INTO users(name,email,username,password,phoneno,adress) VALUES ('$name', '$email', '$username','". md5($password)."','$phoneno', '$adress')");
if ($register) {
header("Location: ../view/clientregistration.php?register_action=success");
} else {
echo $mysqli->error;
}

}
    
    ?>