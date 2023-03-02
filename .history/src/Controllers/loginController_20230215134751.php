<?php
 session_start();
  if(!isset($_SESSION['user'])){
    header
  }
 
function connection()
{
  
    if (isset($_POST['name']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $pass =$_POST['password'];
    

    require_once(dirname(__FILE__, 3) . '/Model/user.php');


    login( $name, $pass);
    
    header("location:index.php?action=discuter");
    exit();
}
else {
    require_once(dirname(__FILE__, 3) . '/templates/login.phtml'); 
    
}
}

