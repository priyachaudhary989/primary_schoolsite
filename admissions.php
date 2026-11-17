
<?php
$school = [
    'name' => 'SHARMILA ENTERPRISES',
    'phone' => '9101098127',
    'emails' => [
        'lokchetry497@gmail.com',
        'basnetlok1@gmail.com'
    ],
    'address' => 'C/O: Tilak Khulal, Habigaon Grant, Udalguri, Assam, 784507'
];

include 'includes/header.php';
?>
<!-- ADMISSION HERO -->

<section class="admission-hero">
<div class="wrap admission-hero-grid">

<div class="admission-hero-content">
<label>ADMISSIONS OPEN FOR ENQUIRIES</label>

<h1>Give Your Child a <span>Bright Start</span></h1>

<p>
Every child's journey begins with a first step.
Discover the learning opportunities at
SHARMILA ENTERPRISES and connect with us
for primary section admission information.
</p>

<div class="admission-buttons">
<a class="btn" href="tel:<?= e($school['phone']) ?>">
Call for Admission
</a>

<a class="btn light"
href="mailto:<?= e($school['emails'][0]) ?>?subject=Admission%20Enquiry">
Send Enquiry
</a>
</div>

<div class="admission-tagline">
Learn • Grow • Excel
</div>
</div>

<div class="admission-hero-image">
<img
src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1000&q=85"
alt="Children learning in a classroom">
</div>

</div>
</section>


<!-- WELCOME -->

<section class="section">
<div class="wrap split admission-welcome">

<div>
<label>WELCOME TO OUR SCHOOL</label>

<h2>A Happy Beginning for Every Child</h2>

<p>
At SHARMILA ENTERPRISES, we believe that
the early years of education play an important
role in building a child's future.
</p>

<p>
Our aim is to encourage young learners to
develop curiosity, confidence, creativity,
communication and positive values.
</p>

<p>
Parents and guardians are welcome to contact
us to understand the primary section and
available admission information.
</p>

<a href="about.php" class="btn">Know About Our School</a>
</div>

<img
class="admission-side-image"
src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=900&q=85"
alt="Students learning and studying">

</div>
</section>


<!-- WHY CHOOSE SCHOOL -->

<section class="section pale">
<div class="wrap">

<div class="admission-heading">
<label>WHY CHOOSE US</label>
<h2>A Positive Environment for Young Minds</h2>
<p>
We aim to support children's academic,
creative and personal development.
</p>
</div>

<div class="cards three">

<article>
<h3>📚 Learning Foundation</h3>
<p>
Encouraging reading, writing, communication
and essential academic skills.
</p>
</article>

<article>
<h3>🌱 Overall Development</h3>
<p>
Supporting creativity, confidence,
curiosity and personal growth.
</p>
</article>

<article>
<h3>🤝 Positive Values</h3>
<p>
Promoting kindness, respect,
discipline and teamwork.
</p>
</article>

<article>
<h3>🎨 Creative Learning</h3>
<p>
Encouraging imagination and
participation in activities.
</p>
</article>

<article>
<h3>⭐ Individual Growth</h3>
<p>
Recognising that every child has
different interests and abilities.
</p>
</article>

<article>
<h3>💛 Parent Partnership</h3>
<p>
Encouraging communication between
parents and the school.
</p>
</article>

</div>
</div>
</section>


<!-- ADMISSION PROCESS -->

<section class="section">
<div class="wrap">

<div class="admission-heading">
<label>ADMISSION PROCESS</label>
<h2>How to Enquire About Admission</h2>
<p>Follow these simple steps to get school admission information.</p>
</div>

<div class="admission-steps">

<div class="admission-step">
<div class="step-number">01</div>
<h3>Contact School</h3>
<p>Call or email us to ask about admission availability.</p>
</div>

<div class="admission-step">
<div class="step-number">02</div>
<h3>Discuss Requirements</h3>
<p>Ask about classes, age criteria, fees and school timings.</p>
</div>

