<?php

function logout(){
 
    session_start();
     session_destroy();
     header('location:index.php?action=home');
     exit();
}
