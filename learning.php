
<?php
$school = [
    'name' => 'SHARMILA ENTERPRISES',
    'phone' => '9101098127',
    'emails' => ['lokchetry497@gmail.com', 'basnetlok1@gmail.com'],
    'address' => 'C/O: Tilak Khulal, Habigaon Grant, Udalguri, Assam, 784507'
];

function e($v) {
    return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
}

$page = basename($_SERVER['PHP_SELF']);
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="SHARMILA ENTERPRISES Primary School - Learning, activities and education.">

<title>Learning & Activities | SHARMILA ENTERPRISES</title>

<link rel="icon" href="assets/images/sharmila-logo.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    color: #26344a;
    background: #fff;
}

img {
    max-width: 100%;
    display: block;
}

.wrap {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

/* HERO */

.learning-hero {
    min-height: 480px;
    display: flex;
    align-items: center;
    background:
    linear-gradient(90deg, rgba(12,35,73,.92), rgba(12,35,73,.35)),
    url('https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1800&q=85') center/cover;
    color: white;
}

.hero-content {
    max-width: 680px;
    padding: 80px 0;
}

.hero-tag {
    display: inline-block;
    background: #f5a623;
    color: #172d55;
    padding: 9px 18px;
    border-radius: 30px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1px;
}

.learning-hero h1 {
    font-size: clamp(36px, 5vw, 58px);
    line-height: 1.2;
    margin: 22px 0;
    color: white;
}

.learning-hero p {
    font-size: 16px;
    line-height: 1.9;
    color: #f2f4f8;
    max-width: 550px;
}

.hero-btn {
    display: inline-block;
    margin-top: 28px;
    padding: 14px 28px;
    border-radius: 6px;
    background: #f5a623;
    color: #142b50;
    text-decoration: none;
    font-weight: 700;
    transition: .3s;
}

.hero-btn:hover {
    background: white;
    transform: translateY(-3px);
}

/* COMMON SECTION */

.section {
    padding: 85px 0;
}

.section-heading {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 45px;
}

.section-heading span {
    color: #ef9b23;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 2px;
}

.section-heading h2 {
    font-size: 34px;
    color: #17356a;
    margin: 12px 0;
}

.section-heading p {
    color: #69758a;
    line-height: 1.8;
    font-size: 14px;
}

/* INTRO */

.intro-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 55px;
    align-items: center;
}

.intro-image {
    position: relative;
}

.intro-image img {
    width: 100%;
    height: 420px;
    object-fit: cover;
    border-radius: 12px;
}

.intro-text h2 {
    color: #17356a;
    font-size: 34px;
    margin-bottom: 20px;
}

.intro-text p {
    color: #68758a;
    line-height: 1.9;
    margin-bottom: 15px;
}

.intro-points {
    margin-top: 20px;
}

.intro-points p {
    color: #26344a;
    font-weight: 600;
    margin: 12px 0;
}

/* LEARNING CARDS */

.learning-section {
    background: #f5f8fc;
}

.cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}

.learning-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 22px rgba(0,0,0,.06);
    transition: .3s;
}

.learning-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0,0,0,.12);
}

.learning-card img {
    width: 100%;
    height: 190px;
    object-fit: cover;
}

.card-content {
    padding: 22px;
}

.card-content h3 {
    color: #17356a;
    font-size: 17px;
    margin-bottom: 12px;
}

.card-content p {
    font-size: 13px;
    color: #718096;
    line-height: 1.8;
}

/* ACTIVITIES */

.activity-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.activity-card {
    position: relative;
    height: 280px;
    border-radius: 12px;
    overflow: hidden;
}

.activity-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .5s;
}

.activity-card:hover img {
    transform: scale(1.08);
}

.activity-overlay {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: end;
    padding: 25px;
    background: linear-gradient(transparent, rgba(0,0,0,.8));
}

.activity-overlay h3 {
    color: white;
    font-size: 21px;
}

/* WHY CHOOSE US */

.why-section {
    background: #17356a;
    color: white;
}

.why-section .section-heading h2 {
    color: white;
}

.why-section .section-heading p {
    color: #d6dfef;
}

.why-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
}

.why-card {
    text-align: center;
    padding: 30px 18px;
    background: rgba(255,255,255,.09);
    border: 1px solid rgba(255,255,255,.15);
    border-radius: 10px;
}

