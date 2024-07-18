<!DOCTYPE html>
<html>
<head>
    <title>Modify Show Time</title>
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
            border-radius: 5px;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
            box-shadow: 0px 10px 25px -8px #000;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        select,
        input[type="text"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px; /* 10px padding top and bottom, 20px padding left and right */
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px; /* Add 10px padding to the top */
        }

        input[type="submit"]:hover {
            padding top:  10px;
            background-color: #555;
        }
    </style>
</head>

<body>
    <h1>Modify Show Time</h1>
    <form action="edit_time.php" method="POST">
        <label for="show_id">Select Show Time:</label>
        <select name="show_id" required>
            <option value="">Select Show Time</option>
            
            <?php
            $conn = mysqli_connect("localhost", "root", "", "user_db");
            // Retrieve the list of movies from the database
            $query = "SELECT show_id, showtime FROM show_time";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['show_id']}'>{$row['showtime']}</option>";
                }
            }
            ?>
            
        </select>
        
        <label for="name">Show Time:</label>
        <input type="text" name="showtime" required>
        
        <input type="submit" value="Edit Show Time">
    </form>
    <br>
  <a href="admin_page.php">Back</a>
</body>
</html>