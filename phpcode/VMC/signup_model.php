<?php
//The model file that queries the database

declare(strict_types=1);

//Gets the email from the database
function get_email(object $pdo, string $email)
{
    $query = "SELECT email FROM users WHERE email = :email;";

    //Makes a prepared statement that is secure from SQL injections
    $stmt = $pdo -> prepare($query);
    $stmt -> bindParam(":email", $email);
    $stmt -> execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

//Gets the phone number from the database
function get_phone(object $pdo, string $phone)
{
    //Makes a prepared statement that is secure from SQL injections
    $query = "SELECT phone FROM users WHERE phone = :phone;";
    $stmt = $pdo -> prepare($query);
    $stmt -> bindParam(":phone", $phone);
    $stmt -> execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $fname, string $lname, string $email, string $phone, string $pswd)
{
    //Makes a prepared statement that is secure from SQL injections
    $query = "INSERT INTO users (Firstname, Lastname, Phone, Email, pswd) VALUES (:Firstname, :Lastname, :phone, :email, :pswd) ;";
    $stmt = $pdo -> prepare($query);

    //Hashes the password so it's not readable in the database
    $options = [
        'cost' => 12
    ];
    $hashedpswd = password_hash($pswd, PASSWORD_BCRYPT, $options);

    //Enters variables in the parameters
    $stmt -> bindParam(":Firstname", $fname);
    $stmt -> bindParam(":Lastname", $lname);
    $stmt -> bindParam(":phone", $phone);
    $stmt -> bindParam(":email", $email);
    $stmt -> bindParam(":pswd", $hashedpswd);
    $stmt -> execute();
}

?>

