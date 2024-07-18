<?php
// Establish a MySQL connection
$connection = mysqli_connect("localhost", "root", "", "user_db");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if a user ID is provided via POST
if (isset($_POST['show_id'])) {
    $show_id = $_POST['show_id'];

    // Retrieve user data from the form
    $showtime = $_POST['showtime'];
    

    // Update user data in the database
    $query = "UPDATE show_time SET showtime = '$showtime' WHERE show_id = $show_id";

    if (mysqli_query($connection, $query)) {
        echo "Time updated successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
} else {
    // If no user ID is provided, display the modification form
    echo file_get_contents('modify_time.php');
}

// Close the database connection
mysqli_close($connection);
?>
