<?php
function ConnectionDataBase()
{
    try {
        $ConnectDB = new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'root', 'root');
    } catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
};

function getMessage(){

    $con = ConnectionDataBase();
    $sql = "SELECT * FROM  messages where message_id= ? ";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $message = $stmt->fetchAll();
    


}
