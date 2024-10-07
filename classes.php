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
    <link rel="stylesheet" href="login.css">
    <!-- Title is what the name of the tab is called when you have it open. I have made each page's title start with the pages name -->
    <title>CLASSES | WAITEMATA SYNCHRO CLUB</title>
</head>
<!--Navigation Bar + Link to stylesheet-->
<header>
<header>
    <!-- Where ever I have something set as class="content" I am making it centered when you zoom out -->
    <div class="content">
        <!-- Navigation Bar -->
        <nav>  
            <ul>
                <!-- <a> with the class "Openpage" is the page which is open. This class makes the text yellow to make it easier for users to see what page is open  -->
                <li><a href="index.php">Home</a></li>
                <li><a href="clubinfo.html">Club Info</a></li>
                <li><a href="compinfo.html">Competition Info</a></li>
                <li><a class="openpage" href="classes.php">Classes</a></li>
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
</header>

<body>
    <div class="content">
        <h1>
        <?php
        output_firstname();
        ?>
        </h1>

<!-- Php checks if $_SESSION doesn't have user id set. It will be set if logged in. Since we are not logged in, it will display Log In and Sign Up forms.  -->
    <!-- Log in form  -->
        <?php if (!isset($_SESSION['user_id'])) {?>    
            
            <form action="phpcode/login.php" method="post">
            <h1>Log In</h1>
                <h3>Email</h3>
                <input type="text" name="email" placeholder="E-mail" autocomplete="off">
                <h3>Password</h3>
                <input type="password" name="pswd" placeholder="Password" autocomplete="off">
                <h6></h6>
                <button>Sign In</button> 
            </form>


    <!-- Sign up form. Values are filled using signup_view.php-->
            <form action="phpcode/signup.php" method="post">
            <h1>Sign Up</h1>

            <?php
            check_signup_errors();
            ?>
                <?php
                signup_inputs();
                ?>

            <h6></h6>
            <button>Sign Up</button> 
            </form>

        <?php } ?>

    <!-- ONCE SIGNED IN. Session changing /Logout forms -->
        <?php if (isset($_SESSION['user_id'])) {?>    
            <form action="phpcode/logout.php" method="post">
                <button>Logout</button>
            </form>

            <div class="container">
                    <div class="box" id="box1">
                        <h1> Training Sessions </h1>
                        <p> Group 1 is for younger kids (5-15)  and happens from 5pm - 6pm.
                        Group 2 is for older kids/adults (16-100) and happens from 6:15pm - 7:30pm. Please pick only the days for the group you are interested in. It is recommended you come on all days but its is fine if you skip one or two days a week. <br>
                    Message us if you have any questions!</p>
                    </div>
                <?php join_sessions();
                session_change();
                ?>

                
                
            </div>
        
        <?php } ?>
            
        

    </div>
</body>