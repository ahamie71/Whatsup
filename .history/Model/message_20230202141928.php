<?php
function ConnectionDataBase()
{
    try {
        return new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'root', 'root');
    } catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
};
function getMsg()
{
    $db = ConnectionDataBase();
    $stmt = $db->prepare("SELECT *  FROM messages ");
    $stmt->execute();
    $msgs = [];
    while (($row = $stmt->fetch())) {
        $msgs = [
            
            'content' => $row['content'],
            'createdAt' => $row['createdAt'],
        ];
        $msgs[] = $msgs;
        
    }
    var_dump($)
   
    return $msgs;
}
