<?php
if (isset($_GET['action']) && $_GET['action'] !== '') {

    if ($_GET['action'] == '') {

        getMessage();

    }
}
else{
    echo "hello";
}

