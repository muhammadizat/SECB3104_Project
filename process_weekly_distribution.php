<?php
// Replace these values with your actual database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "foodbank";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $location = $_POST["location"];

    // Escape special characters to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $name);
    $date = mysqli_real_escape_string($conn, $date);
    $time = mysqli_real_escape_string($conn, $time);
    $location = mysqli_real_escape_string($conn, $location);

    // Insert data into the database
    $sql = "INSERT INTO distribution_events (name, date, time, location) VALUES ('$name','$date', '$time', '$location')";

    if ($conn->query($sql) === TRUE) {
        echo "Distribution event scheduled successfully.";
        // Add buttons for returning to home and rescheduling
        echo '<br>';
        echo '<a href="dashboard_v.php">Return to Home</a>';
        echo '&nbsp;&nbsp;';
        echo '<a href="weekly_distribution.php">Reschedule</a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>