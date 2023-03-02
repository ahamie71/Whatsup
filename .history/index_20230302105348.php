<?php

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'Discuss') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        GetMessages();
    }
    if ($_GET['action'] == 'AddMessage') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        addMessage();
    }
    if ($_GET['action'] == 'Edit') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        updateMessage();
    }
    if ($_GET['action'] == 'Delete') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        deleteMessage();
    }
    if ($_GET['action'] == 'Logout') {
        require_once(dirname(__FILE__) . '/src/Controllers/loginController.php');
        Logout();
    }
    if ($_GET['action'] == 'Register') {
        require_once(dirname(__FILE__) . '/src/Controllers/registrationController.php');
        egistration();
    }
    if ($_GET['action'] == 'Connect') {
        require_once(dirname(__FILE__) . '/src/Controllers/loginController.php');
        connection();
    }

    if ($_GET['action'] == 'Home') {
        require_once(dirname(__FILE__) . '/src/Controllers/homepageController.php');
        Homepage();

    }
} else {
    require_once(dirname(__FILE__) . '/src/Controllers/homepageController.php');
    Homepage();
}

//index.php va nous rediriger vers la page home page
// index.php?action=discuter on sera rediriger vers la page tchat,
