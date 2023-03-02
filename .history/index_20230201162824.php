<?php
require_once(dirname(__FILE__,4).'/src/Controllers/DisplayMessageController.php' );


if (isset($_GET['action']) && $_GET['action'] !== '') {

    if ($_GET['action'] == 'chat') {

        getMessage();

    }
}
else{
    echo "hello";
}

