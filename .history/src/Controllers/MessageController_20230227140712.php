<?php
session_start();
function getMessages()
{
    require_once(dirname(__FILE__, 3) . '/templates/navbar.phtml');
    require_once(dirname(__FILE__, 3) . '/Model/message.php');
    $messages = getMsg();
    require_once(dirname(__FILE__, 3) . '/templates/displayMessage.phtml');
}
function addmessage()
{
    if (isset($_POST['content'])) {
        $content = $_POST['content'];
        $createdAt = date('Y-m-d H:i:s');
        $user_id = 161;
       


    } else {
        die("Please enter a message");
    }
    require_once(dirname(__FILE__, 3) . '/Model/message.php');
    addMsg($content, $createdAt, $user_id,);
    header("location:index.php?action=discuter");
    exit();

}

function updateMsg()
{
    if (isset($_POST['content'])) {
        $content = $_POST['content'];
        $id= $_GET['messageid'];
        require_once(dirname(__FILE__, 3) . '/Model/message.php');
        EditMsg($content,$id);
        header("location:index.php?action=discuter");
    } 
    require_once(dirname(__FILE__, 3) . '/Model/message.php');
    $message = getMessageById($_GET['messageid']);
    require_once(dirname(__FILE__, 3) . '/templates/edit.phtml'); 
}

function delete(){
     require_once(dirname(__FILE__, 3) . '/Model/message.php');
      $
     $id= $_GET['messageid'];
   
    
     
      deleteMsg($id);

   header("location:index.php?action=discuter");
}
 

