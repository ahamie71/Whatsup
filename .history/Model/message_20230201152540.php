<?php
function ConnectionDataBase()
{
    try {
        $ConnectDB = new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'rot', 'root');
    } catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
}

