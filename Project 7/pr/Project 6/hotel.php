<!DOCTYPE html>
<html>
<head>
    <title>Hotel Reservation System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/RES.jpg'); /* Replace with the path to your background image */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background */
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .reservation-form {
            padding: 20px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .submit-button {
            text-align: center;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hotel Reservation</h1>
        <form class="reservation-form" method="post" action="reservation.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            
            <label for="check-in">Check-in Date:</label>
            <input type="date" id="check-in" name="check-in" required>
            
            <label for="check-out">Check-out Date:</label>
            <input type="date" id="check-out" name="check-out" required>

            <label for="room-type">Room Type:</label>
            <select id="room-type" name="room-type" required>
                <option value="standard">Standard</option>
                <option value="deluxe">Deluxe</option>
                <option value="suite">Suite</option>
            </select>
            
            <div class="submit-button">
                <button type="submit">Reserve Room</button>
            </div>
        </form>
    </div>
</body>
</html>
