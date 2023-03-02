<?php

if (isset($_GET['action'])) {

    if ($_GET['action'] == 'discuss') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        getMessages();
    }
    if ($_GET['action'] == 'addMessage') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        addMessage();
    }
    if ($_GET['action'] == 'Edit') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        updateMsg();
    }

    if ($_GET['action'] == 'Delete') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        delete();
    }

    if ($_GET['action'] == 'logout') {
        require_once(dirname(__FILE__) . '/src/Controllers/loginController.php');
        Logout();

    }

    if ($_GET['action'] == 'Register') {
        require_once(dirname(__FILE__) . '/src/Controllers/registrationController.php');
        Registration();

    }
    if ($_GET['action'] == 'Connect') {
        require_once(dirname(__FILE__) . '/src/Controllers/loginController.php');
        Connection();
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
