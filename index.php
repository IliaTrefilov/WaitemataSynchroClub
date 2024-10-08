<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="synchro.css">
    <!-- Title is what the name of the tab is called when you have it open. I have made each page's title start with the pages name -->
    <title>HOME | WAITEMATA SYNCHRO CLUB</title>
</head>


<header> <!-- Links a phpfile that includes the navigation bar -->
    <?php require_once 'phpcode/navbar.php'; ?>
</header>


<body>
    <div class="content">
    <!-- Landing Image -->
        <img class='lander' src="images/test3.png">
    <!-- Next 2 Divs are the slanted rectangles in the background of the Awards Section -->
        <div class="inverse"></div>
        <div class="parallelogram"></div>
    <!-- I called it Awards but it's actually just quick facts about the club. Too much effort to change though -->
        <div class="awards">
            <div style="top:65px;">
                <img src="images/award.png">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div style="top:40px;">
                <img src="images/award.png">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
            </div>
            <div style="top:15px;">
                <img src="images/award.png">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="award4">
                <img src="images/award.png">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
            </div>
        </div>

        <!-- Picture + Text + Button -->
        <div class="middle">
            <div>
                <p class="middletext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                <h2 style="left:400px; top:275px">Sign Up NOW</h2>
            </div>
            <div class="bruht">
                <div class="middleimg">
                    <img class="middleimg" src="images/indeximage.png">
                </div>
            </div>
        </div>
    </div>
</body>


<!-- The Footer -->
<footer style="top:440px;">
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

