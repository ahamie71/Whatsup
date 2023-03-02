<?php
session_start();
$user= $_SESSION['user'];
function connection()
{
      
    if (isset($_POST['name']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $pass =$_POST['password'];
    require_once(dirname(__FILE__, 3) . '/Model/user.php');
    login( $name, $pass);
    if (password_verify($password, $pass)) {
        $_SESSION['user'] = $user;
    }
    header("location:index.php?action=discuter");
    exit();
}
else {
    require_once(dirname(__FILE__, 3) . '/templates/login.phtml'); 
    
}
}

