<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {
  
  $mysqli = require __DIR__ . "/database.php";

  $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                    $mysqli->real_escape_string($_POST["email"]));
  
  $result = $mysqli->query($sql);

  $username = $result->fetch_assoc();

  if($username){
    if(password_verify($_POST["password"], $username["password_hash"])){
        session_start();

        session_regenerate_id();
        $_SESSION["user_id"] = $username["id"];
        header("Location: ../index.php");
        exit;

    } else{
        die("Invalid login!");
    }

  }

}

?>