<?php
$pageTitle = "KUET Business & Entrepreneurship Club | KBEC";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>

    <meta name="description" content="Official landing page for KUET Business & Entrepreneurship Club (KBEC).">

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

    <ul class="nav-menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#events">Events</a></li>
        <li><a href="#whats-next">What's Next</a></li>
        <li><a href="#awards">Awards</a></li>
        <li><a href="#contact">Contact</a></li>
        <li>
  <button class="join-btn" id="joinBtn">Join Us</button>
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

    <!-- Events Section -->
    <section class="events" id="events" aria-label="KBEC Events">
        <div class="events-container">
            <h2>Our Events</h2>

            <p class="events-intro">
                Explore the flagship events and initiatives organized by KBEC throughout the year.
            </p>

            <div class="event-grid">

                <div class="event-card">
                    <div class="event-image">
                        <img src="event1.jpg" alt="KBEC Nexus">
                    </div>

                    <div class="event-content">
                        <h3>KBEC Nexus</h3>
                        <p class="event-date">Flagship Business Competition</p>
                        <p>
                            A premier platform where students compete through business strategy, innovation, and entrepreneurial thinking.
                        </p>
                    </div>
                </div>

                <div class="event-card">
                    <div class="event-image">
                        <img src="event2.jpg" alt="TEDxKUET">
                    </div>

                    <div class="event-content">
                        <h3>TEDxKUET</h3>
                        <p class="event-date">Ideas Worth Spreading</p>
                        <p>
                            Bringing together visionaries, innovators, and changemakers to inspire the next generation through powerful stories.
                        </p>
                    </div>
                </div>

                <div class="event-card">
                    <div class="event-image">
                        <img src="event3.jpg" alt="Case Crack">
                    </div>

                    <div class="event-content">
                        <h3>Case Crack</h3>
                        <p class="event-date">Business Case Competition</p>
                        <p>
                            Participants solve real-world business challenges and present strategic solutions before experienced judges.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- What's Next -->
    <section class="whats-next" id="whats-next" aria-label="What's Next">

        <div class="whats-next-header">
            <h2>WHAT'S <span class="highlight">NEXT?</span></h2>
        </div>

        <div class="carousel-container">

            <button class="carousel-btn prev" id="prevBtn">
                ❮
            </button>

            <div class="carousel-wrapper">
                <div class="carousel" id="carousel">

                    <div class="carousel-item">
                        <div class="carousel-label">UPCOMING</div>
                        <div class="carousel-title">KBEC NEXUS S3</div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-label">UPCOMING</div>
                        <div class="carousel-title">TEDX KUET 2026</div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-label">UPCOMING</div>
                        <div class="carousel-title">CASE CRACK 3.0</div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-label">UPCOMING</div>
                        <div class="carousel-title">KBEC NEXUS S4</div>
                    </div>

                </div>
            </div>

            <button class="carousel-btn next" id="nextBtn">
                ❯
            </button>

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