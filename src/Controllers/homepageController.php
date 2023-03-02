<?php 
session_start();
function homePage(){
    require_once(dirname(__FILE__, 2) . '/templates/navbar.phtml');
    require_once(dirname(__FILE__, 2) . '/templates/homepage.phtml');
}
