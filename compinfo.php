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

<!-- Events -->
        <div class="history" style="left:80px;">
            <h1 class="bruh" style="color:#06666d; font-size:42px;">Events</h1>
            <div class="underline bruh" style="top:80px;"></div>
            <div id="eventspara"><p id="eventspara"style="left:100px;top:100px; text-align:left !important;">
                - Synchro Challenge Day : 3d June 2024
                <br>- North Island Championship : 16-18 June 2024 : Wellington
                <br>- Club Competition : August, TBC
                <br>- National Championships : 22-26 September 2024 Auckland
                <br>- End of year performance : December</p></div>
            <img id="eventsimg" style="left:200px;"src="images/events.png">
        </div>

<!-- Results -->
        <div class="history2">
            <div style="position:relative; left:360px;">
                <h1 class="bruh" style="color:#06666d; font-size:42px;">Results</h1>
                <div class="underline bruh" style="top:80px;"></div>
            </div>
            <div id="plz" class="results">
                <a href="https://synchroswimnz.org.nz/media/710/2021-virtual-nz-open-summary-results.pdf">- Nationals 2022</a>
                <br><a href="https://synchroswimnz.org.nz/media/671/north-islands-2021-final-results.pdf">- Virtual Open 2021</a>
                <br><a href="https://synchroswimnz.org.nz/media/671/north-islands-2021-final-results.pdf">- North Island Championships</a>
            </div>      
            <img id="resultsimg" style="left:670px;"src="images/results.png">
        </div>


<!-- Rules -->
        <div class="history" style="left:80px;">
            <h1 class="bruh" style="color:#06666d; font-size:42px;">Rules/Policies</h1>
            <div class="underline bruh" style="top:80px;"></div>
            <div class="rules"><p id="eventspara"style="left:100px;top:100px; text-align:left !important;">
                <a href="https://www.waitematasynchro.com/_files/ugd/93a194_a980127582944be485b7eeaa211c7bae.pdf">- Basic positions in artistic swimming</a>
                <br><a href="https://www.waitematasynchro.com/_files/ugd/93a194_26f5c27db37149c6833fceb6fca4c189.pdf">- Basic transitions in artistic swimming</a>
                <br><a href="https://www.waitematasynchro.com/_files/ugd/2807bd_83381d32c097480db6992bd62d37f5fc.pdf">- Health and Safety policy</a>
                <br><a href="https://www.waitematasynchro.com/_files/ugd/2807bd_f5831fd0ce314ecf992e7fffb94811e0.pdf">- Athletics code of Ethics</a>
                <br><a href="https://www.waitematasynchro.com/_files/ugd/2807bd_ffdf915962c646c8946bf96487a952b8.pdf">- Internet policy</a>
                <br><a href="https://www.waitematasynchro.com/_files/ugd/2807bd_4d86bea627d348269aaa7a4193ab958a.pdf">- Code of conduct</a>
                </p></div>
            <img id="eventsimg" style="left:200px;"src="images/rules.png">
        </div>
    </div>
</body>


<!-- The Footer -->
<footer style=" top:80px;">
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

