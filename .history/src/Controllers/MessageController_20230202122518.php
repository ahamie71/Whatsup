<?php
 
function getMessages()
{
    $messages = getMessa();
    require_once(dirname(__FILE__,3) .'/Model/message.php');
    require_once(dirname(__FILE__, 3) . '/templates/displayMessage.phtml');

}


    