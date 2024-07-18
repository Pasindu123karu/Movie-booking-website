<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
  }
  .container {
    margin: 20px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
  }
  .message {
    font-size: 18px;
    color: #007f00;
    font-weight: bold;
  }

.container2 {
    text-align: center;
}

.btn {
    margin: 10px;
    padding: 15px 30px;
    background-color: #007BFF;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    font-size: 20px;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3;
}
      
</style>
</head>
<body>
<div class="container">
  <?php
  // (A) LOAD LIBRARY
  require "2-reserve-lib.php";

  // (B) SAVE
  $_RSV->save($_POST["sessid"], $_POST["userid"], $_POST["seats"],$_POST["name"] ,$_POST["date"] ,$_POST["showtime"]);
  echo "<div class='message'>SAVED</div>";
  ?>
</div>
<div class="container2">
         <a href="../Cinemaplex 2/movie.php" class="btn">Back To Home</a>
</div>
</body>
</html>