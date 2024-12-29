<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


// Include database connection
include_once 'db_connect.php';  // Make sure db_connect.php contains the correct connection settings

// Initialize variables
$name = $email = $message = "";

// Process the form if it was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent XSS or SQL injection
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Prepare and execute SQL statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO contact_form_submissions (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    // Execute the statement and check if the data was inserted successfully
    if ($stmt->execute()) {
        echo "<script>alert('Thank you for contacting us! We will get back to you soon.');</script>";
    } else {
        echo "<script>alert('Sorry, there was an issue saving your message. Please try again later.');</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
  <header>
    <!-- Logo Container (Left Side) -->
    <div class="logo-container">
        <img src="logo6.png" alt="Logo" class="logo">
        <div class="logo-name">LIFE</div> <!-- Optional text next to logo -->
    </div>

    <!-- Navbar (Right Side) -->
    <div class="navbar">
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="volunteers.php"><i class="fas fa-hands-helping"></i> Our Volunteer</a></li>
            <li><a href="donate.php" class="active"><i class="fas fa-donate"></i> Donate Now</a></li>
            <li><a href="contact.php"><i class="fas fa-phone-alt"></i> Contact</a></li>
        </ul>
    </div>
  </header>

  <!-- Contact Section -->
  <section id="contact">
    <h1>Contact Us</h1>
    <form action="contact.php" method="post" id="contactForm">
      <input type="text" name="name" placeholder="Your Name" required value="<?php echo $name; ?>">
      <input type="email" name="email" placeholder="Your Email" required value="<?php echo $email; ?>">
      <textarea name="message" placeholder="Your Message" required><?php echo $message; ?></textarea>
      <button type="submit">Send</button>
    </form>
  </section>

  <script src="script.js"></script>

  <!-- Footer Section -->
  <footer>
    <div class="footer-content">
      <p>&copy; 2024 NGO LIFE. All Rights Reserved.</p>
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

</body>
</html>
