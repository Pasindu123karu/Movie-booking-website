<?php
include 'config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Page</title>

   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: rgb(23, 23, 23);
         margin: 0;
         padding: 0;
      }

      .container {
         max-width: 1200px;
         margin: 0 auto;
         padding: 20px;
         background-color:rgb(23, 23, 23);
         box-shadow: 0px 10px 25px -8px #000;
         border-radius: 10px;
      }

      .header {
         text-align: center;
         background-color: #007BFF;
         padding: 20px 0;
         border-radius: 10px 10px 0 0;
      }

      .header h1 {
         color: #fff;
         font-size: 36px;
      }

      .content h1{
         color: #fff;
         font-size: 36px;
      }

      .content {
         text-align: center;
         padding: 20px;
      }

      h3 {
         color: #333;
         font-size: 24px;
      }

      p {
         color: #555;
      font-size: 18px;
      text-align: center; 
         
      }

      .btn-container {
         display: flex;
         flex-wrap: wrap;
         justify-content: center;
         margin-top: 20px;
      }

      .btn {
         margin: 10px;
         padding: 15px 30px;
         background-color:#007BFF;
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
   <div class="header">
      <h1>Welcome, <?php echo $_SESSION['admin_name'] ?></h1>
   </div>

   <div class="content">
      <h1>Dashboard</h1>
      <p>This is your admin panel.</p>
      
      <div class="btn-container">
         <a href="view_movies.php" class="btn">View Movies</a>
         <a href="add_movie.php" class="btn">Add Movies</a>
         <a href="modify_movies.php" class="btn">Edit Movies</a>
         <a href="delete_movies.php" class="btn">Delete Movies</a>
         <a href="view_time.php" class="btn">View Show Time</a>
         <a href="add_time.php" class="btn">Add Show Time</a>
         <a href="modify_time.php" class="btn">Change Show Time</a>
         <a href="view_users.php" class="btn">View Users</a>
         <a href="delete_users.php" class="btn">Delete Users</a>
         <a href="booking\view_booking.php" class="btn">View Bookings</a>
         <a href="logout.php" class="btn">Logout</a>
         
      </div>
   </div>
</div>

</body>
</html>
