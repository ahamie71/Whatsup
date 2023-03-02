<?php
 
function getMessages()
{
    require_once(dirname(__FILE__,3) .'/Model/message.php');
    $messages = getMsg();
    var_dump($messages);
   
    require_once(dirname(__FILE__, 3) . '/templates/displayMessage.phtml');

}


    
