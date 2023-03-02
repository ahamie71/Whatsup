<?php
 
function getMessages()
{
    $messages = getMsg();
    
    require_once(dirname(__FILE__, 3) . '/templates/displayMessage.phtml');

}


    
