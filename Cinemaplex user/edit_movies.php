<?php
            $conn = mysqli_connect("localhost", "root", "", "user_db");


  session_start();

            if(!isset($_SESSION['admin_name'])){
            header('location:login_form.php');
            } 
if (isset($_POST['movie_id'])) {
    $movie_id = $_POST['movie_id'];
    $name = $_POST['name'];
    $duration = $_POST['duration'];
    $genre = $_POST['genre'];
    

    // Update user data in the database
    $query = "UPDATE movie SET name = '$name', duration = '$duration', genre = '$genre'  WHERE movie_id = $movie_id";

    if (mysqli_query($conn, $query)) {
        echo "Movie updated successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    } else {
    // If no user ID is provided, display the modification form
    echo file_get_contents('modify_movies.php');
}

// Close the database connection
mysqli_close($conn);
?>
