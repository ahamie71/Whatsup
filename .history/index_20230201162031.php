<?php
if (isset($_GET['action']) && $_GET['action'] !== '') {

    if ($_GET['action'] == 't') {

        getMessage();

    }
}
else{
    echo "hello";
}

