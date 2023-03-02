<?php
function connection()
{

    if (isset($_POST['name']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
         

    }
    else{
        echo "Please enter a name and password";
    }
      

}