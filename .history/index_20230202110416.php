<?php

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'discuter') {
        
        
        

        getMessages();
    }else{

        homepage();
    }
}
   
