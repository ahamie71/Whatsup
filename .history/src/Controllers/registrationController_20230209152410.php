<?php

function registration(){
    
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
        $role = "user;

}else {

    echo"Enter a valid name";
 }
 require_once(dirname(__FILE__, 3) . '/Model/user.php');
    register($name, $email, $password, $role);
    header("Location:templates/displayMessage.php");
    exit();
}


