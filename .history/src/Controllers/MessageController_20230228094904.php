<?php
session_start();
function GetMessages()
{
    require_once(dirname(__FILE__, 3) . '/templates/navbar.phtml');
    require_once(dirname(__FILE__, 3) . '/Model/message.php');
    $messages = getMsg();
    require_once(dirname(__FILE__, 3) . '/templates/displayMessage.phtml');
}
function AddMessage()
{
    if (isset($_POST['content'])) {
        $content = $_POST['content'];
        $createdAt = date('Y-m-d H:i:s');
        $user_id = $_SESSION['user']['id'];
    } else {
        die("Please enter a message");
    }
    require_once(dirname(__FILE__, 3) . '/Model/message.php');
    addMsg($content, $createdAt, $user_id, );
    header("location:index.php?action=Discuss");
    exit();

}

function UpdateMsg()
{


    if (isset($_POST['content'])) {
        $content = $_POST['content'];
        $id = $_GET['messageid'];
        require_once(dirname(__FILE__, 3) . '/Model/message.php');
        $message = getMessageById($_GET['messageid']);
        if ($_SESSION['user']['id'] == $message['user_id']) {
            EditMsg($content, $id);
            header("location:index.php?action=Discuss");
        } else {
            header("location:index.php?action=Discuss");
            ;
        }


    }

    require_once(dirname(__FILE__, 3) . '/Model/message.php');
    $message = getMessageById($_GET['messageid']);
    require_once(dirname(__FILE__, 3) . '/templates/edit.phtml');
}

function delete()
{

    $id = $_GET['messageid'];
    require_once(dirname(__FILE__, 3) . '/Model/message.php');
    $msg = getMessageById($_GET['messageid']);
    if ($_SESSION['user']['id'] == $msg['user_id']) {
        deleteMsg($id);
        header("location:index.php?action=discuter");
    } else {
        echo "Mdr vous voulez supprimer le message d'une autre personne , mais vous etes bete  mdrrrrrrr";
    }



}