<?php
// Establish a MySQL connection
$conn = mysqli_connect("localhost", "root", "", "user_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve all movies from the database
$query = "SELECT * FROM movie";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(23, 23, 23);
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #007BFF;
            color: #fff;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
            color: #fff;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }
    </style>
</head>
<body>
    <?php
    if (mysqli_num_rows($result) > 0) {
        echo "<h1>Movies List</h1>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Movie Name</th><th>Duration(min)</th><th>Genre</th><th>Image Url</th></tr>";
       



        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row['movie_id']}</td><td>{$row['name']}</td><td>{$row['duration']}</td><td>{$row['genre']}</td><td>{$row['image']}</td></tr>";
        }

        echo "</table>";
    } else {
        echo "No Movies found.";
    }
    ?>

</body>
</html>

