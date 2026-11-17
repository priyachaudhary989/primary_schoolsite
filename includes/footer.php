
</main>

<footer class="footer">

    <div class="wrap footer-grid">

        <div class="footer-about">

            <a href="index.php" class="footer-brand">
                <img src="assets/images/sharmila-logo.png" alt="School Logo">

                <span>
                    <strong>SHARMILA ENTERPRISES</strong>
                    <small>PRIMARY SCHOOL</small>
                </span>
            </a>

            <p>
                Creating a positive learning environment
                where children can learn, grow and excel.
            </p>

            <div class="footer-motto">
                Learn • Grow • Excel
            </div>

        </div>

        <div class="footer-links">

            <h3>Quick Links</h3>

            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="learning.php">Learning</a>
            <a href="admissions.php">Admissions</a>
            <a href="contact.php">Contact</a>

        </div>

        <div class="footer-contact">

            <h3>Contact Information</h3>

            <p>📍 <?= e($school['address']) ?></p>

            <p>
                📞
                <a href="tel:<?= e($school['phone']) ?>">
                    <?= e($school['phone']) ?>
                </a>
            </p>

            <p>
                ✉️
                <a href="mailto:<?= e($school['emails'][0]) ?>">
                    <?= e($school['emails'][0]) ?>
                </a>
            </p>

        </div>

    </div>

    <div class="footer-bottom">
        <div class="wrap footer-bottom-inner">

            <p>
                © <?= date('Y') ?> SHARMILA ENTERPRISES.
                All rights reserved.
            </p>

            <p>Learn • Grow • Excel</p>

        </div>
    </div>

</footer>

<script src="assets/js/main.js"></script>

</body>
</html>
