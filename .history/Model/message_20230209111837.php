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
    $stmt = $db->prepare("SELECT * FROM messages ");
    $stmt->execute();
    $msgs = [];
    while (($row = $stmt->fetch())) {
        $msg = [
            
            'content' => $row['content'],
            'createdAt' => $row['createdAt'],
            'user_id' => $row['user_id'],
            
        ];
        $msgs[] = $msg;  
    }
    return $msgs;
}

function addMsg(string $content, string $createdAt, $user_id)
{


    $con = ConnectionDataBase();
    $statement = $con->prepare("INSERT INTO messages (content,createdAt,user_id) VALUES (:content,:createdAt,:user_id)");
    $statement->execute(
        array(
            ':content' => $content,
            ':createdAt' => $createdAt,
           


        )
    );




}
function getiduser()
{
    $db = ConnectionDataBase();
    $sql = "SELECT * FROM  user ";
    $userStatement = $db->prepare($sql);
    $userStatement->execute();
    $user = $userStatement->fetch();

    var_dump($user);

    
}


    

    



