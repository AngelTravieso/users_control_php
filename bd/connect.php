<?php

    echo "hola";

    $dbName = "users_control";
    $host = "localhost";
    $port = 5432;
    $user = "root";
    $password = "";


    $connect_string = "host=$host port=$port dbname=$dbName user=$user password=$password";
    $db_connect = pg_connect($connect_string);




?>