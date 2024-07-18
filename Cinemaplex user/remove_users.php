
<?php
// Establish a MySQL connection
$conn = mysqli_connect("localhost", "root", "", "user_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if a user ID is provided via POST
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Delete the user from the database
    $query = "DELETE FROM user_form WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        echo "User deleted successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
} else {
    // If no user ID is provided, display the deletion form
    echo file_get_contents('delete_users.php');
}


?>