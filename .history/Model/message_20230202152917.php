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
        $msg = [
            
            'content' => $row['content'],
            'createdAt' => $row['createdAt'],
        ];
        $msgs[] = $msg;
        
    }
  
   
    return $msgs;
}

function editMsg(){
    $id= $_GET['id'];
    $con = ConnectionDataBase();
   
    
  
    $db = new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'root', 'root');
    $update = $db->prepare("UPDATE  messages SET content = :content WHERE id = $id");
    $update->execute(
        array(
            ':content' => $content,
        )

    

}