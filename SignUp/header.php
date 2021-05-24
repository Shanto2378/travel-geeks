<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--box icons-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!--css-->
    <link rel="stylesheet" href="header.css">

    <title>Document</title>

</head>

<body>
    <!--scroll top-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="assets/img/home.png" class="nav__logo"></a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.php" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                    <li class="nav__item"><a href="#menu" class="nav__link">Hotels</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>
                    <?php
                if(isset($_SESSION['useremail'])){
                  ?>
                        <li class="nav__item"><a href="logout.php" class="nav__link">Logout</a></li>
                        <?php
                }
                else{ ?>
                            <li class="nav__item"><a href="signin_signup.php" class="nav__link">Login</a></li>
                            <?php }
                ?>
                            <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <!-- schroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>


    <!-- main js -->
    <script src="header.js"></script>


</body>

</html>