<?php
require_once(dirnam


if (isset($_GET['action']) && $_GET['action'] !== '') {

    if ($_GET['action'] == 'chat') {

        getMessage();

    }
}
else{
    echo "hello";
}

