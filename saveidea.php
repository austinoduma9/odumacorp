<?php
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
    die("Connection failed: " . $conn->connect_error);
}

// Handle file upload and form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['photos'])) {
    // Capture form data
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);

    // File upload settings
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true); // Create directory with proper permissions
    }
    // Handle file upload
    if ($_FILES['photos']['error'] === UPLOAD_ERR_OK) {
        $photoName = basename($_FILES['photos']['name']);
        $photoName = uniqid() . "_" . $photoName; // Add a unique prefix to the filename
        $photoPath = $uploadDir . $photoName;

        if (move_uploaded_file($_FILES['photos']['tmp_name'], $photoPath)) {
            // Insert data into the database
            $stmt = $conn->prepare("INSERT INTO idea (title, description, photos) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $title, $description, $photoPath);

            if ($stmt->execute()) {
                echo "Data successfully saved with photo!";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Failed to upload photo.";
        }
    } else {
        echo "File upload error: " . $_FILES['photos']['error'];
    }
}
// Retrieve data from the database
$sql = "SELECT title, description, photos FROM idea";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>User Profiles</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "<p>";
        echo "<img src='" . htmlspecialchars($row['photos']) . "' alt='image' style='width:100px;height:auto;'><br>";
        echo "Title: " . htmlspecialchars($row['title']) . "<br>";
        echo "Description: " . htmlspecialchars($row['description']) . "<br>";
        echo "</p>";
    }
} else {
    echo "No profiles found.";
}

$conn->close();


// Debugging: Display posted data
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>