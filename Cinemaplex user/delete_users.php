<!DOCTYPE html>
<html>
<head>
    <title>Remove Users</title>
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
    <h1>Delete Users</h1>
    <form action="remove_users.php" method="POST">
        <label for="id">Select a User to Remove:</label>
        <select name="id" required>
            <option value="">Select User</option>
            
            <?php
            // Establish a MySQL connection
            $conn = mysqli_connect("localhost", "root", "", "user_db");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Retrieve the list of users from the database
            $query = "SELECT id, name, email,password,user_type FROM user_form";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['id']}'> {$row['name']} {$row['email']} {$row['password']} {$row['user_type']}</option>";
                }
            }

            
            ?>
            
        </select><br>
        
        <input type="submit" value="Remove User">
    </form>
    <br>
  <a href="admin_page.php">Back</a>
</body>
</html>