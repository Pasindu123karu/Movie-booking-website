<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./style3.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="icon" type="image/x-icon" href="./img/1234.png"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <title>Rocky Aur Rani | Cinema Plex</title>
</head>

<body>
    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">CINEMAPLEX
        </div>
    <header>
        <video src="./video/Rocky Aur Rani Kii Prem Kahaani - OFFICIAL TEASER _ Dharmendra, Jaya, Shabana, Ranveer, Alia _ Karan.mp4" autoplay muted ></video>
        <nav>
            <div class="logo_ul">
            <a href="./index.php">
                <img src="img/logo1.png" alt=""></a>
                <ul>
                    <li>
                        <a href="./index.php">Home</a>
                    </li>
                    <li>
                        <a href="./movie.php" id="movies">Movies</a>
                    </li>
                    <li>
                        <a href="about.php" id="movies">About Us</a>
                    </li>
                    <li>
                    <a href="../login_form.php">Sign Out</a>
                    </li>
                </ul>
            </div>
            <div class="search_user">
                <div class="logo_ul">
                    <ul>
                        <li>
                            <h3>Hi ,<?php echo $_SESSION['user_name'] ?></h3>
                        </li>
                    </ul>
                </div> 
            </div>
        </nav>
        <div class="content">
            <h1 id="title">Rocky Aur Rani</h1>
            <p>Flamboyant Punjabi Rocky and intellectual Bengali journalist Rani fall in love despite their differences. After facing family opposition, they decide to live with each other's families for three months before getting married.</p>
            <div class="details">
                <h6>Sony Pictures Original Film</h6>
                <h5 id="gen">Action</h5>
                <h4 id="date">2022</h4>
                <h3 id="rate"><span>IMDB</span><i class="bi bi-star-fill"></i> 6.8</h3>
            </div>
            <div class="btns">
                <a href="https://www.youtube.com/watch?v=6mdxy3zohEk" target="_blank" id="play">Watch Trailer<i class="bi bi-play-fill"></i></a>
                <a href="../booking/3a-reservation.php" id="download_main">Buy Tickets <i class="bi bi-ticket-perforated"></i></a>
            </div>
        </div>
        <section>
            
        <div class="cards">
                <div class="card">
                    <a href="topgun.php">
                    <img src="img/topgun.jpg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="img/topgun1.jpg" alt="">
                        <div class="cont">
                            <h4>Top Gun</h4>
                            <div class="sub">
                                <p>Action, 2022</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i> 9.6</h3>
                            </div>
                        </div>
                    </div>
                </a>
                </div>

                <div class="card">
                    <a href="kathuru mithuru.php">
                    <img src="./img/katuru mituru.jpg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="img/Kathuru-Mithuru-banner-2.jpg" alt="">
                        <div class="cont">
                            <h4>Kathuru Mithuru</h4>
                            <div class="sub">
                                <p>Comedy, 2023</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i> 7.6</h3>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="card">
                    <a href="the boys.php">
                    <img src="img/the boys.jpg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="img/the boys1.jpg" alt="">
                        <div class="cont">
                            <h4>The Boys</h4>
                            <div class="sub">
                                <p>Action, 2022</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i> 9.6</h3>
                            </div>
                        </div>
                    </div>
                </a>
                </div>

                <div class="card">
                    <a href="jhon wick.php">
                    <img src="img/Jhon Wick.jpg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="img/jhon wick1.webp" alt="">
                        <div class="cont">
                            <h4>John Wick</h4>
                            <div class="sub">
                                <p>Action, 2022</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i> 9.6</h3>
                            </div>
                        </div>
                    </div>
                </a>
                </div>

                <div class="card">
                    <a href="eesho.php">
                    <img src="img/eesho.avif" alt="" class="poster">
                    <div class="rest_card">
                        <img src="img/eesho1.jpg" alt="">
                        <div class="cont">
                            <h4>Eesho</h4>
                            <div class="sub">
                                <p>Action, 2022</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i> 9.6</h3>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="card">
                    <a href="kgf.php">
                    <img src="img/KGF.jpg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./img/kgf1.jpg" alt="">
                        <div class="cont">
                            <h4>KGF</h4>
                            <div class="sub">
                                <p>Action, 2022</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i> 9.6</h3>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="card">
                    <a href="jailer.php">
                    <img src="img/jailor.jpg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="img/jailer2.webp" alt="">
                        <div class="cont">
                            <h4>Jailer</h4>
                            <div class="sub">
                                <p>Action, 2023</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i> 5.6</h3>
                            </div>
                        </div>
                    </div>
                </a>
                </div>

                <div class="card">
                    <a href="kok.php">
                    <img src="img/king kotha.jpg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./img/kok.avif" alt="">
                        <div class="cont">
                            <h4>King Of Kotha</h4>
                            <div class="sub">
                                <p>Action, 2023</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i> 9.6</h3>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="card">
                    <a href="rar.php">
                    <img src="./img/rocky.jpg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./img/rocky1.avif" alt="">
                        <div class="cont">
                            <h4>Rocky Aur Rani</h4>
                            <div class="sub">
                                <p>Romance, 2023</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i> 6.3</h3>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="card">
                    <a href="antman.php">
                    <img src="./img/ant man.jpg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="img/ant man1.jpg" alt="">
                        <div class="cont">
                            <h4>Ant Man</h4>
                            <div class="sub">
                                <p>Action, 2022</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i> 9.6</h3>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="card">
                    <a href="avengers.php">
                    <img src="img/avengers.jpg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="img/avengers1.jpg" alt="">
                        <div class="cont">
                            <h4>Avengers</h4>
                            <div class="sub">
                                <p>Action, 2022</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i> 9.6</h3>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="card">
                    <a href="college.php">
                    <img src="img/collage romance.jpg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="img/collage romance1.jpg" alt="">
                        <div class="cont">
                            <h4>Collage Romance</h4>
                            <div class="sub">
                                <p>Comedy, 2022</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i> 9.6</h3>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </section>
    </header>
 <!-- movie section -->

 <section class="movies" id="movies">
    <h1 class="heading">Now Showing</h1>
    <div class="movies-container">
        <!-- box 1 -->
        <div class="box">
            <div class="box-img">
                <img src="./img/avengers.jpg" alt="Avengers">
            </div>
            <div class="box-details">
                <h3>Avengers</h3>
                <span>120 min | Action</span>
                <div class="button-container1">
                    
                    <a href="./avengers.php"><button class="more-info-button">More Info</button></a>
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
                <div class="button-container1">
                   
                    <a href="./antman.php"><button class="more-info-button">More Info</button></a>
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
                <div class="button-container1">
                   
                    <a href="./eesho.php"><button class="more-info-button">More Info</button></a>
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
            <div class="button-container1">
               
                <a href="./jhon wick.php"><button class="more-info-button">More Info</button></a>
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
            <div class="button-container1">
               
                <a href="./kgf.php"><button class="more-info-button">More Info</button></a>
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
            <div class="button-container1">
               
                <a href="./topgun.php"><button class="more-info-button">More Info</button></a>
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
            <div class="button-container1">
                
                <a href="./kathuru mithuru.php"><button class="more-info-button">More Info</button></a>
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
            <div class="button-container1">
              
                <a href="./the boys.php"><button class="more-info-button">More Info</button></a>
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
            <div class="button-container1">
          
                <a href="./college.php"><button class="more-info-button">More Info</button></a>
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
            <div class="button-container1">
    
                <a href="./kok.php"><button class="more-info-button">More Info</button></a>
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
        <div class="button-container1">
       
            <a href="./jailer.php"><button class="more-info-button">More Info</button></a>
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
    <div class="button-container1">

        <a href="./rar.php"><button class="more-info-button">More Info</button></a>
    </div>
</div>
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
                    line with international standards.</p>
                  <div class="social">
                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                    <a href="#"><span class="fab fa-twitter"></span></a>
                    <a href="#"><span class="fab fa-instagram"></span></a>
                    <a href="#"><span class="fab fa-youtube"></span></a>
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