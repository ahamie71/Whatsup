<?php

function ConnectionDataBase()
{
    try {
        return new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'root', 'root');
    } catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
};
function register(){

    $con = ConnectionDataBase($name ,);
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