<?php
function ConnectionDataBase()
{
    try {
        $ConnectDB = new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'root', 'root');
    } catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
};

function getMessages(){

    $con = ConnectionDataBase();
    $stmt = $con->prepare("SELECT * FROM messages WHERE id=? ");
    $stmt ->execute();
    $messages = $stmt->fetchAll();
    
   
    


}
