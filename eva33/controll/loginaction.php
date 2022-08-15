<?php
include ('../controll/connection.php');
session_start();
if (isset($_POST['username'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$login = $mysqli->query("SELECT * FROM users WHERE username = '$username' AND password = '".md5($password)."'");
if ($login->num_rows <= 1) {
$_SESSION['username'] = $username;
header("location:  ../view/clienthome.php");
} else {
echo $mysqli->error;
}
}
?>