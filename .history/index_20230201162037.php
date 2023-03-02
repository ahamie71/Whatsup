<?php
if (isset($_GET['action']) && $_GET['action'] !== '') {

    if ($_GET['action'] == 'Tchat') {

        getMessage();

    }
}
else{
    echo "hello";
}

