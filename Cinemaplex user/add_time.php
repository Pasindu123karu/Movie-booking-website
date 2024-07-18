<?php
require 'connection.php';

if (isset($_POST["submit"])) {
  $showtime = $_POST["showtime"];

  $query = "INSERT INTO showtime (showtime) VALUES ('$showtime')";
  mysqli_query($conn, $query);
  echo "<script> alert('Successfully Added'); document.location.href = 'admin_page.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Show Time</title>

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

    input[type="text"] {
      width: 90%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      background-color: #007BFF;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    button:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
<h1>Add Show Time</h1>
  <form class="" action="" method="post" autocomplete="off">
    <label for="showtime">Show Time: </label>
    <input type="text" name="showtime" id="showtime" required value=""><br>

    <button type="submit" name="submit">Submit</button>
  </form>
  <br>
  <a href="admin_page.php">Back</a>
</body>
</html>
