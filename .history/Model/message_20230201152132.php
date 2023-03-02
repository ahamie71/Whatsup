<?php

function ConnectionDataBase()
{
        $ConnectDB = new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'root', 'root');
    }
}