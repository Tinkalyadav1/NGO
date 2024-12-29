<?php
  // You can include dynamic content like logo, navigation, or footer if needed
  $site_name = "LIFE"; // You can change the site name dynamically if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $site_name; ?> - Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <!-- Logo Container (Left Side) -->
    <div class="logo-container">
        <img src="logo6.png" alt="Logo" class="logo">
        <div class="logo-name"><?php echo $site_name; ?></div> <!-- Optional text next to logo -->
    </div>

    <!-- Navbar (Right Side) -->
    <div class="navbar">
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#about.php"><i class="fas fa-info-circle"></i> About Us</a></li>
            <li><a href="volunteers.php"><i class="fas fa-hands-helping"></i> Our Volunteer</a></li>
            <li><a href="donate.php" class="active"><i class="fas fa-donate"></i> Donate Now</a></li>
            <li><a href="contact.php"><i class="fas fa-phone-alt"></i> Contact</a></li>
        </ul>
    </div>
  </header>

  <!-- Banner Section -->
  <section id="home-banner" class="banner">
    <div class="banner-content">
      <h1>Making the World a Better Place</h1>
      <p>Join us in our mission to bring change and make a positive impact in the world!</p>
      
    </div>
  </section>
  <section id="about.php">
    <div class="section-header">
      <h1>About Us</h1>
</div>
  </section>

  <!-- Our Mission Section -->
  <section id="mission">
    <div class="section-header">
      <h2>Our Mission</h2>
      <p>We are committed to improving the lives of underprivileged communities by providing education, healthcare, and economic opportunities.</p>
    </div>
    <div class="mission-content">
      <div class="mission-item">
        <img src="about1.jpg" alt="Education">
        <h3>Education for All</h3>
        <p>We provide education programs to children and adults, helping them build better futures.</p>
      </div>
      <div class="mission-item">
        <img src="healthcare.jpg" alt="Healthcare">
        <h3>Healthcare Support</h3>
        <p>Our healthcare initiatives ensure that no one has to suffer from lack of medical attention.</p>
      </div>
      <div class="mission-item">
        <img src="about2.jpg" alt="Community">
        <h3>Community Development</h3>
        <p>We empower local communities through projects that foster sustainable growth and self-reliance.</p>
      </div>
    </div>
  </section>

  <!-- Our Projects Section -->
  <section id="projects">
    <div class="section-header">
      <h2>Our Projects</h2>
      <p>Discover the amazing projects that we are running across the globe to make a real impact.</p>
    </div>
    <div class="project-gallery">
      <div class="project-item">
        <img src="water.jpg" alt="Project 1">
        <h3>Clean Water and Sanitation</h3>
        <p>A significant number of rural and urban areas still lack access to clean drinking water and sanitation.</p>
      </div>
      <div class="project-item">
        <img src="equality.jpg" alt="Project 2">
        <h3>Women Empowerment and Gender Equality</h3>
        <p>Gender-based violence, child marriage, and discrimination in education and employment.</p>
      </div>
      <div class="project-item">
        <img src="mental.jpg" alt="Project 3">
        <h3>Mental Health Awareness</h3>
        <p>Raise awareness about mental health, provide counseling services, conduct workshops.</p>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section id="testimonials">
    <div class="section-header">
      <h2>What People Say</h2>
      <p>Hear from our supporters, volunteers, and those whose lives have been transformed by our work.</p>
    </div>
    <div class="testimonial-cards">
      <div class="testimonial-card">
        <p>"This NGO changed my life. Their education programs helped me get a job and support my family!"</p>
        <p>- Sarah, Beneficiary</p>
      </div>
      <div class="testimonial-card">
        <p>"As a volunteer, I’ve witnessed firsthand the difference this organization makes in the world."</p>
        <p>- rani, Volunteer</p>
      </div>
      <div class="testimonial-card">
        <p>"The healthcare initiative they launched in our village saved countless lives. I am forever grateful."</p>
        <p>- soniya, Beneficiary</p>
      </div>
    </div>
  </section>

  <!-- Call to Action Section (Donate Now) -->
  <section id="cta">
    <div class="cta-content">
      <h2>Support Our Cause</h2>
      <p>Your donations can help us expand our impact and reach more people in need. Join us in making a difference today!</p>
      <button onclick="location.href='donate.php'">Donate Now</button>
    </div>
  </section>

  <footer>
    <div class="footer-content">
      <p>&copy; 2024 <?php echo $site_name; ?>. All Rights Reserved.</p>
      <div class="social-media">
        <a href="https://www.facebook.com" target="_blank">
          <img src="facebook.png" alt="Facebook" />
        </a>
        <a href="https://www.twitter.com" target="_blank">
          <img src="twitter_5968830.png" alt="Twitter" />
        </a>
        <a href="https://www.instagram.com" target="_blank">
          <img src="instagram.png" alt="Instagram" />
        </a>
        <a href="https://www.linkedin.com" target="_blank">
          <img src="linkedin.png" alt="LinkedIn" />
        </a>
      </div>
      <div class="footer-links">
        <a href="#privacy.php">Privacy Policy</a> | <a href="#terms.php">Terms of Service</a>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
