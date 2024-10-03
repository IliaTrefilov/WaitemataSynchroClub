<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $email = $_POST["email"];
    $phonebad = $_POST["phone"];
    $phone = intval($phonebad);
    $pswd = $_POST["pswd"];
        
    //Checks if email or password that is being entered a SQL query
    try {
        //Connects lots of other php files to this file
        require_once "connect.php";  
        require_once "VMC/signup_model.php";
        require_once "VMC/signup_controller.php";

        //Error Handlers from signup_controller.php. If the errors array is empty then there were no errors signing up and the data is uploaded to the database. If the errors array has something then it is told stored into the global variable "$_SESSION" and echoed using signup_view.php
        $errors = [];

        if (is_input_empty($fname, $lname, $email, $phone, $pswd)) {
            $errors["empty_input"] = "Fill in all fields!";
        }

        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Invalid email used!";
        }

        if (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email is already registered!";
        }

        if (is_phone_taken($pdo, $phone)) {
            $errors["phone_used"] = "Phone number is already registered!";
        }

        //Connects configsession.php because it starts a safe session
        require_once 'configsession.php';

        //If there are errors it will be put into the global array $_SESSION and sent to signup_view.php to display it online. Also gets the data that was inputed and puts in into $_SESSION to be used later to input back into the fields for you to change.
        if ($errors) {
            $_SESSION["errors_signup"] = $errors;

            //Array that I will send back to class.php so that 
            $signupdata = [
                'firstname' => $fname,
                "lastname" => $lname,
                'email' => $email,
                'phone' => $phone
            ];
            $_SESSION["signup_data"] = $signupdata;

            header("Location: ../classes.php");
            die();
        }

        create_user($pdo, $fname, $lname, $email, $phone, $pswd);

        header("Location: ../classes.php?signup=success");
        $pdo = null;
        $stmt = null;
        die();

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../classes.php");
    die();
}

?>