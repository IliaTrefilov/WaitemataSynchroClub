<?php
unset($_SESSION['user_id']);
unset($_SESSION['classesid']);
session_start();
session_unset();
session_destroy();

header("Location: ../classes.php");
die();


?>