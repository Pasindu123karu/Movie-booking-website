<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="seat\style.css" />
    <script src="seat\script.js"></script>

    <title>Reserve Seats</title>
  </head>
  <body>
  <?php 
    if(isset($_SESSION['status']))
    {
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
   unset($_SESSION['status']);
   }
  ?>


  <h1>Select Seats</h1>
    <form action="book_ticket.php" method="POST">
        <label for="name">Select Movies:</label>
        <select name="name" required>
            <option value="">Select Movies</option>
            
            <?php
            $conn = mysqli_connect("localhost", "root", "", "user_db");
            // Retrieve the list of Movies from the database
            $query = "SELECT name FROM movie";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value ='{$row['movie_id']}' >{$row['name']}</option>";
                }
            }
            ?>
            <option>Top Gun</option>
            <option>Avengers</option>
            <option>Kathuru Mithuru</option>
            <option>Jawan</option>
            <option>King Of Kotha</option>
            <option>Ant Man</option>
            <option>The Boys</option>
            <option>Kgf </option>
            <option>Eesho</option>
            <option>Jailer</option>     
            <option>Collage Romance</option>  
            <option>John Wick</option>
            <option>Rocky Aur Rani</option>

        </select><br>
        <label for="">Date</label>
        <input type="datetime-local" name="date" class="form-control">


            
        </select><br>
    </div>


    <div class="theater-container">
            <label for="showtime">Time:</label>
            <select name="showtime" id="showtime">
                <option value="02:00 PM">02:00 PM</option>
                
            </select>
        </div>





    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat sold"></div>
        <small>Sold</small>
      </li>
    </ul>
    <div class="container">
      <div class="screen"></div>

      

      
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      
      
    </div>

    <p class="text">
      Selected Seats - <span id="count">0</span> <br> Total - RS. <span
        id="total"
        >0</span
      >
    </p>
    <br>
    <div class="form-group">
      <button type="submit">Book Now</button>
  </div>

  </body>
</html>