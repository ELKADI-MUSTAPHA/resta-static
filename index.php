<!--========== HEAD ==========-->
<?php include("includes/head.php"); ?>


    <body>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <?php include("includes/header.php"); ?>
                        
        
        <main class="l-main">
            <!--========== HOME ==========-->

            
            <section class="home" id="home">
                <div class="home__container bd-container">
                    <div class="home__data">
                        <h1 class="home__title">RESTA </h1>
                        <h2 class="home__subtitle">The Place Where You Get <br> The Best Food <br>
                        For Your Health.</h2>
                        <a href="menu.php" class="button">View Menu</a>
                    </div>
    
                    <img src="assets/img/home2.png" alt="" class="home__img">
                </div>
            </section>

            
            <section class="carousel" id="carousel">
                <div class="carousel">
                    <h1>Sale of the week</h1>
                    <!-- Flickity HTML init -->
                    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                            <div class="gallery-cell">
                                <span class="offre">Burger</span>
                                <img class="img-food" src="./assets/img/home2.png" alt="">
                                <span class="discount">-25%</span>
                                <a href="">Order now</a>
                            </div>
                            <div class="gallery-cell">
                                <span class="offre">Pizza</span>
                                <img class="img-food" src="./assets/img/home2.png" alt="">
                                <span class="discount">-25%</span>
                                <a href="">Order now</a>
                            </div>
                            <div class="gallery-cell">
                                <span class="offre">Salad</span>
                                <img class="img-food" src="./assets/img/home2.png" alt="">
                                <span class="discount">-25%</span>
                                <a href="">Order now</a>
                            </div>
                            <div class="gallery-cell">
                                <span class="offre">Burger</span>
                                <img class="img-food" src="./assets/img/home2.png" alt="">
                                <span class="discount">-25%</span>
                                <a href="">Order now</a>
                            </div>
                            <div class="gallery-cell">
                                <span class="offre">Pizza</span>
                                <img class="img-food" src="./assets/img/home2.png" alt="">
                                <span class="discount">-25%</span>
                                <a href="">Order now</a>
                            </div>
                            <div class="gallery-cell">
                                <span class="offre">Salad</span>
                                <img class="img-food" src="./assets/img/home2.png" alt="">
                                <span class="discount">-25%</span>
                                <a href="">Order now</a>
                            </div>
                            <div class="gallery-cell">
                                <span class="offre">Burger</span>
                                <img class="img-food" src="./assets/img/home2.png" alt="">
                                <span class="discount">-25%</span>
                                <a href="">Order now</a>
                            </div>
                            <div class="gallery-cell">
                                <span class="offre">Pizza</span>
                                <img class="img-food" src="./assets/img/home2.png" alt="">
                                <span class="discount">-25%</span>
                                <a href="">Order now</a>
                            </div>
                            <div class="gallery-cell">
                                <span class="offre">Salad</span>
                                <img class="img-food" src="./assets/img/home2.png" alt="">
                                <span class="discount">-25%</span>
                                <a href="">Order now</a>
                            </div>
                            <div class="gallery-cell">
                                <span class="offre">Burger</span>
                                <img class="img-food" src="./assets/img/home2.png" alt="">
                                <span class="discount">-25%</span>
                                <a href="">Order now</a>
                            </div>
                    </div>
                </div>
            </section>
         
            <!--========== SERVICES ==========-->
            <section class="services section bd-container" id="services">
                <span class="section-subtitle">Offering</span>
                <h2 class="section-title">Our amazing services</h2>

                <div class="services__container  bd-grid" style="background-image: url(assets/img/bgd.png);">
                    <div class="services__content one" style="background-image: url(assets/img/about.jpg);">
                        <div class="black-bgd">
                            <div class="centering">
                                <i class='bx bxs-dish'></i>
                                <h3 class="services__title">Excellent food</h3>
                                <p class="services__description">We offer our clients excellent quality services for many years, with the best and delicious food in the city.</p>
                            </div>
                        </div>
                    </div>

                    <div class="services__content two" style="background-image: url(assets/img/about.jpg);">
                        <div class="black-bgd">
                            <div class="centering">
                                <i class='bx bx-check-double'></i>
                                <h3 class="services__title">Fast food</h3>
                                <p class="services__description">We offer our clients excellent quality services for many years, with the best and delicious food in the city.</p>
                            </div>
                        </div>
                    </div>

                    <div class="services__content three" style="background-image: url(assets/img/about.jpg);">
                        <div class="black-bgd">
                            <div class="centering">
                                <i class='bx bxs-truck'></i>
                                <h3 class="services__title">Delivery</h3>
                                <p class="services__description">We offer our clients excellent quality services for many years, with the best and delicious food in the city.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--========== MENU ==========-->
            <section class="menu section bd-container" id="menu">
                <span class="section-subtitle">Special</span>
                <h2 class="section-title">Menu of the week</h2>

                <div class="menu__container bd-grid">
                    <div class="menu__content">
                        <img src="assets/img/plate1.png" alt="" class="menu__img">
                        <h3 class="menu__name">Barbecue salad</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">$22.00</span>
                        <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>

                    <div class="menu__content">
                        <img src="assets/img/plate2.png" alt="" class="menu__img">
                        <h3 class="menu__name">Salad with fish</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">$12.00</span>
                        <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>
                    
                    <div class="menu__content">
                        <img src="assets/img/plate3.png" alt="" class="menu__img">
                        <h3 class="menu__name">Spinach salad</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">$9.50</span>
                        <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
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
                        <a href="#" class="button">Contact us now</a>
                    </div>
                </div>
            </section>
        </main>

        <!--========== FOOTER ==========-->
        
        <?php include("includes/footer.php"); ?>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>


    </body>
</html>