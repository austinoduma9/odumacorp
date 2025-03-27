<?php include "bio.php";?>

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
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['photo'])) {
    // Capture form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT);

    // $password = $_POST['password'];
    $phone = $_POST['phone'];

    // File upload settings
    $uploadDir = 'profile_uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // Create directory if it doesn't exist
    }

    $photoName = basename($_FILES['photo']['name']);
    $photoPath = $uploadDir . $photoName;

    // Move uploaded file to the upload directory
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $photoPath)) {
        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO bio (fname, lname, email, password, phone, photo) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $fname, $lname, $email,$password, $phone, $photoPath);

        if ($stmt->execute()) {
            echo "Data successfully saved with photo!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Failed to upload photo.";
    }
}

// Retrieve data from the database
$sql = "SELECT fname, lname, email, phone, photo FROM bio ORDER BY memberid DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>User Profiles</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "<p>";
        echo "<img src='" . htmlspecialchars($row['photo']) . "' alt='Profile Photo' style='width:100px;height:auto;'><br>";
        echo "Name: " . htmlspecialchars($row['fname']) . " " . htmlspecialchars($row['lname']) . "<br>";
        echo "Email: " . htmlspecialchars($row['email']) . "<br>";
        echo "Phone: " . htmlspecialchars($row['phone']) . "<br>";
        echo "</p>";
    }
} else {
    echo "No profiles found.";
}

$conn->close();
?>

<!-- <?php
echo "<pre>";
    print_r($_POST);
echo "</pre>";
?> -->