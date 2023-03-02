<?php
function connectionDataBase()
{
    try {
        return new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
;
function getMessages()
{
    $db = connectionDataBase();
    $stmt = $db->prepare("SELECT * FROM messages ");
    $stmt->execute();
    $msgs = [];
    while (($row = $stmt->fetch())) {
        $msg = [

            'content' => $row['content'],
            'createdAt' => $row['createdAt'],
            'id' => $row['id'],
            'user_id' => $row['user_id'],
        ];
        $msgs[] = $msg;
    }
    return $msgs;
}

function addMessage(string $content, string $createdAt, $user_id, )
{

    $con = connectionDataBase();
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

    $Connect = connectionDataBase();
    $sql = "SELECT * FROM messages WHERE id= $id";
    $search = $Connect->prepare($sql);
    $search->execute();
    $msg = $search->fetch();
    return $msg;

}

function editMessage($content, $id)
{
    $Connect = connectionDataBase();
    $update = $Connect->prepare("UPDATE  messages SET content = :content WHERE id = $id");
    $update->execute(
        array(
            ':content' => $content,
        )
    );

}

function deleteMessage($id)
{
    $Connect = connectionDataBase();
    $sql = "DELETE FROM messages WHERE id= $id";
    $delet = $Connect->prepare($sql);
    $delet->execute();

}