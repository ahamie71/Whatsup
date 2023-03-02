<?php

function message()
{
  $message = getMessages();
    require_once(dirname(__FILE__, 3) . '/templates/displayMessage.phtml');

}


    
