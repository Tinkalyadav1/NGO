<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Now</title>
    <link rel="stylesheet" href="donate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script> <!-- Razorpay Checkout Script -->
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="logo6.png" alt="Logo" class="logo">
            <div class="logo-name">LIFE</div>
        </div>
        <nav>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="volunteers.php"><i class="fas fa-hands-helping"></i> Our Volunteer</a></li>
            <li><a href="donate.php" class="active"><i class="fas fa-donate"></i> Donate Now</a></li>
            <li><a href="contact.php"><i class="fas fa-phone-alt"></i> Contact</a></li>
        </ul>
        </nav>
    </header>

    <section id="donate">
        <h2>Donate Now</h2>
        <form action="donate.php"  method="post" id="donationForm">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Full Name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Your Email Address" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" required>

            <label for="donation-amount">Donation Amount:</label>
            <input type="number" id="donation-amount" name="donation_amount" placeholder="Amount in INR" required>

            <button type="button" id="pay-button">Donate Now</button>
        </form>
        
        <div id="receipt" style="display:none;">
            <h3>Thank You for Your Donation!</h3>
            <p>Your donation has been successful. Payment ID: <span id="payment-id"></span></p>
            <p>A receipt will be sent to your email shortly.</p>
        </div>
    </section>
<footer>
    <div class="footer-content">
      <p>&copy; 2024 LIFE. All Rights Reserved.</p>
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

    <script>
        document.getElementById("pay-button").onclick = function () {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var donationAmount = document.getElementById('donation-amount').value;

            var options = {
                "key": "your razor pay api", // Replace with your Razorpay key
                "amount": donationAmount * 100, // Convert donation amount to paise
                "currency": "INR",
                "name": "NGO Name",
                "description": "Donation to Support the Cause",
                "handler": function (response) {
                    var paymentId = response.razorpay_payment_id;
                    document.getElementById('payment-id').innerText = paymentId;
                    document.getElementById('receipt').style.display = 'block';

                    // Send data to the backend for saving
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "process_payment.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.send("payment_id=" + paymentId + "&donation_amount=" + donationAmount + "&name=" + name + "&email=" + email + "&phone=" + phone);
                },
                "prefill": {
                    "name": name,
                    "email": email,
                    "contact": phone
                },
                "theme": {
                    "color": "#ff6600"
                }
            };

            var rzp1 = new Razorpay(options);
            rzp1.open();
        };
    </script>
</body>
</html>
