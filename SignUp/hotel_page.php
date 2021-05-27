<?php
session_start();  
include('database_connection.php');    
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TravelGeeks</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="hotel_page.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="index.html" class="logo">
                    <img src="images/home1.png" alt="">
                </a>
                <div class="hamburger-menu">
                    <i class="fa fa-bars"></i>
                    <i class="fa fa-times"></i>

                </div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">News</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>

    </header>

    <main>
        <div class="hero">
             <div class="container">
                 <div class="main-heading">
                 <img src="./images/hero_background.jpg" alt="" class="hotel-image">
                     <h1 class="title">Discover</h1>
                     <h2 class="subtitle">Luxury hotels</h2>
                 </div>
                 <a href="#" class="btn btn-gradient">Explore now
                     <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                 </a>
             </div>
        </div>

        <section class="hotels">
            <div class="container">
    
                <h5 class="section-head">
                    <span class="heading">Explore</span>
                    <span class="sub-heading">Our beautiful hotels</span>
                </h5>
                <div class="grid">
                <?php
             $sql= 'SELECT * FROM hotel ORDER BY hId DESC;';
             $result= mysqli_query($conn, $sql);
             while ($hotel = mysqli_fetch_array($result)) {?>
                    <div class="grid-item featured-hotels">
                        <?php echo '<img src="', $hotel['hImage1'],'" alt="" class="hotel-image">';?>
                        <h5 class="hotel-name"> <?php echo "$hotel[hName]"; ?> </h5>
                        <span class="hotel-price">From $200/Night</span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star-half rating"></i>
                        </div>
                        <a href="#" class="btn btn-gradient">Book now
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </a>
                    </div>
                    <?php } ?>

                    <!-- <div class="grid-item featured-hotels">
                        <img src="./image/hotel_the_enchanted_garden.jpg" alt="" class="hotel-image">
                        <h5 class="hotel-name">Enchanted Garden</h5>
                        <span class="hotel-price">From $300/Night</span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                        </div>
                        <a href="#" class="btn btn-gradient">Book now
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </a>
                    </div> -->

                    <!-- <div class="grid-item featured-hotels">
                        <img src="./images/hptel_the_paradise.jpg" alt="" class="hotel-image">
                        <h5 class="hotel-name">The Paradise</h5>
                        <span class="hotel-price">From $350/Night</span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star-half rating"></i>
                        </div>
                        <a href="#" class="btn btn-gradient">Book now
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </a>
                    </div> -->
                </div>
            </div>

        </section>
        <section class="offer">
            <div class="container">
                <div class="offer-content">
                    <div class="discount">
                        40% off
                    </div>
                    <h5 class="hotel-name">The Paradise</h5>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star-half rating"></i>
                    </div>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae unde deserunt vitae. Officiis veniam voluptatem libero dolorum deserunt amet soluta, ad natus quis, sunt totam praesentium id! Quas, dolorem optio.
                    </p>
                    <a href="#" class="btn btn-gradient">Redeem offer
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </a>
                </div>
            </div>
        </section>

        <section class="rooms">
            <div class="container">
                <h5 class="section-head">
                    <span class="heading">Luxurious</span>
                    <span class="sub-heading">Affordable rooms</span>
                </h5>
                <div class="grid rooms-grid">
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="./images/room_1.jpg" alt="">
                            <h5 class="room-name">Astro Hotel</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">$200 <span class="per-night">Per night</span></span>
                            <p class="paragraph">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, adipisci. Dolorem sunt sequi, ipsa veniam quidem soluta consectetur quos laborum ut odio commodi necessitatibus sapiente eius perspiciatis doloremque fugiat minima.
                            </p>
                            <a href="#" class="btn rooms-btn">Book now &rarr;</a>
                        </div>
                    </div>
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="./images/room_2.jpg" alt="">
                            <h5 class="room-name">Astro Hotel</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">$200 <span class="per-night">Per night</span></span>
                            <p class="paragraph">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, adipisci. Dolorem sunt sequi, ipsa veniam quidem soluta consectetur quos laborum ut odio commodi necessitatibus sapiente eius perspiciatis doloremque fugiat minima.
                            </p>
                            <a href="#" class="btn rooms-btn">Book now &rarr;</a>
                        </div>
                    </div>
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="./images/room_3.jpg" alt="">
                            <h5 class="room-name">Astro Hotel</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">$200 <span class="per-night">Per night</span></span>
                            <p class="paragraph">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, adipisci. Dolorem sunt sequi, ipsa veniam quidem soluta consectetur quos laborum ut odio commodi necessitatibus sapiente eius perspiciatis doloremque fugiat minima.
                            </p>
                            <a href="#" class="btn rooms-btn">Book now &rarr;</a>
                        </div>
                    </div>
                    <div class="grid-item featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="./images/room_4.jpg" alt="">
                            <h5 class="room-name">Astro Hotel</h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price">$200 <span class="per-night">Per night</span></span>
                            <p class="paragraph">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, adipisci. Dolorem sunt sequi, ipsa veniam quidem soluta consectetur quos laborum ut odio commodi necessitatibus sapiente eius perspiciatis doloremque fugiat minima.
                            </p>
                            <a href="#" class="btn rooms-btn">Book now &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact">
            <div class="container">
                <h5 class="section-head">
                    <span class="heading">Contact</span>
                    <span class="sub-heading">Get in touch with us</span>
                </h5>
                <div class="contact-content">
                    <div class="traveler-wrap">
                        <img src="./images/traveler.png" alt="">
                    </div>
                    <form action="" class="form contact-form">
                        <div class="input-group-wrap">
                            <div class="input-group">
                                <input type="text" class="input" placeholder="Name" required>
                                <span class="bar"></span>
                            </div>
                            <div class="input-group">
                                <input type="email" class="input" placeholder="E-mail" required>
                                <span class="bar"></span>
                            </div>
                            </div>
                            <div class="input-group">
                                <input type="text" class="input" placeholder="Subject" required>
                                <span class="bar"></span>
                            </div>
                            <div class="input-group">
                                <textarea class="input" cols="30" rows="8" placeholder="Message" required></textarea>
                                <span class="bar"></span>
                            </div>
                        <button type="submit" class="btn form-btn btn-purple">Send Message
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </button>    
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-content-brand">
                    <a href="index.html" class="logo">
                        <img class="logo-image" src="./images/logo.png" alt="">
                    </a>
                    <p class="paragraph">
                        As people around the world prepare to celebrate Global Accessibility Awareness Day, Travel Geeks is highlighting ways to get closer to nature through Experiences designed by hosts with accessibility in mind.
                    </p>
                </div>
                <div class="social-media-wrap">
                    <h4 class="footer-heading">Follow us</h4>
                    <div class="social-media">
                        <a href="#" class="sm-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="sm-link"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" class="sm-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="sm-link"><i class="fab fa-tripadvisor"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="hotel_page.js"></script>
</body>
</html> 