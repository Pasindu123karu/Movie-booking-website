<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="icon" type="image/x-icon" href="./img/1234.png"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
    <link rel="stylesheet" href="swiper-bundle.min.css">

      
      
    <title>Cinema Plex</title>
</head>

<body>
    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">CINEMAPLEX
        </div>
    <header>
        
        <nav>
            <div class="logo_ul">
                <a href="./index.html">
                <img src="img/logo1.png" alt=""></a>
                <ul>
                    <li>
                        <a href="./index.html">Home</a>
                    </li>
                    <li>
                        <a href="./movie.php" id="movies">Movies</a>
                    </li>
                    <li>
                        <a href="./about.html" id="movies">About Us</a>
                    </li>
                    <li>
                        <a href="./Cinemaplex user/login_form.php">Sign In</a>
                    </li>
                </ul>
            </div>
            <div class="search_user">
                <div class="logo_ul">
                    <ul>
                        <li>
                            <h3>Hi , User</h3>
                        </li>
                    </ul>
                </div> 
            </div>
        </nav>
     
       
           
        </header>

    <!-- movie section -->

    <section class="movies" id="movies">
        <h1 class="heading">Now Showing</h1>
        <div class="movies-container">

            
            <div id="popup" class="popup">
                <div class="popup-content">
                    <span class="close" id="close-popup">&times;</span>
                    <p>Sign in to buy tickets</p>
                </div>
            </div>
            
            <!-- box 1 -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/avengers.jpg" alt="Avengers">
                </div>
                <div class="box-details">
                    <h3>Avengers</h3>
                    <span>120 min | Action</span>
                    <div class="button-container">
                        <button class="book-button">Book Now</button>
                        <a href="./avengers.html"><button class="more-info-button">More Info</button></a>
                    </div>
                </div>
            </div>

             <!-- box 2 -->
             <div class="box">
                <div class="box-img">
                        <img src="./img/ant man.jpg" alt="">
                </div>
                <div class="box-details">
                    <h3>Ant Man</h3>
                    <span>120 min | Action</span>
                    <div class="button-container">
                        <button class="book-button">Book Now</button>
                        <a href="./antman.html"><button class="more-info-button">More Info</button></a>
                    </div>
                </div>
            </div>

             <!-- box 3 -->
             <div class="box">
                <div class="box-img">
                    <img src="./img/eesho.avif" alt="Avengers">
                </div>
                <div class="box-details">
                    <h3>Eesho</h3>
                    <span>120 min | Action</span>
                    <div class="button-container">
                        <button class="book-button">Book Now</button>
                        <a href="./eesho.html"><button class="more-info-button">More Info</button></a>
                    </div>
                </div>
            </div>
             <!-- box 4 -->
             <div class="box">
                <div class="box-img">
                <img src="./img/Jhon Wick.jpg" alt="">
            </div>
            <div class="box-details">
                <h3>Jhon Wick</h3>
                <span>120 min | Action</span>
                <div class="button-container">
                    <button class="book-button">Book Now</button>
                    <a href="./jhon wick.html"><button class="more-info-button">More Info</button></a>
                </div>
            </div>
        </div>
             <!-- box 5 -->
             <div class="box">
                <div class="box-img">
                <img src="./img/KGF.jpg" alt="">
            </div>
            <div class="box-details">
                <h3>KGF</h3>
                <span>120 min | Action</span>
                <div class="button-container">
                    <button class="book-button">Book Now</button>
                    <a href="./kgf.html"><button class="more-info-button">More Info</button></a>
                </div>
            </div>
        </div>
             <!-- box 6 -->
             <div class="box">
                <div class="box-img">
                <img src="./img/topgun.jpg" alt="">
            </div>
            <div class="box-details">
                <h3>Top Gun</h3>
                <span>120 min | Action</span>
                <div class="button-container">
                    <button class="book-button">Book Now</button>
                    <a href="./topgun.html"><button class="more-info-button">More Info</button></a>
                </div>
            </div>
        </div>
             <!-- box 7 -->
             <div class="box">
                <div class="box-img">
                <img src="./img/katuru mituru.jpg" alt="">
            </div>
            <div class="box-details">
                <h3>Kathuru Mithuru</h3>
                <span>120 min | Action</span>
                <div class="button-container">
                    <button class="book-button">Book Now</button>
                    <a href="./kathuru mithuru.html"><button class="more-info-button">More Info</button></a>
                </div>
            </div>
        </div>

             <!-- box 8 -->
             <div class="box">
                <div class="box-img">
                <img src="./img/the boys.jpg" alt="">
            </div>
            <div class="box-details">
                <h3>The Boys</h3>
                <span>120 min | Action</span>
                <div class="button-container">
                    <button class="book-button">Book Now</button>
                    <a href="./the boys.html"><button class="more-info-button">More Info</button></a>
                </div>
            </div>
        </div>
             <!-- box 9 -->
             <div class="box">
                <div class="box-img">
                <img src="./img/collage romance.jpg" alt="">
            </div>
            <div class="box-details">
                <h3>Collage Romance</h3>
                <span>120 min | Romance</span>
                <div class="button-container">
                    <button class="book-button">Book Now</button>
                    <a href="./college.html"><button class="more-info-button">More Info</button></a>
                </div>
            </div>
        </div>

             <!-- box 10 -->
             <div class="box">
                <div class="box-img">
                <img src="./img/king kotha.jpg" alt="">
            </div>
            <div class="box-details">
                <h3>King Of Kotha</h3>
                <span>120 min | Action</span>
                <div class="button-container">
                    <button class="book-button">Book Now</button>
                    <a href="./kok.html"><button class="more-info-button">More Info</button></a>
                </div>
            </div>
        </div>

        <!-- box 11 -->
        <div class="box">
            <div class="box-img">
            <img src="./img/jailor.jpg" alt="">
        </div>
        <div class="box-details">
            <h3>Jailor</h3>
            <span>120 min | Action</span>
            <div class="button-container">
                <button class="book-button">Book Now</button>
                <a href="./jailer.html"><button class="more-info-button">More Info</button></a>
            </div>
        </div>
    </div>

    <!-- box 12 -->
    <div class="box">
        <div class="box-img">
        <img src="./img/rocky.jpg" alt="">
    </div>
    <div class="box-details">
        <h3>Rocky</h3>
        <span>120 min | Comedy</span>
        <div class="button-container">
            <button class="book-button">Book Now</button>
            <a href="./rar.html"><button class="more-info-button">More Info</button></a>
        </div>
    </div>
