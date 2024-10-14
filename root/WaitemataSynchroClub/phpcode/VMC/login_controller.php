<?php

declare (strict_types=1);

//Gets the email from the database

//Checks if any input fields were left empty
function is_input_empty(string $email, string $pswd) 
{
    if (empty($email) || empty($pswd)) {
        return true;
    } else {
        return false;
    }
}

//Checks if entered email is stored in the database
function is_email_wrong(bool|array $result)
{
    if (!$result) {
        return true;
    } else {
        return false;
    }
}

//Checks if entered password matched the hashed password stored in the database
function is_password_wrong(string $pswd, string $hashedpswd)
{
    if (!password_verify($pswd, $hashedpswd)) {
        return true;
    } else {
        return false;
    }
}
?>