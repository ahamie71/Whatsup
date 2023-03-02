<?php

if (isset($_GET['action'])) {
   
     if ($_GET['action'] == 'discuter') {
        require_once(dirname(__FILE__) . '/src/Controllers/MessageController.php');
        getMessages(); 
        }

} else {
    
        require_once(dirname(__FILE__) . '/src/Controllers/homepageController.php');
        homepage();
    }

 //index.php va nous rediriger vers la page 
 // index.php?action=discuter",


