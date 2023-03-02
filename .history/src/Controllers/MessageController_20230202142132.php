<?php
 
function getMessages()
{
    require_once(dirname(__FILE__,3) .'/Model/message.php');
    $messages = getMsg();
    var_dump()
   
    require_once(dirname(__FILE__, 3) . '/templates/displayMessage.phtml');

}


    
