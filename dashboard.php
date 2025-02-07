<?php

// Start session
session_start();

// Database connection settings
$host = 'localhost';       // Hostname
$username = 'Owner';       // Database username
$password = 'Admin';       // Database password
$dbname = 'odumacorp';     // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);


// // Check if the user is logged in
// if (!isset($_SESSION['memberid'])) {
//     header("Location: login.php"); // Redirect to login if not logged in
//     exit;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body class="dashboard-body">
    <?php include_once 'navbar.php';?>
    <div class="dashboard-mid">


    <h1>Welcome to your Dashboard</h1>
    <p>Hello, <?php echo htmlspecialchars($_SESSION['fname']); ?>!</p>
    <button><a href="logout.php">Logout</a></button>
    <p>
        <span>Your Bio</span>
        <?php
        $sql = "SELECT photo FROM bio";
        $result = $conn -> query($sql);

        if ($result->num_rows > 0) {
            echo "<h2>User Profiles</h2>";
            while ($row = $result->fetch_assoc()) {
                echo "<p>";
                echo "<img src='" . htmlspecialchars($row['photo']) . "' alt='Profile Photo' style='width:100px;height:auto;'><br>";
                echo "</p>";
            }
        } else {
            echo "No profiles found.";
        }
        echo "</div>";
        echo $_SESSION['fname'] ." ". $_SESSION['lname'];
        echo "<br>";
        echo $_SESSION['phone'];
        echo "<br>";
        echo "<br>";
        ?>
    </p>
    </div>

</body>
</html>
<?phkp require_once 'footer.php' ?>

