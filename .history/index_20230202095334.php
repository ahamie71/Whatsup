<?php
require_once(dirname(__FILE__).'/src/Controllers/MessageController.php' );
require_once(dirname(__FILE__).'/src/Controllers/homepageController.php' );


if (isset($_GET['action'])) {

    if ($_GET['action'] == 'message') {

        getMessage();
        homepage();


    }
} else {
    homepage();

}