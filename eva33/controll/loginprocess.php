<?php
session_start();
$username="";
$password="";
$l_msg="";
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }                 

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);

    if($username!="" && $password!=""){
        $l_msg = validateLogin($username,$password);                                    
    }         
  
    
    if(isset($_POST['remember_me'])){
        setcookie('remember_me','y', time()+(60*60*24),"/");
        setcookie("lastUser",$username, time()+(60*60*24*30),"/");
    }
    else {
        setcookie('remember_me','n', time()-1);
        setcookie("lastUser",time()-1);
    }
    

    if ($l_msg) {
        if(isset($_SESSION['l_msg'])) {unset($_SESSION['$l_msg']);}       
        $_SESSION['username']= $username;
        header('Location:../view/Dashboard.php');
        
    }
    else{
    $_SESSION['l_msg'] = "Incorrect username or password <br> Please try again";
        
    header('Location: ../view/clientLogin.php');
    }
    
    
    
}
