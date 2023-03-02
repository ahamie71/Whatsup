<?php
 session_start();
function connection()
{

    if (isset($_POST['name']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        require_once(dirname(__FILE__, 3) . '/Model/user.php');
        $user = getUserByName($name);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header("location:index.php?action=discuter");
            exit();

        }
        else {
            echo " password incorrecte";
        }
    } else {
        require_once(dirname(__FILE__, 3) . '/templates/login.phtml');

    }
}



function logout(){
 
    session_start();
     session_destroy();
     header('location:index.php?action=home');
     exit();
}
