<?php

function dbConnect()
{
	try {
    	$database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'password');



