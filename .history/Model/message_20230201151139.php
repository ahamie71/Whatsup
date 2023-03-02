<?php

function dbConnect()
{
    try {
        $con = new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'root', 'root'');

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

