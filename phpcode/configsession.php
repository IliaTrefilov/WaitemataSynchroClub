<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

//Sets parameters for cookies. Makes them safer
session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

//Starts a session
session_start();

//Regenarates the cookie every 30 minutes
if (!isset ($_SESSION["last_regeneration"])) {
    session_regenerate_id();
    $_SESSION["last_regeneration"]= time();
} else {
    $interval = 60*30;
    if (time()- $_SESSION["last_regeneration"] >= $interval){
        session_regenerate_id();
        $_SESSION["last_regeneration"]= time();
    }
}

?>