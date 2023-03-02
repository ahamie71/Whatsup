<?php 
session_start();
function homeage(){
    require_once(dirname(__FILE__, 3) . '/templates/navbar.phtml');
    require_once(dirname(__FILE__, 3) . '/templates/homepage.phtml');
}
