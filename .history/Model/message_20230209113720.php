<?php
session_start();

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
    $stmt = $db->prepare("SELECT * FROM messages ");
    $stmt->execute();
    $msgs = [];
    while (($row = $stmt->fetch())) {
        $msg = [
            
            'content' => $row['content'],
            'createdAt' => $row['createdAt'],
           
            
        ];
        $msgs[] = $msg;  
    }
    return $msgs;
}

function addMsg(string $content, string $createdAt )
{


    $con = ConnectionDataBase();
    $statement = $con->prepare("INSERT INTO messages (content,createdAt) VALUES (:content,:createdAt)");
    $statement->execute(
        array(
            ':content' => $content,
            ':createdAt' => $createdAt
            


        )
    );




}

    


    

    



