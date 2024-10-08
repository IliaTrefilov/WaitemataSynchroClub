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

<header> <!-- Links a phpfile that includes the navigation bar -->
    <?php require_once 'phpcode/navbar.php'; ?>
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

            <?php check_login_errors(); ?>


    <!-- Sign up form. Values are filled using signup_view.php-->
            <form action="phpcode/signup.php" method="post">
            <h1>Sign Up</h1>

            <?php
            check_signup_errors(); 
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

<!-- The Footer -->
<footer style="top:150px;">
    <div class="content">
        <!-- Footermain is to be able to display the divs inline-block -->
        <div class="footermain">
            <!-- Left Side -->
            <div class="footerdiv">
                <h1>Contact Us</h1>
                <p>
                    Email: <a style="color:yellow;" href="mailto:20303@lbc.school.nz">20303@lbc.school.nz</a>
                    <br>Phone: +64 28 421 0088
                    <br>Address: 120 Deep Creek Road, Torbay
                </p>     
                <p style=" left:10px; top:10px;">&copy; 2023, All images are free for use </p>
            </div>
            <!-- Right Side -->
            <div  class="footerdiv2">
                <h1>Follow Us</h1>
                    <a href="https://learncoach.com/?src=9blke5ApNmlb&gclid=EAIaIQobChMI9s3s6ajdgAMVbByDAx3VJwa1EAAYASAAEgJg3fD_BwE"> <img src="images/instagram.png"></a>
                    <a href="https://www.khanacademy.org/"> <img src="images/facebook.png"></a>
            </div>
        </div>
    </div>
</footer>
