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
    <div class="content gallery">
        <h1 class="bruh">Gallery Location One</h1>
        <div class="underline bruh"></div>
        <div class="Galledup">

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