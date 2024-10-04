<?php

declare(strict_types=1);

function check_login_errors()
{
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        foreach ($errors as $error) {
            echo  '<p>' . $error . '</p>';
        }

        unset($_SESSION['errors_login']);
    } 
    else if (isset($_GET['login']) && $_GET['login'] === "success") {
        echo '<p> Login Successful!</p>';
    }
} 

function output_firstname()
{
    if (isset($_SESSION["user_id"])) {
        echo "Hello " . $_SESSION['firstname'];
    } else {
        echo 'You are not logged in';
    }
}



?>