<?php

function registration()
{


    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $role = "user";



    } else {

        echo "Enter a valid name";
    }



    $nbCaracter = strlen($password);
    if ($nbCaracter >= 6 && preg_match("/[a-z][0-9]/", $password)) {
        $pass = password_hash($_POST['password'], PASSWORD_ARGON2ID);
        if ($password === $password2) {
            require_once(dirname(__FILE__, 3) . '/Model/user.php');
            register($name, $email, $password, $role);
            header("location:index.php?action=connect");
            exit();
        }

        else{
               echo" mot de password"
        }
    
    }

}
