<?php

try {

$pdo = New PDO("mysql:host=localhost","root","");

$pdo->exec("
CREATE DATABASE train_s DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;");



}catch(PDOException $e){

    echo "can't create the db";

}


?>
