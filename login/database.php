<?php

$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

$mysqli = new mysqli( hostname: $host, 
                    username: $username, 
                    password:$password,
                    database:$dbname);

if($mysqli->connect_error){
    die("Connection error: " . $mysqli->connection_error );
}

return $mysqli;