.why-icon {
    font-size: 38px;
    margin-bottom: 15px;
}

.why-card h3 {
    font-size: 17px;
    margin-bottom: 10px;
}

.why-card p {
    font-size: 13px;
    line-height: 1.8;
    color: #d6dfef;
}

/* GALLERY */

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.gallery-grid img {
    height: 240px;
    width: 100%;
    object-fit: cover;
    border-radius: 10px;
    transition: .3s;
}

.gallery-grid img:hover {
    transform: scale(1.03);
}

/* CTA */

.cta-section {
    padding: 70px 20px;
    background:
    linear-gradient(rgba(17,46,91,.90),rgba(17,46,91,.90)),
    url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1500&q=80') center/cover;
    text-align: center;
    color: white;
}

.cta-section h2 {
    font-size: 34px;
    margin-bottom: 15px;
}

.cta-section p {
    color: #e5eaf3;
    line-height: 1.8;
}

.cta-section a {
    display: inline-block;
    background: #f5a623;
    color: #17356a;
    text-decoration: none;
    padding: 13px 30px;
    margin-top: 25px;
    border-radius: 5px;
    font-weight: 700;
}

/* FOOTER */

footer {
    background: #101f39;
    color: white;
    padding: 35px 0;
}

.foot {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
}

.foot p {
    color: #c4ccda;
    font-size: 13px;
}

/* RESPONSIVE */

@media(max-width: 900px) {
    .cards, .why-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .intro-grid {
        gap: 30px;
    }
}

@media(max-width: 650px) {
    .learning-hero {
        min-height: 420px;
    }

    .learning-hero h1 {
        font-size: 36px;
    }

    .section {
        padding: 60px 0;
    }

    .section-heading h2,
    .intro-text h2,
    .cta-section h2 {
        font-size: 27px;
    }

    .intro-grid,
    .activity-grid,
    .gallery-grid {
        grid-template-columns: 1fr;
    }

    .intro-image img {
        height: 300px;
    }

    .cards, .why-grid {
        grid-template-columns: 1fr;
    }

    .activity-card {
        height: 250px;
    }

    .gallery-grid img {
        height: 250px;
    }

    .foot {
        flex-direction: column;
        align-items: flex-start;
    }
}
</style>
</head>

<body>

<!-- HEADER -->

<?php include 'includes/site-header.php'; ?>

<main>

<!-- HERO SECTION -->

<section class="learning-hero">
    <div class="wrap">
        <div class="hero-content">

            <span class="hero-tag">OUR LEARNING PROGRAM</span>

            <h1>Discover, Learn & Grow Together</h1>

            <p>
                Building a strong foundation for young minds through
                creative learning, exploration, practical activities
                and positive values.
            </p>

            <a href="admissions.php" class="hero-btn">
                Explore Admissions →
            </a>

        </div>
    </div>
</section>

<!-- INTRODUCTION -->

<section class="section">
    <div class="wrap intro-grid">

        <div class="intro-image">
            <img
                src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1000&q=85"
                alt="Students learning in classroom"
                loading="lazy">
        </div>

        <div class="intro-text">

            <span style="color:#ef9b23;font-weight:700;">
                LEARNING EXPERIENCE
            </span>

            <h2>Education Beyond The Classroom</h2>

            <p>
                At SHARMILA ENTERPRISES, we believe that every child
                deserves an encouraging environment to explore,
                discover and develop new skills.
            </p>

            <p>
                Our learning approach focuses on building knowledge,
                creativity, confidence and good habits through
                meaningful educational experiences.
            </p>

            <div class="intro-points">
                <p>✓ Child-friendly learning environment</p>
                <p>✓ Creative and interactive activities</p>
                <p>✓ Focus on overall development</p>
                <p>✓ Learning through exploration</p>
            </div>

        </div>

    </div>
</section>

<!-- LEARNING AREAS -->

