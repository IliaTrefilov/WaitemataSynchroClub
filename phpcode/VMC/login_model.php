<?php

declare (strict_types=1);

//Gets the email from the database

function get_user(object $pdo, string $email)
{
    $query = "SELECT * FROM users WHERE email = :email;";

    //Makes a prepared statement that is secure from SQL injections
    $stmt = $pdo -> prepare($query);
    $stmt -> bindParam(":email", $email);
    $stmt -> execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

?>