<?php
require_once(dirname(__FILE__).'/src/Controllers/MessageController.php' );
require_once(dirname(__FILE__).'/src/Controllers/MessageController.php' );




if (isset($_GET['action']) && $_GET['action'] !== '') {

    if ($_GET['action'] == 'chat') {

        getMessage();

    }
}
else{
    echo "homepage";
}

