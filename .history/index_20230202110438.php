<?php

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'discuter') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        require_once(dirname(__FILE__) . '/src/Controllers/homepageControlle.php');
        

        getMessages();
    }else{

        homepage();
    }
}
   