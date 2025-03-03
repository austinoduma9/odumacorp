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
        <?php echo htmlspecialchars($_SESSION['fname']); ?>