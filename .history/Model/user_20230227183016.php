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
function register(string $name, string $password ,string $email , string $role){
    
    
    $con = ConnectionDataBase();
    $req = $con->prepare("INSERT INTO user (name,Email,password,role) VALUES (:name,:Email,:password,:role)");
    $req->execute(
        array(
            ':name' => $name,
            ':password' => $password,
            ':role' => $role,
            ':Email' => $email
        )
    );
}

function getUserByName($name)
{ 
   
    $db = ConnectionDataBase();
    $req = "SELECT * FROM  user WHERE name = '$name'";
    $userStatement = $db->prepare($req);
    $userStatement->execute();
    $user = $userStatement->fetch();
    
    return  $user;
   
}

function loginAttempts($L);