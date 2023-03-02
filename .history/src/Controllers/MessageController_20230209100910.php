<?php

function getMessages()
{
    require_once(dirname(__FILE__, 3) . '/templates/navbar.phtml');
    require_once(dirname(__FILE__, 3) . '/Model/message.php');
    $messages = getMsg();
    require_once(dirname(__FILE__, 3) . '/templates/displayMessage.phtml');

}
function addmessage(string $content , string $createdAt)
{ 
        if (isset($_POST['content']) && ($_POST['createdAt'])){
            $content = $_POST['content'];
            $createdAt= $_POST['createdAt'];

        } else {
            die("Please enter a message");
        }

        require_once(dirname(__FILE__, 3) . '/Model/message.php');
        addMsg(string $content , string $createdAt);
    
}

    