<div class="admission-step">
<div class="step-number">03</div>
<h3>Visit the School</h3>
<p>Contact the school to arrange a visit and discuss the process.</p>
</div>

<div class="admission-step">
<div class="step-number">04</div>
<h3>Complete Enquiry</h3>
<p>Follow the school's instructions for documents and admission formalities.</p>
</div>

</div>
</div>
</section>


<!-- DOCUMENTS -->

<section class="section pale">
<div class="wrap split">

<div>
<label>ADMISSION INFORMATION</label>
<h2>Documents to Ask About</h2>

<p>
The school will confirm the final document
requirements for the relevant class.
</p>

<ul class="document-list">
<li>✓ Student's birth certificate</li>
<li>✓ Recent passport-size photographs</li>
<li>✓ Parent or guardian identity proof</li>
<li>✓ Previous school records, if applicable</li>
<li>✓ Transfer certificate, if applicable</li>
</ul>

<p class="small-note">
Please confirm the required documents with
the school before submitting them.
</p>
</div>

<img
class="admission-side-image"
src="https://images.unsplash.com/photo-1453738773917-9c3eff1db985?auto=format&fit=crop&w=900&q=85"
alt="Books and school learning materials">

</div>
</section>


<!-- STUDENT INFORMATION -->

<section class="section">
<div class="wrap student-info">

<div>
<label>FOR PARENTS & GUARDIANS</label>
<h2>Let's Discuss Your Child's Admission</h2>

<p>
When contacting us, please keep the following
student details ready:
</p>

<div class="student-detail-grid">
<div>👦 Student's Full Name</div>
<div>🎂 Student's Age</div>
<div>📘 Class of Interest</div>
<div>🏫 Previous School, if any</div>
<div>👨‍👩‍👧 Parent / Guardian Name</div>
<div>📞 Contact Number</div>
</div>

<p class="small-note">
Age eligibility, class availability and admission
requirements must be confirmed directly with the school.
</p>
</div>

</div>
</section>


<!-- PHOTO GALLERY -->

<section class="section pale">
<div class="wrap">

<div class="admission-heading">
<label>OUR LEARNING WORLD</label>
<h2>A Place to Learn and Discover</h2>
<p>
Explore the spirit of education, creativity
and childhood learning.
</p>
</div>

<div class="admission-gallery">

<img
src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=85"
alt="Classroom learning">

<img
src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=85"
alt="Students studying">

<img
src="https://images.unsplash.com/photo-1453738773917-9c3eff1db985?auto=format&fit=crop&w=800&q=85"
alt="Books and educational materials">

</div>
</div>
</section>


<!-- DIRECT CONTACT -->

<section class="admission-contact">
<div class="wrap admission-contact-box">

<div>
<label>START YOUR ENQUIRY TODAY</label>

<h2>Give Your Child the Opportunity to Grow</h2>

<p>
For primary section information and admission
enquiries, contact SHARMILA ENTERPRISES.
</p>
</div>

<div class="admission-contact-buttons">

<a class="btn" href="tel:<?= e($school['phone']) ?>">
📞 Call Now
</a>

<a class="btn light"
href="mailto:<?= e($school['emails'][0]) ?>?subject=Admission%20Enquiry">
✉ Email Us
</a>

</div>

</div>
</section>


<!-- SCHOOL ADDRESS -->

<section class="section">
<div class="wrap school-contact-info">

<div>
<label>VISIT OR CONTACT US</label>

<h2>SHARMILA ENTERPRISES</h2>

<p>📍 <?= e($school['address']) ?></p>

<p>
📞 <?= e($school['phone']) ?>
</p>

<p>
✉ <?= e($school['emails'][0]) ?>
</p>

<p>
✉ <?= e($school['emails'][1]) ?>
</p>

</div>

<a href="contact.php" class="btn">
Full Contact Details
</a>

</div>
</section>


<!-- SHARED FOOTER -->

<?php include 'includes/footer.php'; ?>
