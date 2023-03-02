<?php
function ConnectionDataBase()
{
    try{
     
      $connect  = new PDO('mysql:host=localhost;dbname=train;charset=utf8', 'root', 'root');

};

}