<?php

function getMessages()
{
    require_once(dirname(__FILE__, 3) . '/templates/navbar.phtml');
    require_once(dirname(__FILE__, 3) . '/Model/message.php');
    $messages = getMsg();
    require_once(dirname(__FILE__, 3) . '/templates/displayMessage.phtml');

}
function addmessage()
{
     require_once(dirname(__FILE__, 3) . '/Model/message.php');
    if (isset($_POST['content'])) {

        $content = $_POST['content'];
    } else {
        die("Please enter a message");
    }






}