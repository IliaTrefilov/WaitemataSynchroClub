<?php

//Checks if email or password that is being entered a SQL query
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pswd = $_POST["pswd"];

    try {
    //Connects connect.php to this file
        require_once "connect.php";  

    //The query to add data into the database without any values though
        $query = "INSERT INTO user (email, pswd) VALUES (?, ?);";

    //Makes database run the query but doesn't input anything yet for safety reasons
        $stmt = $pdo->prepare($query);
        
    //Submits info to database
        $stmt->execute([$email, $pswd]);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");
        
        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }


}  else {
    header("Location: ../index.php");
}

?>