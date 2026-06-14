<?php
$pageTitle = "KUET Business & Entrepreneurship Club | KBEC";

$conn = new mysqli("localhost:3306", "root", "", "kbec_db");

if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
$events = $conn->query(" SELECT * FROM events ORDER BY event_date DESC ");
$sponsors = $conn->query("SELECT * FROM sponsors");
$partners = $conn->query("SELECT * FROM club_partners");
if (isset($_GET['success'])) {
    echo "<script>alert('Application Submitted Successfully!');</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>

    <meta name="description" content="Official landing page for KUET Business & Entrepreneurship Club (KBEC).">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar" id="navbar">

    <div class="brand">
        <img src="logo.png" alt="KBEC Logo" class="brand-logo">
        <div class="brand-copy">
            <strong>KUET Business</strong>
            <strong>& Entrepreneurship Club</strong>
        </div>
    </div>

    <button class="menu-toggle" id="menuToggle">
        ☰ MENU
    </button>

    <ul class="nav-menu" id="navMenu">

    <button class="menu-close" id="menuClose">
        CLOSE ✕
    </button>

   <li><a href="index.php#home">HOME</a></li>
<li><a href="index.php#about">ABOUT</a></li>
<li><a href="index.php#events">EVENTS</a></li>
<li><a href="index.php#sponsors">SPONSORS</a></li>
<li><a href="index.php#club_partners">CLUB PARTNERS</a></li>

<li><a href="alumni.php">ALUMNI</a></li>
<li><a href="executive_panel.php">EXECUTIVE PANEL</a></li>
<li><a href="faculty_advisors.php">FACULTY ADVISORS</a></li>

<li><a href="index.php#whats-next">WHAT'S NEXT</a></li>
<li><a href="index.php#awards">AWARDS</a></li>
<li><a href="index.php#contact">CONTACT</a></li>

    <li>
        <button class="join-btn" id="joinBtn">
            JOIN US
        </button>
    </li>

</ul>
</nav>

<main>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <p class="hero-kicker">Founded 2019 - KUET</p>
            <h1>KUET BUSINESS & ENTREPRENEURSHIP CLUB</h1>
            <p class="hero-subheading">
                The Premier Business and Entrepreneurship Club at KUET
            </p>
            <div class="hero-buttons">
                <a class="btn-gold" href="#about">Explore KBEC</a>
                <button class="btn-gold btn-join" id="joinBtnHero">Join Us</button>
            </div>
        </div>

        <a class="scroll-indicator" href="#about">
            Scroll
        </a>
    </section>

    <!-- About Section -->
    <section class="about" id="about" aria-label="About KBEC">
        <div class="about-container">
            <h2>About KBEC</h2>
            <p class="about-intro">
                KBEC, the premier business and entrepreneurship club of Khulna University of Engineering &amp; Technology, founded in 2019, bridges engineering excellence with entrepreneurial vision. Through KBEC Nexus, Entrepreneurial Voice, Case Crack, workshops, seminars, startup programs, and TEDxKUET, it empowers students from idea to launch, fostering leadership, innovation, and real-world impact.
            </p>
            <div class="about-grid">
                <div class="about-card">
                    <h3>Our Mission</h3>
                    <p>To inspire and empower the next generation of entrepreneurs and business leaders through knowledge sharing, networking, and hands-on experiences.</p>
                </div>
                <div class="about-card">
                    <h3>Our Vision</h3>
                    <p>To create a thriving ecosystem where innovation meets opportunity, and ideas transform into impactful ventures.</p>
                </div>
                <div class="about-card">
                    <h3>What We Do</h3>
                    <p>We organize workshops, seminars, mentorship programs, and networking events to develop essential business and entrepreneurial skills.</p>
                </div>
            </div>
        </div>
    </section>

   <!-- Activities Section Start -->
  <section id="activities" class="activities">
    <h2>Our Activities & Events</h2>

    <div class="slider">

      <?php
    $first = true;

    while($event = $events->fetch_assoc()) {
    ?>

      <div class="slide <?= $first ? 'active' : ''; ?>">

        <img src="<?= htmlspecialchars($event['image']); ?>" alt="<?= htmlspecialchars($event['title']); ?>" />

        <div class="slide-content">

          <h3>
            <?= htmlspecialchars($event['title']); ?>
          </h3>

          <p>
            <?= htmlspecialchars(substr($event['description'], 0, 150)); ?>
            <?= strlen($event['description']) > 150 ? '...' : ''; ?>
          </p>

          <small>
            <?= date("F d, Y", strtotime($event['event_date'])); ?>
          </small>

        </div>

      </div>

      <?php
        $first = false;
    }
    ?>

      <button class="prev">&#10094;</button>
      <button class="next">&#10095;</button>

    </div>
    </div>
  </section>
  <!-- Activities Section End -->
  <script>
  let slides = document.querySelectorAll(".slide");
  let index = 0;

  document.querySelector(".next").onclick = function() {
    slides[index].classList.remove("active");
    index = (index + 1) % slides.length;
    slides[index].classList.add("active");
  };

  document.querySelector(".prev").onclick = function() {
    slides[index].classList.remove("active");
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add("active");
  };
  </script>
  <!-- View all events -->
  <section class="view-all-events-cta">
    <div class="cta-container">
      <h3>Want to explore more of our initiatives?</h3>
      <p>
        Discover past competitions, workshops, and flagship seminars organized
        by KBEC.
      </p>
      <a href="events.php" class="btn primary-btn">View All Activities</a>
    </div>
  </section>
    <!-- Awards Section -->
    <section class="awards" id="awards" aria-label="Awards & Achievements">
        <div class="awards-container">

            <div class="awards-grid">

                <div class="award-image-col">
                    <div class="award-image">
                        <img src="award.jpg" alt="KBEC Best Club Award 2025">
                        <div class="award-badge">
                            2025<br>WINNER
                        </div>
                    </div>
                </div>

                <div class="award-content-col">

                    <div class="award-label">
                        EXCELLENCE RECOGNIZED
                    </div>

                    <h2>
                        Best Club<br>
                        <span class="award-year">Award 2025</span>
                    </h2>

                    <p class="award-description">
                        Honored with the prestigious recognition for outstanding contributions to entrepreneurship education, innovation initiatives, and fostering a thriving business community at KUET, <strong>KUET Business and Entrepreneurship Club (KBEC)</strong> has been crowned Joint Champion for Best Club at Club Fair 2025, organized by the Directorate of Students' Welfare (DSW).
                    </p>

                    <div class="award-highlights">
                        <div class="highlight-item">
                            <span class="highlight-icon">✓</span>
                            <span>Best Club Recognition</span>
                        </div>

                        <div class="highlight-item">
                            <span class="highlight-icon">✓</span>
                            <span>Joint Champion 2025</span>
                        </div>

                        <div class="highlight-item">
                            <span class="highlight-icon">✓</span>
                            <span>DSW Award Winner</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
 <!-- Sponsors Section Start -->
  <section class="sponsors-section" id="sponsors">
    <h2>Our Sponsors</h2>
    <div class="sponsors-slider">
      <div class="sponsors-track">
        <?php while($sponsor = $sponsors->fetch_assoc()) { ?>
        <div class="sponsor-card">
          <img src="../uploads/sponsors/<?= $sponsor['logo']; ?>" alt="<?= htmlspecialchars($sponsor['title']); ?>">
          <h3>
            <?= htmlspecialchars($sponsor['title']); ?>
          </h3>
        </div>
        <?php } ?>
      </div>

    </div>
    <!-- Sponsors Section End -->
  </section>
  <!-- Club Partners Start -->
  <section class="partners-section" id="club_partners">
    <h2>Club Partners</h2>
    <div class="partners-slider">
      <div class="partners-track">
        <?php while($partner = $partners->fetch_assoc()) { ?>
        <div class="partner-card">
          <img src="../uploads/club_partners/<?= $partner['logo']; ?>"
            alt="<?= htmlspecialchars($partner['title']); ?>">
          <h3>
            <?= htmlspecialchars($partner['title']); ?>
          </h3>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
    <!-- Contact Section (Footer) -->
    <footer class="contact" id="contact" aria-label="Contact KBEC">
        <div class="contact-container">
            <div class="footer-grid">
                <!-- Left Section -->
                <div class="footer-section footer-about">
                    <div class="footer-brand">
                        <img src="logo.png" alt="KBEC Logo" class="footer-logo">
                        <div class="footer-brand-text">
                            <strong>KUET Business</strong>
                            <strong>&amp; Entrepreneurship Club</strong>
                        </div>
                    </div>
                    <p class="footer-tagline">The Premier Business and Entrepreneurship Club of KUET</p>
                    <div class="footer-contact-info">
                        <p><span class="icon">📍</span>Khulna University of Engineering &amp; Technology</p>
                        <p><span class="icon">📞</span><a href="tel:+8801234567890">+880 1234 567 890</a></p>
                        <p><span class="icon">✉️</span><a href="mailto:info@kbec.org">info@kbec.org</a></p>
                    </div>
                </div>
                
                <!-- Middle Section -->
                <div class="footer-section footer-explore">
                    <h3>EXPLORE</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#events">Events</a></li>
                        <li><a href="#whats-next">What's Next</a></li>
                        <li><a href="#awards">Awards</a></li>
                        <li><a href="#about">About</a></li>
                    </ul>
                </div>
                
                <!-- Right Section -->
                <div class="footer-section footer-social">
                    <h3>FOLLOW US</h3>
                    <div class="footer-social-links">
                        <a href="https://www.facebook.com/kuetbec" target="_blank" rel="noopener noreferrer" class="footer-social-link" title="Facebook">
                            f
                        </a>
                        <a href="https://www.linkedin.com/company/kuetbec" target="_blank" rel="noopener noreferrer" class="footer-social-link" title="LinkedIn">
                            in
                        </a>
                        <a href="https://www.instagram.com/kuetbec" target="_blank" rel="noopener noreferrer" class="footer-social-link" title="Instagram">
                            📷
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; 2026 KBEC OFFICIAL. ALL RIGHTS RESERVED.</p>
            </div>
        </div>
    </footer>

    <!-- Join Modal -->
<div class="join-modal" id="joinModal">

    <div class="modal-overlay"></div>

    <div class="modal-content">

        <button class="modal-close" id="closeModal">
            &times;
        </button>

        <h2>Join KBEC</h2>

        <p class="modal-subtitle">
            Ready to be part of something extraordinary?
        </p>

       <form class="join-form" method="POST" action="join.php">

           <input type="text" name="fullname" placeholder="Full Name" required>

<input type="email" name="email" placeholder="Email Address" required>

<input type="text" name="department" placeholder="Department" required>

<input type="text" name="student_id" placeholder="Student ID" required>

<input type="text" name="semester" placeholder="Semester" required>

<textarea name="message" rows="4" placeholder="Why do you want to join KBEC?"></textarea>

            <button
                type="submit"
                class="submit-btn"
            >
                Submit Application
            </button>

        </form>

    </div>

</div>

</main>

<script src="script.js"></script>

</body>
</html>