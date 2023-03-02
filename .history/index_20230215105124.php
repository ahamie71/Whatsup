<?php

if (isset($_GET['action'])) {

    if ($_GET['action'] == 'discuter') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        getMessages();
    }
    if ($_GET['action'] == 'addmessage') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        addmessage();
    }
      
         
    if ($_GET['action'] == 'register') {
        require_once(dirname(__FILE__) . '/src/Controllers/registrationController.php');
        registration();
        
    }
    if ($_GET['action'] == 'connect') {
        require_once(dirname(__FILE__) . '/src/Controllers/loginController.php');
        connection();
    }
     else {
        require_once(dirname(__FILE__) . '/src/Controllers/homepageController.php');
        homepage();
    }

    //index.php va nous rediriger vers la page home page
    // index.php?action=discuter on sera rediriger vers la page tchat,


}