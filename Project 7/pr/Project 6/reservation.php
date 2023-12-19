<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $host = "localhost"; // Replace with your actual database host
    $username = "root"; // Replace with your database username
    $password = ""; // Replace with your database password
    $database = "hotel1"; // Replace with your database name

    // Create a database connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the required fields are present in the POST data
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["check-in"]) && isset($_POST["check-out"]) && isset($_POST["room-type"])) {
        // Retrieve form data
        $name = $conn->real_escape_string($_POST["name"]);
        $email = $conn->real_escape_string($_POST["email"]);
        $checkInDate = $conn->real_escape_string($_POST["check-in"]);
        $checkOutDate = $conn->real_escape_string($_POST["check-out"]);
        $roomType = $conn->real_escape_string($_POST["room-type"]);

        // SQL query to insert data into the reservations table with corrected column names
        $sql = "INSERT INTO reservation (name, email, cidate, codate, room) VALUES ('$name', '$email', '$checkInDate', '$checkOutDate', '$roomType')";

        if ($conn->query($sql) === true) {
            echo "Reservation has been successfully recorded!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "One or more required fields are missing in the form data.";
    }

    // Close the database connection
    $conn->close();
}
?>
