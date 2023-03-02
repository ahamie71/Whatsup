<?php
 session_start();


function connection()
{
  
    if (isset($_POST['name']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $password =$_POST['password']; 
        $user=  $_SESSION['user'] ;
    require_once(dirname(__FILE__, 3) . '/Model/user.php');
    login( $name, $pass);
    f (password_verify($password, $pass)) {
        $_SESSION['user'] = $user;
       
    header("location:index.php?action=discuter");
    exit();
}
else {
    require_once(dirname(__FILE__, 3) . '/templates/login.phtml'); 
    
}
}

