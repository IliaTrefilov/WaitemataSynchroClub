<?php
//Connects php files to use function and start a session
require_once 'phpcode/configsession.php';
require_once 'phpcode/VMC/login_view.php';
require_once 'phpcode/VMC/signup_view.php';
?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="synchro.css">
    <!-- Title is what the name of the tab is called when you have it open. I have made each page's title start with the pages name -->
    <title>CLASSES | WAITEMATA SYNCHRO CLUB</title>
</head>
<!--Navigation Bar + Link to stylesheet-->
<header>
    
    <?php include 'phpcode/navbar.php'; ?>
       
</header>

<body>

    <h1>
    <?php
    output_firstname();
    ?>
    </h1>

<!-- Log in form  -->
    <h1>Log In</h1>
    <form action="phpcode/login.php" method="post">
        <input type="text" name="email" placeholder="E-mail" autocomplete="off">
        <input type="password" name="pswd" placeholder="Password" autocomplete="off">
        <button>Sign In</button> 
    </form>

    <?php
    check_login_errors();
    ?>

<!-- Sign up form -->
    <h1>Sign Up</h1>
    <form action="phpcode/signup.php" method="post">
        <?php
        signup_inputs();
        ?>

        <button>Sign Up</button> 
    </form>

    <?php
    check_signup_errors();
    ?>

<!-- Logout form/button -->
    <h1>Log Out</h1>
    <form action="phpcode/logout.php" method="post">
        <button>Logout</button>
    </form>
</body>