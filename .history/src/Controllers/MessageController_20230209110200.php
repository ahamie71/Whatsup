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
        if (isset($_POST['content'])){
            $content = $_POST['content'];
            $createdAt = date('Y-m-d H:i:s');
            $user_id
       
        } else {
            die("Please enter a message");
        }
        require_once(dirname(__FILE__, 3) . '/Model/message.php');
        addMsg($content, $createdAt,$user_id);
        ;
    
}

    





