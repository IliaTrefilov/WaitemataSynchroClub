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

