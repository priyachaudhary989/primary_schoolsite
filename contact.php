
<?php
require_once __DIR__ . '/config.php';
$page = basename($_SERVER['PHP_SELF']);
?>

<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<meta name="description" content="Contact SHARMILA ENTERPRISES Primary School for admission enquiries, class information, fees and general assistance.">

<meta name="keywords" content="SHARMILA ENTERPRISES, Contact Us, School Admission, Primary School, Assam">

<title>Contact Us | SHARMILA ENTERPRISES</title>

<link rel="icon" href="assets/images/sharmila-logo.png">
<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<!-- HEADER -->

<?php include 'includes/site-header.php'; ?>

<main>

<!-- CONTACT BANNER -->

<section class="banner">
<div class="wrap">

<label>CONTACT US</label>

<h1>Get in Touch With Us</h1>

<p>
We are here to help parents and students
with school admission and other enquiries.
</p>

</div>
</section>


<!-- CONTACT INTRODUCTION -->

<section class="section">
<div class="wrap center">

<label>WE ARE HERE TO HELP</label>

<h2>Connect With SHARMILA ENTERPRISES</h2>

<p>
Have questions about school admissions,
classes, fees or general information?
Feel free to contact us. We will be happy
to assist you.
</p>

</div>
</section>


<!-- CONTACT INFORMATION -->

<section class="section pale">
<div class="wrap">

<div class="center">
<label>OUR CONTACT DETAILS</label>
<h2>Contact Information</h2>
</div>

<div class="cards three">

<article class="contact-card">
<div class="contact-icon">📱</div>

<h3>Phone / WhatsApp</h3>

<p>
<a href="tel:+91<?= e($school['phone']) ?>">+91 <?= e($school['phone']) ?></a>
</p>

<a href="https://wa.me/91<?= e($school['phone']) ?>"
target="_blank" rel="noopener">
Chat on WhatsApp
</a>
</article>


<article class="contact-card">
<div class="contact-icon">✉️</div>

<h3>Email Address</h3>

<p>
<a href="mailto:<?= e($school['emails'][0]) ?>">
<?= e($school['emails'][0]) ?>
</a>
</p>

<p>
<a href="mailto:<?= e($school['emails'][1]) ?>">
<?= e($school['emails'][1]) ?>
</a>
</p>
</article>


<article class="contact-card">
<div class="contact-icon">📍</div>

<h3>Our Address</h3>

<p>
<?= e($school['address']) ?>
</p>

<a href="https://www.google.com/maps/search/?api=1&query=<?= urlencode($school['address']) ?>"
target="_blank" rel="noopener">
View Location
</a>
</article>

</div>
</div>
</section>


<!-- WHATSAPP ENQUIRY FORM -->

<section class="section">
<div class="wrap whatsapp-section">

<div class="whatsapp-info">

<label>WHATSAPP ENQUIRY</label>

<h2>Send Your Message Directly to Us</h2>

<p>
Have any questions about school admission,
classes or other information? Fill in the form
and send your enquiry directly to our WhatsApp.
</p>

<h3>📱 SHARMILA ENTERPRISES</h3>

<p>
WhatsApp: +91 <?= e($school['phone']) ?>
</p>

<a class="btn"
href="https://wa.me/91<?= e($school['phone']) ?>"
target="_blank" rel="noopener">
Open WhatsApp Chat
</a>

</div>




<div class="whatsapp-form">

<h2>Send Your Enquiry</h2>


<form id="whatsappForm">

    <p class="form-privacy-note">Your enquiry opens in WhatsApp for you to review and send. The website does not store your message.</p>

    <div class="form-group">
        <label for="customerName">Your Full Name</label>
        <input type="text" id="customerName" name="name" autocomplete="name"
               placeholder="Enter your name" maxlength="80" required>
    </div>

    <div class="form-group">
        <label for="customerPhone">Mobile Number</label>
        <input type="tel" id="customerPhone" name="phone" autocomplete="tel"
               placeholder="Enter mobile number"
               inputmode="tel" pattern="[0-9+()\-\s]{10,18}" maxlength="18" required>
    </div>

    <div class="form-group">
        <label for="customerEmail">Email Address</label>
        <input type="email" id="customerEmail" name="email" autocomplete="email"
               placeholder="Enter your email address" maxlength="254" required>
    </div>

    <div class="form-group">
        <label for="customerSubject">Enquiry Subject</label>
        <select id="customerSubject" name="subject" required>
            <option value="">Select Enquiry</option>
            <option>School Admission</option>
            <option>Primary Section Information</option>
            <option>Class Information</option>
            <option>Fee Enquiry</option>
            <option>General Enquiry</option>
            <option>Other</option>
        </select>
    </div>

    <div class="form-group">
        <label for="customerMessage">Your Message</label>
        <textarea id="customerMessage" name="message" maxlength="2000"
                  placeholder="Write your message here..."
                  rows="5" required></textarea>
    </div>

    <p id="whatsappFormStatus" class="form-status" role="status" aria-live="polite"></p>

    <button type="submit" class="whatsapp-submit">Continue to WhatsApp</button>

