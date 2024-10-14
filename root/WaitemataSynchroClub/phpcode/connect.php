<?php

$dsn = "mysql:host=localhost;dbname=synchroclub";
$dbusername="root";
$dbpassword="usbw";

//Tries run code and can CATCH an error and runs other code if an error occurs
try{
    //$pdo is the connection to the database
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //If there's an error this will get the error message and say on the website why it failed
} catch(PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}

?>