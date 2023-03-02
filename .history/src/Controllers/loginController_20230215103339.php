<?php

function connection()
{
  
    if (isset($_POST['name']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $password =$_POST['password'];
    
    require_once(dirname(__FILE__, 3) . '/Model/user.php');
    login( $name, $password);
    header("location:index.php?action=connect");
    exit();
}
else {
    require_once(dirname(__FILE__, 3) . '/templates/login.phtml'); 

}
}

