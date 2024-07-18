<!DOCTYPE html>
<html>
<head>
    <title>Delete Movies</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(23, 23, 23);
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 0;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
            box-shadow: 0px 10px 25px -8px #000;
        }

        label {
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
        
    </style>
</head>
<body>
    <h1>Delete Movies</h1>
    <form action="remove_movies.php" method="POST">
        <label for="movie_id">Select a Movie to Delete:</label>
        <select name="movie_id" required>
            <option value="">Select Movie</option>
            
            <?php
            // Establish a MySQL connection
            $conn = mysqli_connect("localhost", "root", "", "user_db");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Retrieve the list of users from the database
            $query = "SELECT movie_id, name, duration, genre,image FROM movie";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['movie_id']}'> {$row['name']} {$row['duration']} {$row['genre']} {$row['image']}</option>";
                }
            }

            
            ?>
            
        </select><br>
        
        <input type="submit" value="Delete Movie">
    </form>
    <br>
  <a href="admin_page.php">Back</a>
</body>
</html>