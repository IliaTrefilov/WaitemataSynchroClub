<?php
//Controller takes care of information

declare(strict_types=1);

//Checks if any input fields were left empty
function is_input_empty(string $fname, string $lname, string $email, int $phone, string $pswd) 
{
    if (empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($pswd)) {
        return true;
    } else {
        return false;
    }
}

//Check if the email is invalid
function is_email_invalid(string $email) 
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

//Checks if email is already registered
function is_email_registered(object $pdo, string $email)
{
    if (get_email($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}

//Checks if phone number is taken
function is_phone_taken(object $pdo, int $phone)
{
    if (get_phone($pdo, $phone)) {
        return true;
    } else {
        return false;
    }
}

//Uses data from signup to make a user. Recalls a function from signup model 
function create_user(object $pdo, string $fname, string $lname, string $email, int $phone, string $pswd) 
{
    set_user($pdo, $fname, $lname, $email, $phone, $pswd);
}


?>