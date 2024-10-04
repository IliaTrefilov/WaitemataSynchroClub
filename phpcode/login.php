<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pswdbad = $_POST["pswd"];
    $pswd = strval($pswdbad);

    try {
        //Connects lots of other php files to this file
        require_once 'connect.php';
        require_once 'VMC/login_model.php';
        require_once 'VMC/login_controller.php';

        //Error Handlers from signup_controller.php. If the errors array is empty then there were no errors signing up and the data is uploaded to the database. If the errors array has something then it is told stored into the global variable "$_SESSION" and echoed using signup_view.php
        $errors = [];

        if (is_input_empty($email, $pswd)) {
            $errors["empty_input"] = "Fill in all fields!";
        }

        $result = get_user($pdo, $email);

        if (is_email_wrong($result)) {
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        if (!is_email_wrong($result) && is_password_wrong($pswd, $result["pswd"])) {
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        //Connects configsession.php because it starts a safe session
        require_once 'configsession.php';

        //If there are errors it will be put into the global array $_SESSION and sent to signup_view.php to display it online. Also gets the data that was inputed and puts in into $_SESSION to be used later to input back into the fields for you to change.
        if ($errors) {
            $_SESSION["errors_login"] = $errors;

            header("Location: ../classes.php");
            die();
        }

        //Creates a new session Id for the user
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["UserID"];
        session_id($sessionId);

        //Adds a thing to the global variable to be used in configsession.php. Also gives $_SESSION data of the first name to be displayed later. The first name has been sanitized by htmlspecialchars to make sure nothing malicious can happen
        $_SESSION["user_id"] = $result["UserID"];
        $_SESSION["firstname"] = htmlspecialchars($result["Firstname"]);

        $_SESSION["last_regeneration"]= time();

        header("Location: ../classes.php?login=success");
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