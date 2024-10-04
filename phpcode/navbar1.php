<!-- navbar.php -->
<?php
// Get the current file name, e.g., 'index.php', 'about.php'
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav>
  <ul>
    <li><a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Home</a></li>
    <li><a href="about.php" class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>">About</a></li>
    <li><a href="services.php" class="<?= ($currentPage == 'services.php') ? 'active' : '' ?>">Services</a></li>
    <li><a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Contact</a></li>
  </ul>
</nav>

<div class="content">
    <!-- Navigation Bar -->
    <nav>  
        <ul>
            <!-- <a> with the class "Openpage" is the page which is open. This class makes the text yellow to make it easier for users to see what page is open  -->
            <li><a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Home</a></li>
            <li><a href="clubinfo.php" class="<?= ($currentPage == 'clubinfo.php') ? 'active' : '' ?>">Club Info</a></li>
            <li><a href="compinfo.php" class="<?= ($currentPage == 'compinfo.php') ? 'active' : '' ?>">Competition Info</a></li>
            <li><a href="classes.php" class="<?= ($currentPage == 'classes.php') ? 'active' : '' ?>">Classes</a></li>
            <li><a href="gallery.php" class="<?= ($currentPage == 'gallery.php') ? 'active' : '' ?>">Gallery </a></li>
            <li><a href="sponsors.php" class="<?= ($currentPage == 'sponsors.php') ? 'active' : '' ?>">Sponsors</a></li>
            <li<a href="contacts.php" class="<?= ($currentPage == 'contacts.php') ? 'active' : '' ?>">Contacts</a></li>
                <div class="imglinks">
                    <a class="facebook" href="www.google.com"><img src="images/facebook.png"></a>
                    <a href="www.learncoach.com"><img src="images/instagram.png"></a>
                </div>
        </ul>
    </nav>
    <a href="home.html"><img class="logo" src="images/logo.png"></a>
</div>

<!-- Style the nav bar -->
<style>
  .openpage{
        color:#fafe00c0;
    }
    
    ul a{
        text-decoration: none;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color:#19a7b1;
        position:relative;
        padding-left:6.354vw;
        font-size:1.1vw;
        left:5.52vw;
        top:0.68vw;
    }   

    nav{
        padding-top:2.73vH;
        padding-bottom:2.73VH;
    }

    nav li, nav img{
        display:inline;
    }

    header .imglinks img{
        position:absolute;
        width:2.6vw;
        left:81.25vw;
        top:-37px;
    }

    header img:hover{
        transform: scale(1.05);
        transition-duration: 0.2s;
    }
    header a:hover{
        color:white;
    }
</style>
