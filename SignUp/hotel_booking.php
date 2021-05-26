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
    <link rel="stylesheet" href="hotel_booking.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="index.html" class="logo">
                    <img src="./image/logo.png" alt="">
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

        </div>

        <section class="booking">
            <div class="container">
                <form action="" class="form">
                    <div class="input-group">
                        <label for="name" class="input-label">Name</label>
                        <input type="text" class="input" id="name">
                    </div>
                    <div class="input-group">
                        <label for="check-in" class="input-label">Check in</label>
                        <input type="date" class="input" id="check-in">
                    </div>
                    <div class="input-group">
                        <label for="check-out" class="input-label">Check out</label>
                        <input type="date" class="input" id="check-out">
                    </div>
                    <div class="input-group">
                        <label for="adults" class="input-label">Adults</label>
                        <select name="" id="adults" >
                            <option value="0">0</option>
                            <option value="0">1</option>
                            <option value="0">2</option>
                            <option value="0">3</option>
                            <option value="0">4</option>
                            <option value="0">5</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="children" class="input-label">Children</label>
                        <select name="" id="children">
                            <option value="0">0</option>
                            <option value="0">1</option>
                            <option value="0">2</option>
                            <option value="0">3</option>
                            <option value="0">4</option>
                            <option value="0">5</option>
                        </select>
                    </div>
                    <button type="submit" class="btn form-btn btn-purple">Book now
                    </button>
                </form>
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero cum, praesentium molestiae, nihil eaque laboriosam accusamus quis unde repudiandae quo, maxime officiis necessitatibus sapiente consequatur iusto! Adipisci asperiores quos minima?
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

    <script src="hotel_booking.js"></script>
</body>
</html> 