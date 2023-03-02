<?php

function ConnectionDa()
{

    try{
         $con = new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'root', 'root');

}

}