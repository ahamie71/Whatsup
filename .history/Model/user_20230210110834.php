<?php

function ConnectionDataBase()
{
    try {
        return new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'root', 'root');
    } catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
};
function register(string $name, string $pass ,string $email , string $role){
    
    $con = ConnectionDataBase();
    $req = $con->prepare("INSERT INTO user (name,password,role,email) VALUES (:name,:password,:role,:email)");
    $req->execute(
        array(
            ':name' => $name,
            ':password' => $pass,
            ':role' => $role,
            ':email' => $email
        )
    );
}

function login($name ,$password)
{ 
   
    $db = ConnectionDataBase();
    $req = "SELECT * FROM  user WHERE name = '$name'";
    $userStatement = $db->prepare($req);
    $userStatement->execute();
    $user = $userStatement->fetch();
 
    if($user)
    {
        $pass= $user['password'];
        
    }
   
}