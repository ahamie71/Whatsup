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
        $msg = [
            'title' => $['title'],
            'content' => $messages['content'],
            'createdAt' => $messages['createdAt'],


        ];
        $msg[] = $msg;

        return $msg;



    }
}
