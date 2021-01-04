<?php

$config = require_once 'config.php';

$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
    $config['mysql_password'],
    $config['mysql_db'] );   //L'estensione MySQLi è un driver di database relazionale utilizzato nel linguaggio di scripting PHP per fornire un'interfaccia con i database MySQL

unset ($config); //distruggiamo la variabile dopo aver effettuato la connessione


if($mysqli->connect_error){
        die($mysqli->connect_error);
}



