<!DOCTYPE html>
<html>
<head>
    <title>User Reservations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/bed.webp'); /* Replace with your background image path */
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .reservations {
            background-color: rgba(255, 255, 255, 0.7); /* Add a semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="reservations">
        <h1>User Reservations</h1>

        <?php
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

        // SQL query to fetch reservations
        $sql = "SELECT * FROM reservation";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Name</th><th>Email</th><th>Check-in Date</th><th>Check-out Date</th><th>Room Type</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["cidate"] . "</td>";
                echo "<td>" . $row["codate"] . "</td>";
                echo "<td>" . $row["room"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No reservations found.";
        }

        // Close the database connection
        $conn->close();
        ?>

    </div>
</body>
</html>
