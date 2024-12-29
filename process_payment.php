<?php
// Include database connection file
include_once 'db_donation.php';  // Make sure you have the correct path for this file

// Check if the form is submitted via Razorpay (POST request from JS)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get POST data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $donationAmount = $_POST['donation_amount'];
    $paymentId = $_POST['payment_id'];  // Razorpay payment ID

    // Get the current date and time for donation_date
    $donationDate = date("Y-m-d H:i:s");  // Format: YYYY-MM-DD HH:MM:SS

    // Prepare the SQL query to insert the donation data
    $sql = "INSERT INTO donations (name, email, phone, donation_amount, payment_id, donation_date)
            VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare the SQL statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind the parameters to the SQL query
        $stmt->bind_param("ssssss", $name, $email, $phone, $donationAmount, $paymentId, $donationDate);

        // Execute the query
        if ($stmt->execute()) {
            // Donation data inserted successfully
            echo "Thank you for your donation, $name. Your payment ID is $paymentId. You will receive a receipt via email shortly.";
        } else {
            // Capture and display SQL error
            echo "Error executing query: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;  // Display error if statement preparation fails
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request method!";
}
?>