</div>
    </section>

    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" id="close-popup">&times;</span>
            <p>Sign in to buy tickets</p>
        </div>
    </div>

    <section class="movies" id="movies">
        <h1 class="heading">New Added Movies</h1>
        <div class="movies-container">
          <?php
          $i = 1;
          $rows = mysqli_query($conn, "SELECT * FROM movie ORDER BY movie_id DESC");
          
          foreach ($rows as $row) {
          ?>
            <div class="box">
              <div class="box-img">
                <img src="Cinemaplex user\Cinemaplex 2\uploads/<?php echo $row["image"]; ?>" alt="<?php echo $row["name"]; ?>">
              </div>
              <div class="box-details">
                <h3><?php echo $row["name"]; ?></h3>
                <!-- You can customize this part to display additional information if needed -->
               <span><?php echo $row["duration"] . " min | " . $row["genre"]; ?></span>
                <div class="button-container1">
                  <!-- Add your button links here -->
                  <a href=""><button class="book-button">Book Now</button></a>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </section>
    
    
            <!-- slider -->
            <h1 class="heading">Coming Soon</h1>
            <section class="container">
                <div class="card__container swiper">
                   <div class="card__content">
                      <div class="swiper-wrapper">
                         <article class="card__article swiper-slide">
                            <div class="card__image">
                               <img src="./img/themarvels.webp" alt="image" class="card__img">
                               <div class="card__shadow"></div>
                            </div>
             
                            <div class="card__data">
                               <h3 class="card__name">The Marvels</h3>
                               <p class="card__description">
                                Carol Danvers, aka Captain Marvel, has reclaimed her identity from the tyrannical Kree and taken revenge on the Supreme Intelligence. 
                               </p>
             
                               <a href="https://www.youtube.com/watch?v=wS_qbDztgVY" target="_blank" class="card__button">Watch Trailer</a>
                            </div>
                         </article>
             
                         <article class="card__article swiper-slide">
                            <div class="card__image">
                               <img src="./img/800.jpg" alt="image" class="card__img">
                               <div class="card__shadow"></div>
                            </div>
             
                            <div class="card__data">
                               <h3 class="card__name">800 </h3>
                               <p class="card__description">
                                800 is an 2023 Indian Tamil-language biographical sports film based on the life and career of cricketer Muttiah Muralitharan, 
                                the highest wicket-taker in the history of cricket.
                               </p>
             
                               <a href="https://www.youtube.com/watch?v=CqP4QX-8sBM" target="_blank" class="card__button">Watch Trailer</a>
                            </div>
                         </article>
             
                         <article class="card__article swiper-slide">
                            <div class="card__image">
                               <img src="./img/wonka.jpg" alt="image" class="card__img">
                               <div class="card__shadow"></div>
                            </div>
             
                            <div class="card__data">
                               <h3 class="card__name">Wonka </h3>
                               <p class="card__description">
                                Focusing on a young Willy Wonka and how he came to meet the Oompa-Loompas on one of his earliest adventures.
                               </p>
             
                               <a href="https://www.youtube.com/watch?v=4EEuHwCIhZQ" target="_blank" class="card__button">Watch Trailer</a>
                            </div>
                         </article>
             
                         <article class="card__article swiper-slide">
                            <div class="card__image">
                               <img src="./img/tiger3.jpg" alt="image" class="card__img">
                               <div class="card__shadow"></div>
                            </div>
             
                            <div class="card__data">
                               <h3 class="card__name">Tiger 3</h3>
                               <p class="card__description">
                                Tiger 3 is an upcoming Indian Hindi-language action thriller film directed by Maneesh Sharma.
                               </p>
             
                               <a href="https://www.youtube.com/watch?v=KySsZCy587g" target="_blank" class="card__button">Watch Trailer</a>
                            </div>
                         </article>
       
                         <article class="card__article swiper-slide">
                            <div class="card__image">
                               <img src="./img/Dunki.jpg" alt="image" class="card__img">
                               <div class="card__shadow"></div>
                            </div>
             
                            <div class="card__data">
                               <h3 class="card__name">Dunki </h3>
                               <p class="card__description">
                                Dunki is an upcoming Indian Hindi-language comedy-drama film directed by Rajkumar Hirani, 
                                who co-wrote the screenplay with Abhijat Joshi and Kanika Dhillon
                               </p>
             
                               <a href="https://www.youtube.com/watch?v=Mgf--H7NwMs" target="_blank" class="card__button">Watch Trailer</a>
                            </div>
                         </article>
       
                         <article class="card__article swiper-slide">
                            <div class="card__image">
                               <img src="./img/leo.webp" alt="image" class="card__img">
                               <div class="card__shadow"></div>
                            </div>
             
                            <div class="card__data">
                               <h3 class="card__name">Leo </h3>
                               <p class="card__description">
                                Leo is an upcoming Indian Tamil-language action thriller film directed by Lokesh Kanagaraj and produced by S. S. Lalit Kumar and Jagadish Palanisamy.
                               </p>
             
                               <a href="https://www.youtube.com/watch?v=Po3jStA673E" target="_blank" class="card__button">Watch Trailer</a>
                            </div>
                         </article>
                      </div>
                   </div>
       
                   <!-- Navigation buttons -->
                   <div class="swiper-button-next">
                      <i class="ri-arrow-right-s-line"></i>
                   </div>
                   
                   <div class="swiper-button-prev">
                      <i class="ri-arrow-left-s-line"></i>
                   </div>
       
                   <!-- Pagination -->   
                   <div class="swiper-pagination"></div>
                </div>
             </section>

             <footer>
                <div class="main-content">
                  <div class="left boxs">
                    <h2>About us</h2>
                    <div class="content">
                      <p>Cineplex is dedicated to elevating Sri Lanka's <br>
                        cinema experience by modern comfort, in <br>
                        line with international standards. </p>
                      <div class="social">
                        <a href="https://www.facebook.com/" target="_blank"><span class="fab fa-facebook-f"></span></a>
                        <a href="https://twitter.com/?lang=en" target="_blank"><span class="fab fa-twitter"></span></a>
                        <a href="https://www.instagram.com/" target="_blank"><span class="fab fa-instagram"></span></a>
                        <a href="https://www.youtube.com/" target="_blank"><span class="fab fa-youtube"></span></a>
                      </div>
                    </div>
                  </div>
          
                  <div class="center boxs">
                    <h2>Address</h2>
                    <div class="content">
                      <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">Birendranagar, Surkhet</span>
                      </div>
                      <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">+94 342 233 333</span>
                      </div>
                      <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">cinemaplex@gmail.com</span>
                      </div>
                    </div>
                  </div>
          
                  <div class="right boxs">
                    <h2>Contact us</h2>
                    <div class="content">
                      <form action="#">
                        <div class="email">
                          <div class="text">Email *</div>
                          <input type="email" required>
                        </div>
                        <div class="msg">
                          <div class="text">Message *</div>
                          <input type="text" required>
                        </div>
                        <div class="btn">
                          <button type="submit">Send</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="bottom">
                  <center>
                    <span class="credit">Created By <a href="#">CinemaPlex</a> | </span>
                    <span class="far fa-copyright"></span><span> 2024 All rights reserved.</span>
                  </center>
                </div>
              </footer>

     <script src="swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>