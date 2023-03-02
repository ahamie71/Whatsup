<?php



function message()
{
    require_once(dirname(__FILE__,3) .'/Model/message.php');
  $message = getMessages();
    require_once(dirname(__FILE__, 3) . '/templates/displayMessage.phtml');

}


    
