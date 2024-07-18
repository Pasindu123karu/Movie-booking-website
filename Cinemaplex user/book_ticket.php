<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $movie_id = $_POST['name'];
    $date = $_POST['date'];
    $showtime = $_POST['showtime'];

    // Validate and sanitize the data if necessary

    // Connect to the MySQL database
    $conn = mysqli_connect("localhost", "root", "", "user_db");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute the SQL query to insert data into the database
    $query = "INSERT INTO booking (name, date, showtime) VALUES ('$movie_id', '$date', '$showtime')";

    if (mysqli_query($conn, $query)) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>