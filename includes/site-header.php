<?php
$page = basename($_SERVER['PHP_SELF'] ?? 'index.php');
?>
<header class="header">
    <div class="wrap nav">
        <a href="index.php" class="brand">
            <img src="assets/images/sharmila-logo.png" alt="School Logo">
            <span>
                <b>SHARMILA ENTERPRISES</b>
                <small>PRIMARY SCHOOL</small>
            </span>
        </a>

        <button class="toggle" aria-label="Toggle navigation" aria-expanded="false">☰</button>

        <nav>
            <a href="index.php" class="<?= $page === 'index.php' ? 'active' : '' ?>">Home</a>
            <a href="about.php" class="<?= $page === 'about.php' ? 'active' : '' ?>">About</a>
            <a href="learning.php" class="<?= $page === 'learning.php' ? 'active' : '' ?>">Learning</a>
            <a href="admissions.php" class="<?= $page === 'admissions.php' ? 'active' : '' ?>">Admissions</a>
            <a href="contact.php" class="nav-contact <?= $page === 'contact.php' ? 'active' : '' ?>">Contact Us</a>
        </nav>
    </div>
</header>
