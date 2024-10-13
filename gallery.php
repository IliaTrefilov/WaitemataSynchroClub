<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png" type="image/logo.png">
    <link rel="stylesheet" href="gallery.css">
    <!-- Title is what the name of the tab is called when you have it open. I have made each page's title start with the pages name -->
    <title>Gallery | WAITEMATA SYNCHRO CLUB</title>
</head>


<body>

    <!-- Links a phpfile that includes the navigation bar -->
    <?php require_once 'phpcode/navbar.php'; ?>

    <!-- <div class="content"> -->
    <div class="content gallery">
        <h1 class="bruh">2023 Artistic Swimming Australia Open</h1>
        <div class="underline bruh"></div>
            <div class="vertrow">
                <img src="images/piggyback.png" alt="Two club members doing a piggybank">
                <img src="images/piggyback.png" alt="Two club members doing a piggybank">
                <img src="images/piggyback.png" alt="Two club members doing a piggybank">
            </div>
            <div class="vertrow">
                <img src="images/standingauopen.png" alt="Club members at Australia Open">
                <img src="images/standingauopen.png" alt="Club members at Australia Open">
            </div>
    </div>

    <div style="position:relative; top:200px;" class="content gallery">
        <h1 class="bruh">2023 Artistic Swimming Australia Open</h1>
        <div class="underline2 bruh"></div>
            <div class="vertrow">
                <img src="images/piggyback.png" alt="Two club members doing a piggybank">
                <img src="images/piggyback.png" alt="Two club members doing a piggybank">
                <img src="images/piggyback.png" alt="Two club members doing a piggybank">
            </div>
            <div class="vertrow">
                <img src="images/standingauopen.png" alt="Club members at Australia Open">
                <img src="images/standingauopen.png" alt="Club members at Australia Open">
            </div>
    </div>

    <div style="height:200px;"></div>

    <?php require_once 'phpcode/footer.php';?>

</body>
</html>