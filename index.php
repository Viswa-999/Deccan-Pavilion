<?php 
  session_start(); 

  if (!isset($_SESSION['Email_Id'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['Email_Id']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Deccan Pavilion</title>
    </head>
    <body>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#about" class="nav__logo">Deccan Pavilion</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#menu" class="nav__link">Special menu</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>
                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                        <li class="nav__item"><a href="cart.html" class="button menu__button">Menu&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">Deccan Pavilion</h1>
                        <h2 class="home__subtitle">Try the best food of <br> the week.</h2>
                        <a href="#menu" class="button">View Menu</a>
                    </div>
    
                    <img src="assets/img/dum-gosht-biryani.jpg" alt="" class="home__img">
                </div>
            </section>
            
            <!--========== ABOUT ==========-->
            <section class="about section bd-container" id="about">
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial">About us</span>
                        <h2 class="section-title about__initial">We cook the best <br> tasty food</h2>
                        <p class="about__description">We cook the best food in the entire city, with excellent customer service, the best meals and at the best price, visit us.</p>
                        
                    </div>

                    <img src="assets/img/about.jpg" alt="" class="about__img">
                </div>
            </section>

            <!--========== MENU ==========-->
            <section class="menu section bd-container" id="menu">
                <span class="section-subtitle">Special</span>
                <h2 class="section-title">Menu of the week</h2>

                <div class="menu__container bd-grid">
                    <div class="menu__content">
                        <img src="assets/img/noodles_3.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Double Egg Noodles</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">70₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>

                    <div class="menu__content">
                        <img src="assets/img/biryani_3.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Mughlai biryani</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">180₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>
                    
                    <div class="menu__content">
                        <img src="assets/img/mandi_biryani_4.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Barbique Mandi</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">600₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>
                </div>
                <br>
                <h2 class="section-title">Fast food</h2>
                <span class="section-subtitle">Noodles</span>
                <div class="menu__container bd-grid">
                    <div class="menu__content">
                        <img src="assets/img/noodles_1.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Egg Noodles</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">50₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>

                    <div class="menu__content">
                        <img src="assets/img/noodles_2.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Chicken Noodles</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">90₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>
                    
                    <div class="menu__content">
                        <img src="assets/img/noodles_3.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Double Egg Noodles</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">70₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>
                </div>
                <br>
                <span class="section-subtitle">Fried rice</span>
                <div class="menu__container bd-grid">
                    <div class="menu__content">
                        <img src="assets/img/fried-rice_1.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Veg Fried Rce</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">60₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>

                    <div class="menu__content">
                        <img src="assets/img/fried-rice_2.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Egg Fried Rce</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">90₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>
                    
                    <div class="menu__content">
                        <img src="assets/img/fried-rice_3.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Chicken Fried Rce</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">120₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>
                </div>
                 <br>
                <h2 class="section-title">Biryani</h2>
                <div class="menu__container bd-grid">
                    <div class="menu__content">
                        <img src="assets/img/biryani_1.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Chicken biryani</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">150₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>

                    <div class="menu__content">
                        <img src="assets/img/biryani_2.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Mutton biryani</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">200₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>
                    
                    <div class="menu__content">
                        <img src="assets/img/biryani_3.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Mughlai biryani</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">180₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>
                </div>
                <h2 class="section-title">Mandi Biryani</h2>
                <div class="menu__container bd-grid">
                    <div class="menu__content">
                        <img src="assets/img/mandi_biryani_1.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Special Chicken Mandi</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">400₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>
               
                    <div class="menu__content">
                        <img src="assets/img/mandi_biryani_2.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Mutton Mandi</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">520₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>

                    <div class="menu__content">
                        <img src="assets/img/mandi_biryani_3.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Fish Mandi</h3>s
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">550₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>
                </div>
                <br>
                <div class="menu__container bd-grid">
                    <div class="menu__content">
                        <img src="assets/img/mandi_biryani_4.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Barbique Mandi</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">600₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>

                    <div class="menu__content">
                        <img src="assets/img/mandi_biryani_5.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Batiar Mandi</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">420₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>
                </div>
                <br>
                <h2 class="section-title">Tiffins</h2>
                <div class="menu__container bd-grid">
                    <div class="menu__content">
                        <img src="assets/img/tiffin_1.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Idli vada</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">60₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>
                    <div class="menu__content">
                        <img src="assets/img/tiffin_2.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">puri vada</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">50₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>
                    <div class="menu__content">
                        <img src="assets/img/tiffin_3.jpg" alt="" class="menu__img">
                        <h3 class="menu__name">Masala Dosa</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">60₹</span>
                        <a href="#" class="button menu__button">Add to Cart &nbsp;&nbsp;&nbsp;<i class='bx bx-cart-alt'></i></a>
                    </div>
                </div>
            </section>

            <!--========== CONTACT US ==========-->
            <section class="contact section bd-container" id="contact">
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <span class="section-subtitle contact__initial">Let's talk</span>
                        <h2 class="section-title contact__initial">Contact us</h2>
                        <p class="contact__description">If you want to reserve a table in our restaurant, contact us and we will attend you quickly, with our 24/7 chat service.</p>
                    </div>

                    <div class="contact__button">
                        <a href="#contact_address" class="button">Contact us now</a>
                    </div>
                </div>
            </section>
        </main>

        <!--========== FOOTER ==========-->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Deccan Pavilion</a>
                    <span class="footer__description">Restaurant</span>
                    <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Services</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Delivery</a></li>
                        <li><a href="#" class="footer__link">Pricing</a></li>
                        <li><a href="#" class="footer__link">Fast food</a></li>
                        <li><a href="#" class="footer__link">Reserve your spot</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Information</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Event</a></li>
                        <li><a href="#" class="footer__link">Contact us</a></li>
                        <li><a href="#" class="footer__link">Privacy policy</a></li>
                        <li><a href="#" class="footer__link">Terms of services</a></li>
                    </ul>
                </div>

                <div class="footer__content" id="contact_address">
                    <h3 class="footer__title">Address</h3>
                    <ul>
                        <li>Akhileswar</li>
                        <li>Indian</li>
                        <li>630 3179 197</li>
                        <li>koncheakhil@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="content">
                <!-- notification message -->
                <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success" >
                    <h3>
                        <?php 
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
                <?php endif ?>

                <!-- logged in user information -->
                <?php  if (isset($_SESSION['Email_Id'])) : ?>
                <p>Welcome <strong><?php echo $_SESSION['Email_Id']; ?></strong></p>
                <p><button> <a href="index.php?logout='1'" style="color: red;">logout</a></button> </p>
                <?php endif ?>
            </div>

            <p class="footer__copy">&#169; 2020 Deccan Pavilion. All right reserved</p>
        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>