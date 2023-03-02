<?php
function ConnectionDataBase()
{
    try {
        return new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
;
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
            'id' => $row['id'],
            



        ];
        $msgs[] = $msg;
    }
    return $msgs;
}

function addMsg(string $content, string $createdAt, $user_id,)
{

    $con = ConnectionDataBase();
    $statement = $con->prepare("INSERT INTO messages (content,createdAt,user_id) VALUES (:content,:createdAt,:user_id)");
    $statement->execute(
        array(
            ':content' => $content,
            ':createdAt' => $createdAt,
            ':user_id' => $user_id
        )
    );

}


function getMessageById($id)
{
    
    $Connect = ConnectionDataBase();
    $sql = "SELECT * FROM messages WHERE id= $id";
    $search = $Connect->prepare($sql);
    $search->execute();
    $msg = $search->fetch();
   
    return $msg;
    
}

function EditMsg($content ,$id)
{
   
    $Connect = ConnectionDataBase();
    $update = $Connect->prepare("UPDATE  messages SET content = :content WHERE id = $id");
    $update->execute(
        array(
            ':content' => $content,
        )
    );

}

function getMessageByUserId($id)
{



    $Connect = ConnectionDataBase();
    $sql = "SELECT * FROM messages WHERE id= $id";
    $search = $Connect->prepare($sql);
    $search->execute();
    $user = $search->fetch();
    
    $user_id=$user['user_id'];
    
     var_dump($user_id);
     
    
}


function DeleteMsg($id){
   

    $Connect = ConnectionDataBase();
    $sql = "DELETE FROM messages WHERE id= $id";
    $delet = $Connect->prepare($sql);
    $delet->execute();

}

