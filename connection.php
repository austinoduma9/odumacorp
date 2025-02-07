<?php
require 'bio.php';
// Enable error reporting for debugging (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection settings
$host = 'localhost';       // Hostname
$username = 'Owner';       // Database username
$password = 'Admin';       // Database password
$dbname = 'odumacorp';     // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed. Please try again later.");
}

// Start session
// session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate user input
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        echo "<p style='color:red;'>Both fields are required!</p>";
        exit;
    }

    // Query to fetch the user details
    $sql = "SELECT memberid, fname, lname, photo, phone, email, password FROM bio WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['memberid'] = $user['memberid'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['fname'] = $user['fname'];
            $_SESSION['lname'] = $user['lname'];
            $_SESSION['photo'] = $user['photo'];
            $_SESSION['phone'] = $user['phone'];

            // Redirect to the dashboard
            header("Location: dashboard.php");
            exit;
        } else {
            echo "<p style='color:red;'>Invalid password!</p>";
        }
    } else {
        echo "<p style='color:red;'>No user found with this email!</p>";
    }
    $stmt->close();
}

$conn->close();
?>