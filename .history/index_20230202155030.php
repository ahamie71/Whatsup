<?php

if (isset($_GET['action'])) {

    if ($_GET['action'] == 'discuter') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        getMessages();
    }

    if ($_GET['action'] == 'edit' && $_GET['id'] == $_POST) {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        $id= $_GET
        EditMessage();
    }

} else {
        require_once(dirname(__FILE__) . '/src/Controllers/homepageController.php');
        homepage();
}
 //index.php va nous rediriger vers la page home page
 // index.php?action=discuter on sera rediriger vers la page tchat,


