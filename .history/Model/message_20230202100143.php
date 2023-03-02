<?php
function ConnectionDataBase()
{
    try {
        return new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'root', 'root');
    } catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
};

function getMessages()
{

    $db = ConnectionDataBase();
    $stmt = $db->prepare("SELECT *  FROM messages ");
    $msg = [];
    while (($row = $stmt->fetch())) {
        $msgs = [
            'title' => $row['title'],
            'content' => $row['content'],
            'createdAt' => $row['createdAt'],


        ];
        $msg[] = $msg;

        return $msg;



    }
}