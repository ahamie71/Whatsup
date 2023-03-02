<?php

if (isset($_GET['action'])) {

    if ($_GET['action'] == 'discuss') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        getMessages();
    }
    if ($_GET['action'] == 'addmessage') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        addessage();
    }
    if ($_GET['action'] == 'edit') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        updateMsg();
    }

    if ($_GET['action'] == 'DELET') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        delete();
    }

    if ($_GET['action'] == 'logout') {
        require_once(dirname(__FILE__) . '/src/Controllers/loginController.php');
        logout();

    }

    if ($_GET['action'] == 'register') {
        require_once(dirname(__FILE__) . '/src/Controllers/registrationController.php');
        registration();

    }
    if ($_GET['action'] == 'connect') {
        require_once(dirname(__FILE__) . '/src/Controllers/loginController.php');
        connection();
    }

    if ($_GET['action'] == 'home') {
        require_once(dirname(__FILE__) . '/src/Controllers/homepageController.php');
        homepage();

    }
} else {
    require_once(dirname(__FILE__) . '/src/Controllers/homepageController.php');
    homepage();
}

//index.php va nous rediriger vers la page home page
// index.php?action=discuter on sera rediriger vers la page tchat,
