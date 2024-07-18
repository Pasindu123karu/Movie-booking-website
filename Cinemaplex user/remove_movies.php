
<?php
// Establish a MySQL connection
$conn = mysqli_connect("localhost", "root", "", "user_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if a user ID is provided via POST
if (isset($_POST['movie_id'])) {
    $movie_id = $_POST['movie_id'];

    // Delete the user from the database
    $query = "DELETE FROM movie WHERE movie_id = $movie_id";

    if (mysqli_query($conn, $query)) {
        echo "Movie deleted successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
} else {
    // If no user ID is provided, display the deletion form
    echo file_get_contents('delete_movies.php');
}


?>