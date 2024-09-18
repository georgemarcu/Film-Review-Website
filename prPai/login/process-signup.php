<?php

#conditii pentru username
if (empty($_POST["username"])){
    die("Username required!");
}

#conditii pentru email
if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("Valid email required!");
}

if(strlen($_POST["password"]) < 8){
    die("Password must be at least 8 characters!");
}

if (! preg_match("/[a-z]/i",$_POST["password"])){
    die("Password needs at least one letter");
}

if (! preg_match("/[0-9]/i",$_POST["password"])){
    die("Password needs at least one number");
}

$password_hash = password_hash($_POST["password"],PASSWORD_DEFAULT);

$mysqli = require __DIR__ ."/database.php";

$sql = "INSERT INTO user (username, email, password_hash)
        VALUES (? , ? , ?)";

$stmt = $mysqli->stmt_init();

if(! $stmt ->prepare($sql)){
    die("SQL error:" . $mysqli->error);
}

$stmt->bind_param("sss",
                    $_POST["username"],
                    $_POST["email"],
                    $password_hash);

 try {
                        
 mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);
                                     
    if ($stmt->execute()) {
     header("Location: signups.html");
     exit;
     }
} catch (mysqli_sql_exception $e) {
                      
    error_log("MySQL error: " . $e->getMessage());
     die("Email already taken!");
}

?>