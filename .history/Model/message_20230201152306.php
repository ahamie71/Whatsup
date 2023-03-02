<?php

function ConnectionDataBase()
{
    try {
        $ConnectDB = new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'root', 'root');
    }
    var_dump($ConnectDB)
}