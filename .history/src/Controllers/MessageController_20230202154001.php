<?php
 
function getMessages()
{

    require_once(dirname(__FILE__,3) .'/Model/message.php');
    $messages = getMsg();
    require_once(dirname(__FILE__, 3) . '/templates/displayMessage.phtml');

}
function EditMessage(){
    require_once(dirname(__FILE__,3) .'/Model/message.php');
       



}
    
