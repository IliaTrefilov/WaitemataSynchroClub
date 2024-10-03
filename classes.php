<?php
//Connects php files to use function and start a session
require_once 'phpcode/configsession.php';
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
    <!-- Where ever I have something set as class="content" I am making it centered when you zoom out -->
    <div class="content">
        <!-- Navigation Bar -->
        <nav>  
            <ul>
                <!-- <a> with the class "Openpage" is the page which is open. This class makes the text yellow to make it easier for users to see what page is open  -->
                <li><a href="index.html">Home</a></li>
                <li><a href="clubinfo.html">Club Info</a></li>
                <li><a href="compinfo.html">Competition Info</a></li>
                <li><a class="openpage"href="classes.php">Classes</a></li>
                <li><a href="gallery.html">Gallery </a></li>
                <li><a href="sponsors.html">Sponsors</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                    <div class="imglinks">
                        <a class="facebook" href="www.google.com"><img src="images/facebook.png"></a>
                        <a href="www.learncoach.com"><img src="images/instagram.png"></a>
                    </div>
            </ul>
        </nav>
        <a href="home.html"><img class="logo" src="images/logo.png"></a>
    </div>
</header>

<body>

    <h1>Log In</h1>
    <!-- Log in form  -->
    <form action="phpcode/login.php" method="post">
        <input type="text" name="email" placeholder="E-mail">
        <input type="password" name="pswd" placeholder="Password">
        <button>Sign In</button> 
    </form>


    <h1>Sign Up</h1>
    <!-- Sign up form -->
    <form action="phpcode/signup.php" method="post">
        <?php
        signup_inputs();
        ?>

        <button>Sign Up</button> 
    </form>

    <?php
    check_signup_errors();
    ?>

</body>