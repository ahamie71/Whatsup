<?php
if (isset($_GET['action']) && $_GET['action'] !== '') {

    if ($_GET['action'] == 'getMessages') {

        getMessage();

    }

}
else{
    echo "hello";
}

