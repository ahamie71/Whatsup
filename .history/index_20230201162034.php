<?php
if (isset($_GET['action']) && $_GET['action'] !== '') {

    if ($_GET['action'] == 'Tcat') {

        getMessage();

    }
}
else{
    echo "hello";
}

