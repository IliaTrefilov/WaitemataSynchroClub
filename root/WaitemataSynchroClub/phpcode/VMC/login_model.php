<?php

declare (strict_types=1);

//Gets the email from the database

function get_user(object $pdo, string $email)
{
    $query = "SELECT * FROM users WHERE email = :email;";

    //Makes a prepared statement that is secure from SQL injections
    $stmt = $pdo -> prepare($query);
    $stmt -> bindParam(":email", $email);
    $stmt -> execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_days(object $pdo, int $userid)
{
    $query = "SELECT * FROM classes WHERE ID = :userid;";

    //Makes a prepared statement that is secure from SQL injections
    $stmt = $pdo -> prepare($query);
    $stmt -> bindParam(":userid", $userid);
    $stmt -> execute();

    $resultdays = $stmt->fetch(PDO::FETCH_ASSOC);
    return $resultdays;
}

function joinsessions(object $pdo, int $userid, int $monfir, int $monsec, int $tuefir, int $tuesec, int $thurfir, int $thursec, int $satfir, int $satsec)
{
    //Makes a prepared statement that is secure from SQL injections
    $query = "INSERT INTO classes (ID, MondayFirst, MondaySecond, TuesdayFirst, TuesdaySecond, ThursdayFirst, ThursdaySecond, SaturdayFirst, SaturdaySecond) VALUES (:id, :mf, :ms, :tuf, :tus, :thf, :ths, :sf, :ss) ;";
    $stmt = $pdo -> prepare($query);

    //Enters variables in the parameters
    $stmt -> bindParam(":id", $userid);
    $stmt -> bindParam(":mf", $monfir);
    $stmt -> bindParam(":ms", $monsec);
    $stmt -> bindParam(":tuf", $tuefir);
    $stmt -> bindParam(":tus", $tuesec);
    $stmt -> bindParam(":thf", $thurfir);
    $stmt -> bindParam(":ths", $thursec);
    $stmt -> bindParam(":sf", $satfir);
    $stmt -> bindParam(":ss", $satsec);
    $stmt -> execute();
}

function editsessions(object $pdo, int $userid, int $monfir, int $monsec, int $tuefir, int $tuesec, int $thurfir, int $thursec, int $satfir, int $satsec)
{
    //Makes a prepared statement that is secure from SQL injections
    $query = "UPDATE classes SET MondayFirst = :mf, MondaySecond = :ms, TuesdayFirst = :tuf, TuesdaySecond = :tus, ThursdayFirst = :thf,ThursdaySecond = :ths, SaturdayFirst = :sf, SaturdaySecond = :ss WHERE id = :id;";
    $stmt = $pdo -> prepare($query);

    //Enters variables in the parameters
    $stmt -> bindParam(":mf", $monfir);
    $stmt -> bindParam(":ms", $monsec);
    $stmt -> bindParam(":tuf", $tuefir);
    $stmt -> bindParam(":tus", $tuesec);
    $stmt -> bindParam(":thf", $thurfir);
    $stmt -> bindParam(":ths", $thursec);
    $stmt -> bindParam(":sf", $satfir);
    $stmt -> bindParam(":ss", $satsec);
    $stmt -> bindParam(":id", $userid);
    $stmt -> execute();
}

?>