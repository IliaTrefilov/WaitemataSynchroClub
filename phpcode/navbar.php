<!-- navbar.php -->
<?php
// Get the current file name, e.g., 'index.php', 'about.php'
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<div class='content'>
  <nav>
    <ul>
      <li><a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Home</a></li>
      <li><a href="clubinfo.php" class="<?= ($currentPage == 'clubinfo.php') ? 'active' : '' ?>">Club Info</a></li>
      <li><a href="compinfo.php" class="<?= ($currentPage == 'compinfo.php') ? 'active' : '' ?>">Competition Info</a></li>
      <li><a href="classes.php" class="<?= ($currentPage == 'classes.php') ? 'active' : '' ?>">Classes</a></li>
      <li><a href="gallery.php" class="<?= ($currentPage == 'gallery.php') ? 'active' : '' ?>">Gallery</a></li>
      <li><a href="sponsors.php" class="<?= ($currentPage == 'sponsors.php') ? 'active' : '' ?>">Sponsors</a></li>
      <li><a href="contacts.php" class="<?= ($currentPage == 'contacts.php') ? 'active' : '' ?>">Contacts</a></li>
        <div class="imglinks">
          <a class="facebook" href="www.google.com"><img src="images/facebook.png"></a>
          <a href="www.learncoach.com"><img src="images/instagram.png"></a>
        </div>
    </ul>
  </nav>
  <a href="home.html"><img class="logo" src="images/logo.png"></a>
</div>
