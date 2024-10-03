<?php
//The view shows the information inside the website

declare(strict_types=1);

function signup_inputs ()
{
    //Checks if FIRSTNAME was entered and if yes then it keeps the value
    if (isset($_SESSION["signup_data"]['firstname'])) {
        echo '<input type="text" name="firstname" placeholder="First Name" maxlength="50" value="' . $_SESSION["signup_data"]["firstname"] . '">';
    } else {
        echo '<input type="text" name="firstname" placeholder="First Name" maxlength="50">';
    }

    //Checks if LASTNAME was entered and if yes then it keeps that value
    if (isset($_SESSION["signup_data"]['lastname'])) {
        echo '<input type="text" name="lastname" placeholder="Last Name" maxlength="70" value="' . $_SESSION["signup_data"]["lastname"] . '">';
    } else {
        echo '<input type="text" name="lastname" placeholder="Last Name" maxlength="70">';
    }

    //Checks if EMAIL was entered and if yes AND it doesn't have any errors from signup_controller.php that were asigned in signup.php then it keeps that value
    if (isset($_SESSION["signup_data"]['email']) && !isset($_SESSION['errors_signup']['invalid_email']) && !isset($_SESSION['errors_signup']['email_used'])){
        echo '<input type="text" name="email" placeholder="Email@gmail.com" maxlength="320" value="' . $_SESSION["signup_data"]["email"] . '">';
    } else {
        echo '<input type="text" name="email" placeholder="Email@gmail.com  " maxlength="320">';
    }

    //Checks if PHONE was entered and if yes AND it doesn't have any errors from signup_controller.php that were asigned in signup.php then it keeps that value
    if (isset($_SESSION["signup_data"]['phone']) && !isset($_SESSION['errors_signup']['phone_used'])){
        echo '<input type="number" name="phone" placeholder="8888888888" pattern="[0-9]{10}" maxlength="10" required value="' . $_SESSION["signup_data"]["phone"] . '"> <label>Format: 0284210088 (No Spaces or Hyphens)</label>';
    } else {
        echo '<input type="number" name="phone" placeholder="8888888888" pattern="[0-9]{10}" maxlength="10" required> <label>Format: 0284210088 (No Spaces or Hyphens)</label>';
    }

    //Asks for you to put password in
    echo '<input type="text" name="pswd" placeholder="Password">';

}   

//Function that writes out all the errors that happened when signing up AND clears $_SESSION['errors_signup']
function check_signup_errors()
{
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p>' . $error . '</p>';
        }

        unset($_SESSION['errors_signup']);

        //Else if that checks the URL and sees if there's a part that says success. The url will have success if the sign up was succesful (set in signup.php). If there is it will type out text
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<p>Signup Succesful!</p>';
    }
}
?>