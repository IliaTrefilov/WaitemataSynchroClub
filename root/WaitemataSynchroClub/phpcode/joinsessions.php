<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monfir = isset($_POST["mondayfirst"]) ? 1 : 0;
    $monsec = isset($_POST["mondaysecond"]) ? 1 : 0;
    $tuefir = isset($_POST["tuesdayfirst"]) ? 1 : 0;
    $tuesec = isset($_POST["tuesdaysecond"]) ? 1 : 0;
    $thurfir = isset($_POST["thursdayfirst"]) ? 1 : 0;
    $thursec = isset($_POST["thursdaysecond"]) ? 1 : 0;
    $satfir = isset($_POST["saturdayfirst"]) ? 1 : 0;
    $satsec = isset($_POST["saturdaysecond"]) ? 1 : 0;

    try {
        //Connects lots of other php files to this file
        require_once 'connect.php';
        require_once 'VMC/login_model.php';
        require_once 'VMC/login_controller.php';

        //Connects configsession.php because it starts a safe session
        require_once 'configsession.php';

        $userid = $_SESSION['user_id'];
        
        if (!isset($_SESSION['classesid'])) {
            joinsessions($pdo, $userid,  $monfir,  $monsec,  $tuefir,  $tuesec,  $thurfir,  $thursec,  $satfir,  $satsec);
        } else {
            editsessions($pdo, $userid,  $monfir,  $monsec,  $tuefir,  $tuesec,  $thurfir,  $thursec,  $satfir,  $satsec);
        }

        $resultdays = get_days($pdo, $userid);
        $_SESSION['classesid'] = $resultdays['ID'];
        $_SESSION['mondayfirst'] = $resultdays['MondayFirst'];
        $_SESSION['mondaysecond'] = $resultdays['MondaySecond'];
        $_SESSION['tuesdayfirst'] = $resultdays['TuesdayFirst'];
        $_SESSION['tuesdaysecond'] = $resultdays['TuesdaySecond'];
        $_SESSION['thursdayfirst'] = $resultdays['ThursdayFirst'];
        $_SESSION['thursdaysecond'] = $resultdays['ThursdaySecond'];
        $_SESSION['saturdayfirst'] = $resultdays['SaturdayFirst'];
        $_SESSION['saturdaysecond'] = $resultdays['SaturdaySecond'];   
        

        header("Location: ../classes.php?sessionchange=success");
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
