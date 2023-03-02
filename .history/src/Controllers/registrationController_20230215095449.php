<?php


function registration()
{

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $role = "user";

        if ($password === $password2 && s >= 6 && preg_match("/[a-z][0-9]/", $password)) ) {

            require_once(dirname(__FILE__, 3) . '/Model/user.php');
            register($name, $password, $email, $role);
            header("location:index.php?action=connect");
            exit();
        }
        if ($nbCaracter >= 6 && preg_match("/[a-z][0-9]/", $password)) {
            $pass = password_hash($_POST['password'], PASSWORD_ARGON2ID);
        }
    
            else{
                echo " mot de password incorrect";
            }
        
        }
    }
}
    


