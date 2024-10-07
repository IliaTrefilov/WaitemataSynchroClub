<?php

declare(strict_types=1);

function check_login_errors()
{
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        foreach ($errors as $error) {
            echo  '<p class="error">' . $error . '</p>';
        }

        unset($_SESSION['errors_login']);
    }
} 

function output_firstname()
{
    if (isset($_SESSION["user_id"])) {
        echo '<h1 style="color: #06666d"> You are logged in as: <span style="color: #19a7b1">' . $_SESSION["firstname"] .'</span></h1>';
    } else {
        echo '<h1 style="color: #06666d">You are not logged in</h1>';
    }
}

function join_sessions()
{
    echo'<div class="box" id="box2">
        <form action="phpcode/joinsessions.php" method="post">
        <h1>Group One (5pm - 6pm)</h1>';
    if ($_SESSION['mondayfirst'] == 1) {
        echo '<h3>Monday</h3><input type="checkbox" name="mondayfirst" checked>';
    } else {
        echo '<h3>Monday</h3><input type="checkbox" name="mondayfirst">';
    }

    if ($_SESSION['tuesdayfirst'] == 1) {
        echo '<h3>Tuesday</h3><input type="checkbox" name="tuesdayfirst" checked>';
    } else {
        echo '<h3>Tuesday</h3><input type="checkbox" name="tuesdayfirst">';
    }

    if ($_SESSION['thursdayfirst'] == 1) {
        echo '<h3>Thursday</h3><input type="checkbox" name="thursdayfirst" checked>';
    } else {
        echo '<h3>Thursday</h3><input type="checkbox" name="thursdayfirst">';
    }

    if ($_SESSION['saturdayfirst'] == 1) {
        echo '<h3>Saturday</h3><input type="checkbox" name="saturdayfirst" checked>';
    } else {
        echo '<h3>Saturday</h3><input type="checkbox" name="saturdayfirst">';
    }

    echo '</div>
        <div class="box" id="box3">
        <h1>Group Two (6:15pm - 7:30pm)</h1>';

    if ($_SESSION['mondaysecond'] == 1) {
        echo '<h3>Monday</h3><input type="checkbox" name="mondaysecond" checked>';
    } else {
        echo '<h3>Monday</h3><input type="checkbox" name="mondaysecond">';
    }

    if ($_SESSION['tuesdaysecond'] == 1) {
        echo '<h3>Tuesday</h3><input type="checkbox" name="tuesdaysecond" checked>';
    } else {
        echo '<h3>Tuesday</h3><input type="checkbox" name="tuesdaysecond">';
    }

    if ($_SESSION['thursdaysecond'] == 1) {
        echo '<h3>Thursday</h3><input type="checkbox" name="thursdaysecond" checked>';
    } else {
        echo '<h3>Thursday</h3><input type="checkbox" name="thursdaysecond">';
    }

    if ($_SESSION['saturdaysecond'] == 1) {
        echo '<h3>Saturday</h3><input type="checkbox" name="saturdaysecond" checked>';
    } else {
        echo '<h3>Saturday</h3><input type="checkbox" name="saturdaysecond">';
    }
    echo '<h6></h6><button>Submit Times</button></form></div>';


    }


function session_chance()
{
    if (isset($_GET["sessionchange"]) && $_GET["sessionchange"] === "success") {
        echo '<p class="success">Session Change Succesful!</p>';
    }
}


?>