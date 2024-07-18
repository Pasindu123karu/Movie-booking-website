<?php
require 'connection.php';

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $genre = $_POST["genre"];
  $duration = $_POST["duration"];

  if ($_FILES["image"]["error"] == 4) {
    echo "<script> alert('Image Does Not Exist'); </script>";
  } else {
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));

    if (!in_array($imageExtension, $validImageExtension)) {
      echo "<script> alert('Invalid Image Extension'); </script>";
    } else if ($fileSize > 10000000) {
      echo "<script> alert('Image Size Is Too Large'); </script>";
    } else {
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'Cinemaplex 2\uploads/' . $newImageName);
      $query = "INSERT INTO movie (name, genre, duration, image) VALUES ('$name', '$genre', '$duration', '$newImageName')";
      mysqli_query($conn, $query);
      echo "<script> alert('Successfully Added'); document.location.href = 'admin_page.php'; </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Upload Image File</title>

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

    input[type="text"],
    input[type="number"],
    input[type="file"] {
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
<h1>Add Movies</h1>
  <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" required value=""><br>

    <label for="genre">Genre: </label>
    <input type="text" name="genre" id="genre" required value=""><br>

    <label for="duration">Duration (in minutes): </label>
    <input type="number" name="duration" id="duration" required value=""><br>

    <label for="image">Image: </label>
    <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""><br><br>

    <button type="submit" name="submit">Submit</button>
  </form>
  <br>
  <a href="admin_page.php">Back</a>
</body>
</html>