<section class="section learning-section">

    <div class="wrap">

        <div class="section-heading">
            <span>WHAT WE TEACH</span>
            <h2>Our Learning Areas</h2>
            <p>
                Developing essential skills through different
                areas of learning and discovery.
            </p>
        </div>

        <div class="cards">

            <article class="learning-card">
                <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=700&q=80" alt="Language learning" loading="lazy">
                <div class="card-content">
                    <h3>Language & Literacy</h3>
                    <p>
                        Reading, writing, speaking and communication
                        skills to build a strong language foundation.
                    </p>
                </div>
            </article>

            <article class="learning-card">
                <img src="https://images.unsplash.com/photo-1596495578065-6e0763fa1178?auto=format&fit=crop&w=700&q=80" alt="Mathematics learning" loading="lazy">
                <div class="card-content">
                    <h3>Mathematics</h3>
                    <p>
                        Numbers, counting, calculations and
                        logical thinking through fun activities.
                    </p>
                </div>
            </article>

            <article class="learning-card">
                <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&fit=crop&w=700&q=80" alt="Creative art activities" loading="lazy">
                <div class="card-content">
                    <h3>Art & Creativity</h3>
                    <p>
                        Encouraging imagination through drawing,
                        colouring, painting and creative expression.
                    </p>
                </div>
            </article>

            <article class="learning-card">
                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=700&q=80" alt="Science discovery" loading="lazy">
                <div class="card-content">
                    <h3>Science & Discovery</h3>
                    <p>
                        Exploring the world through observation,
                        questions and simple learning experiences.
                    </p>
                </div>
            </article>

        </div>

    </div>
</section>

<!-- ACTIVITIES -->

<section class="section">

    <div class="wrap">

        <div class="section-heading">
            <span>FUN WITH LEARNING</span>
            <h2>Activities For Every Child</h2>
            <p>
                Learning becomes more interesting when children
                participate, explore and enjoy.
            </p>
        </div>

        <div class="activity-grid">

            <div class="activity-card">
                <img src="https://images.unsplash.com/photo-1472162072942-cd5147eb3902?auto=format&fit=crop&w=900&q=80" alt="Outdoor activities" loading="lazy">
                <div class="activity-overlay">
                    <h3>Outdoor Activities</h3>
                </div>
            </div>

            <div class="activity-card">
                <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&fit=crop&w=900&q=80" alt="Art and craft" loading="lazy">
                <div class="activity-overlay">
                    <h3>Art & Craft</h3>
                </div>
            </div>

            <div class="activity-card">
                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=900&q=80" alt="Classroom activities" loading="lazy">
                <div class="activity-overlay">
                    <h3>Group Learning</h3>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- WHY CHOOSE US -->

<section class="section why-section">

    <div class="wrap">

        <div class="section-heading">
            <span>OUR APPROACH</span>
            <h2>Growing Together Every Day</h2>
            <p>
                Supporting children's educational and personal
                development through a positive learning approach.
            </p>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <div class="why-icon">📚</div>
                <h3>Quality Learning</h3>
                <p>Building knowledge and essential academic skills.</p>
            </div>

            <div class="why-card">
                <div class="why-icon">🎨</div>
                <h3>Creative Thinking</h3>
                <p>Helping children discover their creativity.</p>
            </div>

            <div class="why-card">
                <div class="why-icon">🤝</div>
                <h3>Teamwork</h3>
                <p>Developing sharing, respect and cooperation.</p>
            </div>

            <div class="why-card">
                <div class="why-icon">🌱</div>
                <h3>Overall Growth</h3>
                <p>Encouraging confidence and positive habits.</p>
            </div>

        </div>

    </div>
</section>

<!-- GALLERY -->

<section class="section">

    <div class="wrap">

        <div class="section-heading">
            <span>OUR GALLERY</span>
            <h2>Learning Through Beautiful Moments</h2>
            <p>
                A glimpse of educational activities and
                joyful learning experiences.
            </p>
        </div>

        <div class="gallery-grid">

            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80" alt="Classroom" loading="lazy">

            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=80" alt="Children learning" loading="lazy">

            <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&fit=crop&w=800&q=80" alt="Creative activities" loading="lazy">

            <img src="https://images.unsplash.com/photo-1472162072942-cd5147eb3902?auto=format&fit=crop&w=800&q=80" alt="Outdoor learning" loading="lazy">

            <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=800&q=80" alt="School education" loading="lazy">

            <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?auto=format&fit=crop&w=800&q=80" alt="Children playing" loading="lazy">

        </div>

    </div>
</section>

<!-- ADMISSION CTA -->

<section class="cta-section">

    <div class="wrap">

        <h2>Give Your Child A Bright Future</h2>

        <p>
            Explore our admission opportunities and learn
            more about the educational environment.
        </p>

        <a href="admissions.php">Apply For Admission →</a>

    </div>

</section>

<?php include 'includes/footer.php'; ?>