</form>


</div>

</div>
</section>


<!-- WHY CONTACT US -->

<section class="section pale">
<div class="wrap">

<div class="center">
<label>HOW WE CAN HELP</label>
<h2>What Can You Enquire About?</h2>
</div>

<div class="cards three">

<article>
<h3>🎓 School Admission</h3>
<p>
Get information about admission procedures
and available school opportunities.
</p>
</article>

<article>
<h3>📚 Class Information</h3>
<p>
Ask us about primary section classes
and learning-related information.
</p>
</article>

<article>
<h3>💰 Fee Enquiry</h3>
<p>
Contact us for information regarding
school fees and related queries.
</p>
</article>

</div>
</div>
</section>


<!-- LOCATION SECTION -->

<section class="section">
<div class="wrap">

<div class="center">

<label>FIND US</label>

<h2>Our School Location</h2>

<p>
<?= e($school['address']) ?>
</p>

<a class="btn btn-primary"
href="https://www.google.com/maps/search/?api=1&query=<?= urlencode($school['address']) ?>"
target="_blank" rel="noopener">
View on Google Maps
</a>

</div>

</div>
</section>


<!-- FAQ SECTION -->

<section class="section pale">
<div class="wrap">

<div class="center">
<label>FREQUENTLY ASKED QUESTIONS</label>
<h2>How Can We Help You?</h2>
</div>

<div class="cards">

<article>
<h3>1. How can I contact the school?</h3>
<p>
You can contact SHARMILA ENTERPRISES
through phone, WhatsApp or email.
</p>
</article>

<article>
<h3>2. How can I enquire about admission?</h3>
<p>
You can submit the WhatsApp enquiry form
on this page for admission-related information.
</p>
</article>

<article>
<h3>3. Can I ask about school fees?</h3>
<p>
Yes. Select Fee Enquiry in the WhatsApp form
and send your question directly to us.
</p>
</article>

</div>

</div>
</section>


<!-- FINAL CTA -->

<section class="section director-cta">
<div class="wrap center">

<h2>We Look Forward to Hearing From You!</h2>

<p>
Connect with SHARMILA ENTERPRISES
for school information and enquiries.
</p>

<a href="https://wa.me/91<?= e($school['phone']) ?>"
class="btn btn-primary"
target="_blank" rel="noopener">
Chat With Us on WhatsApp
</a>

</div>
</section>




<!-- WHATSAPP FORM SCRIPT -->

<script>
const enquiryForm = document.getElementById('whatsappForm');
if (enquiryForm) {
    const makeEnquiryMessage = function () {
        return {
            name: document.getElementById('customerName').value.trim(),
            phone: document.getElementById('customerPhone').value.trim(),
            email: document.getElementById('customerEmail').value.trim(),
            subject: document.getElementById('customerSubject').value,
            message: document.getElementById('customerMessage').value.trim()
        };
    };

    enquiryForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const enquiry = makeEnquiryMessage();
        const status = document.getElementById('whatsappFormStatus');

        if (!enquiryForm.reportValidity()) return;
        if (!enquiry.name || !enquiry.phone || !enquiry.email || !enquiry.subject || !enquiry.message) {
            status.textContent = 'Please complete every field before continuing.';
            return;
        }

        const whatsappMessage = `Hello SHARMILA ENTERPRISES,\n\nWebsite Enquiry\n\nName: ${enquiry.name}\nMobile: ${enquiry.phone}\nEmail: ${enquiry.email}\nSubject: ${enquiry.subject}\n\nMessage:\n${enquiry.message}\n\nThank you.`;
        const whatsappURL = 'https://wa.me/91<?= e($school['phone']) ?>?text=' + encodeURIComponent(whatsappMessage);
        status.textContent = 'Opening WhatsApp with your enquiry. Please review and tap Send there.';

        const whatsappWindow = window.open(whatsappURL, '_blank', 'noopener,noreferrer');
        if (!whatsappWindow) window.location.assign(whatsappURL);
    });
}
</script>

<?php include 'includes/footer.php'; ?>
