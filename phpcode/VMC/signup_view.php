<?php
//The view shows the information inside the website

declare(strict_types=1);

function signup_inputs ()
{
    //Checks if FIRSTNAME was entered and if yes then it keeps the value
    if (isset($_SESSION["signup_data"]['firstname'])) {
        echo '<h3>First Name</h3> <input type="text" name="firstname" placeholder="First Name" maxlength="50" value="' . $_SESSION["signup_data"]["firstname"] . '">';
    } else {
        echo '<h3>First Name</h3> <input type="text" name="firstname" placeholder="First Name" maxlength="50">';
    }

    //Checks if LASTNAME was entered and if yes then it keeps that value
    if (isset($_SESSION["signup_data"]['lastname'])) {
        echo '<h3>Last Name</h3> <input type="text" name="lastname" placeholder="Last Name" maxlength="70" value="' . $_SESSION["signup_data"]["lastname"] . '">';
    } else {
        echo '<h3>Last Name</h3> <input type="text" name="lastname" placeholder="Last Name" maxlength="70">';
    }

    //Checks if EMAIL was entered and if yes AND it doesn't have any errors from signup_controller.php that were asigned in signup.php then it keeps that value
    if (isset($_SESSION["signup_data"]['email']) && !isset($_SESSION['errors_signup']['invalid_email']) && !isset($_SESSION['errors_signup']['email_used'])){
        echo '<h3>Email</h3> <input type="text" name="email" placeholder="Example@gmail.com" maxlength="320" autocomplete="off" value="' . $_SESSION["signup_data"]["email"] . '">';
    } else {
        echo '<h3>Email</h3> <input type="text" name="email" placeholder="Example@gmail.com  " maxlength="320" autocomplete="off">';
    }

    //Checks if PHONE was entered and if yes AND it doesn't have any errors from signup_controller.php that were asigned in signup.php then it keeps that value
    if (isset($_SESSION["signup_data"]['phone']) && !isset($_SESSION['errors_signup']['phone_used'])){
        echo '<h3>Phone</h3> <input type="number" name="phone" placeholder="8888888888" pattern="[0-9]{10}" maxlength="10" value="' . $_SESSION["signup_data"]["phone"] . '" autocomplete="off" required> <br> <label>Format: 0284210088 (No Spaces or Hyphens)</label>';
    } else {
        echo '<h3>Phone</h3> <input type="number" name="phone" placeholder="8888888888" pattern="[0-9]{10}" maxlength="10" autocomplete="off" required> <br> <label>Format: 0284210088 (No Spaces or Hyphens)</label>';
    }
    
    //Asks for you to put password in
    echo '<h3>Password</h3> <input type="password" name="pswd" placeholder="Password" >';

}   

//Function that writes out all the errors that happened when signing up AND clears $_SESSION['errors_signup']
function check_signup_errors()
{
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        foreach ($errors as $error) {
            echo '<p class="error">' . $error . '</p>';
        }

        unset($_SESSION['errors_signup']);

        //Else if that checks the URL and sees if there's a part that says success. The url will have success if the sign up was succesful (set in signup.php). If there is it will type out text
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<p class="success">Signup Succesful!</p>';
    }
}
?>