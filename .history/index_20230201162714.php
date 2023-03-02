<?php
require_once(dirname(__FILE__,2)'/Controllers/display' .)


if (isset($_GET['action']) && $_GET['action'] !== '') {

    if ($_GET['action'] == 'chat') {

        getMessage();

    }
}
else{
    echo "hello";
}

