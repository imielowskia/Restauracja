<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Restauracja</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="https://i.pinimg.com/originals/4e/24/f5/4e24f523182e09376bfe8424d556610a.png" rel="icon">
    <link href="{{asset('strona_k/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('strona_k/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('strona_k/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('strona_k/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('strona_k/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('strona_k/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('strona_k/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('strona_k/assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('strona_k/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Restaurantly - v1.2.1
    * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-phone"></i> +48 888 666 777
            <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Pon-Sob: 11:00 - 23:00 </span>
        </div>
        <div class="languages">
            <ul>
                <li>PL</li>

            </ul>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="index.blade.php">Restauracja</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.blade.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="/">Strona Główna</a></li>
                <li><a href="#about">Info</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#events">Wydarzenia</a></li>
                <li><a href="#gallery">Galeria</a></li>
                <li><a href="#chefs">Kucharze</a></li>
                <li class="book-a-table text-center"><a href="#contact">Kontakt</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-8">
                <h1>Witamy w naszej <span>Restauracji</span></h1>
                <h2>Jesteśmy razem z wami od 25 lat!</h2>

                <div class="btns">
                    <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menu</a>
                    <a href="#events" class="btn-book animated fadeInUp scrollto">Wydarzenia</a>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
                <a href="https://www.youtube.com/watch?v=anU9n1wMgis" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
            </div>

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="{{asset('strona_k/assets/img/about.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>Witamy w naszej restauracji</h3>
                    <p class="font-italic">
                        Zajdziesz tutaj przepyszne dania z 7 stron świata oraz najlepszych kucharzy w kraju.
                    </p>
                    <ul>
                        <li><i class="icofont-check-circled"></i> Najlepi kucharze w kraju</li>
                        <li><i class="icofont-check-circled"></i> Gwarancja smaku</li>
                        <li><i class="icofont-check-circled"></i> Dania z 7 stron świata</li>
                    </ul>
                    <p>
                        Serdecznie zapraszamy do naszej nowej restauracji zjecie tutaj pysznie i z smakiem . Zapraszamy wszystkich. Znajdziesz tutaj coś dla siebie,
                        mamy wiele różnych dań oraz atrakcji takich jak bilard gra w rzutki.
                        Znajdziesz również u nas przeróżne alkohole jesli jesteś smakoszem to zapraszamy.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Dlaczego my?</h2>
                <p>Oto dlaczego wybrałeś naszą restauracje</p>
            </div>

            <div class="row">

                <div class="col-lg-4">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span>01</span>
                        <h4>Jesteśmy najlepi w kraju</h4>
                        <p>Zatrudniamy najlepszych kucharzy w polsce.
                            Są to doświadczeni kucharze którzy szkolili się cały życie aby być najlepszymi</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                        <span>02</span>
                        <h4>Gwarancja smaku</h4>
                        <p>jako jedyni z nielicznych gwanartujemy , że nasze potrawy wam zasmakują albo zwrócimy wam pieniądze </p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="300">
                        <span>03</span>
                        <h4>Różnorodność</h4>
                        <p>Serwujemy dania z całego świata</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Menu</h2>
                <p>Sprawdź co mamy w ofercie</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="menu-flters">
                        <li data-filter="*" class="filter-active">Wszystko</li>
                        <li data-filter=".filter-starters">Dania</li>
                        <li data-filter=".filter-salads">Napoje</li>
                        <li data-filter=".filter-specialty">Alkohol</li>
                    </ul>
                </div>
            </div>

            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-6 menu-item filter-starters">
                    <img src="{{asset('strona_k/assets/img/menu/lobster-bisque.jpg')}}" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Lobster Bisque</a><span>$5.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <img src="{{asset('strona_k/assets/img/menu/bread-barrel.jpg')}}" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Bread Barrel</a><span>$6.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-starters">
                    <img src="{{asset('strona_k/assets/img/menu/cake.jpg')}}" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Crab Cake</a><span>$7.95</span>
                    </div>
                    <div class="menu-ingredients">
                        A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <img src="{{asset('public/strona_k/assets/img/menu/caesar.jpg')}}" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Caesar Selections</a><span>$8.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <img src="{{asset('public/strona_k/assets/img/menu/tuscan-grilled.jpg')}}" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Tuscan Grilled</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Grilled chicken with provolone, artichoke hearts, and roasted red pesto
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-starters">
                    <img src="{{asset('strona_k/assets/img/menu/mozzarella.jpg')}}" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Mozzarella Stick</a><span>$4.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <img src="{{asset('strona_k/assets/img/menu/greek-salad.jpg')}}" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Greek Salad</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Fresh spinach, crisp romaine, tomatoes, and Greek olives
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <img src="{{asset('strona_k/assets/img/menu/spinach-salad.jpg')}}" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Spinach Salad</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <img src="{{asset('strona_k/assets/img/menu/lobster-roll.jpg')}}" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Lobster Roll</a><span>$12.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Menu Section -->



    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Wydarzenia</h2>
                <p>Zorganizujemy dla ciebie:</p>
            </div>

            <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">

                <div class="row event-item">
                    <div class="col-lg-6">
                        <img src="{{asset('strona_k/assets/img/event-birthday.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Urodziny</h3>
                        <div class="price">
                            <p><span>100 zł od osoby</span></p>
                        </div>
                        <p class="font-italic">

                        </p>
                        <ul>
                            <li><i class="icofont-check-circled"></i> Główne danie</li>
                            <li><i class="icofont-check-circled"></i> Przystawki</li>
                            <li><i class="icofont-check-circled"></i> Kelnerzy</li>
                            <li><i class="icofont-check-circled"></i>Oprawa Muzyczna / DJ</li>
                        </ul>
                        <p>

                        </p>
                    </div>
                </div>

                <div class="row event-item">
                    <div class="col-lg-6">
                        <img src="{{asset('strona_k/assets/img/event-custom.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Prywatną imprezę</h3>
                        <div class="price">
                            <p><span>150zł od osoby</span></p>
                        </div>
                        <p class="font-italic">

                        </p>
                        <ul>
                            <li><i class="icofont-check-circled"></i>Główne danie</li>
                            <li><i class="icofont-check-circled"></i>Przystawki</li>
                            <li><i class="icofont-check-circled"></i>Kelnerzy</li>
                            <li><i class="icofont-check-circled"></i>Oprawa Muzyczna / DJ</li>
                        </ul>
                        <p>

                        </p>
                    </div>
                </div>

                <div class="row event-item">
                    <div class="col-lg-6">
                        <img src="{{asset('strona_k/assets/img/event-private.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Przyjęcia rodzinne</h3>
                        <div class="price">
                            <p><span>100 zł od osoby</span></p>
                        </div>
                        <p class="font-italic">

                        </p>
                        <ul>
                            <li><i class="icofont-check-circled"></i>Główne danie</li>
                            <li><i class="icofont-check-circled"></i>Przystawki</li>
                            <li><i class="icofont-check-circled"></i>Oprawa Muzyczna / DJ</li>
                        </ul>
                        <p>

                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Events Section -->





    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery col-md-10" style="margin-left: auto; margin-right: auto;">

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Galeria</h2>
                <p>Kilka zdjęć z naszej restauracji</p>
            </div>
        </div>

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('strona_k/assets/img/gallery/gallery-1.jpg')}}" class="venobox" data-gall="gallery-item">
                            <img src="{{asset('strona_k/assets/img/gallery/gallery-1.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('strona_k/assets/img/gallery/gallery-2.jpg')}}" class="venobox" data-gall="gallery-item">
                            <img src="{{asset('strona_k/assets/img/gallery/gallery-2.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('strona_k/assets/img/gallery/gallery-3.jpg')}}" class="venobox" data-gall="gallery-item">
                            <img src="{{asset('strona_k/assets/img/gallery/gallery-3.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('strona_k/assets/img/gallery/gallery-4.jpg')}}" class="venobox" data-gall="gallery-item">
                            <img src="{{asset('strona_k/assets/img/gallery/gallery-4.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('strona_k/assets/img/gallery/gallery-5.jpg')}}" class="venobox" data-gall="gallery-item">
                            <img src="{{asset('strona_k/assets/img/gallery/gallery-5.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('strona_k/assets/img/gallery/gallery-6.jpg')}}" class="venobox" data-gall="gallery-item">
                            <img src="{{asset('strona_k/assets/img/gallery/gallery-6.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('strona_k/assets/img/gallery/gallery-7.jpg')}}" class="venobox" data-gall="gallery-item">
                            <img src="{{asset('strona_k/assets/img/gallery/gallery-7.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('strona_k/assets/img/gallery/gallery-8.jpg" class="venobox')}}" data-gall="gallery-item">
                            <img src="{{asset('strona_k/assets/img/gallery/gallery-8.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Kucharze</h2>
                <p>Nasi profesjonaliści</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{asset('strona_k/assets/img/chefs/chefs-1.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Walter White</h4>
                                <span>Master Chef</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{asset('strona_k/assets/img/chefs/chefs-2.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Sarah Jhonson</h4>
                                <span>Patissier</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="300">
                        <img src="{{asset('strona_k/assets/img/chefs/chefs-3.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>William Anderson</h4>
                                <span>Cook</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">



                <div class="section-title">
                    <h2>Kontakt</h2>
                    <p>Z kontaktuj się z nami</p>
                </div>
            <a href="log-in-form"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
            </svg></a>


                <!-- Footer -->
                <footer class="page-footer font-small mdb-color pt-4">

                    <!-- Footer Links -->
                    <div class="container text-center text-md-left">

                        <!-- Footer links -->
                        <div class="row text-center text-md-left mt-3 pb-3">

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">Restauracja</h6>
                                <p>Dziękujemy za wizytę na naszej stronie i zapraszamy ponownie.</p>
                            </div>

                            <!-- Grid column -->

                            <hr class="w-100 clearfix d-md-none">

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">Lokalizacja</h6>
                                <p>
                                    <a href="#!">Jarosław ul. 3 maja 23A</a>
                                </p>


                            </div>
                            <!-- Grid column -->

                            <hr class="w-100 clearfix d-md-none">

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">Godziny otwarcia</h6>
                                <p>
                                    <a href="#!">Poniedziałek - Sobota: 11.00 - 23.00</a>
                                </p>
                                <p>
                                    <a href="#!">Niedziela 12:00 - 24.00</a>
                                </p>

                            </div>

                            <!-- Grid column -->
                            <hr class="w-100 clearfix d-md-none">

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">Kontakt</h6>
                                <p>
                                    <a href="#!">email: restauracja@gmail.com</a>
                                </p>
                                <p>
                                    <a href="#!">Numery tel: <br> + 48 888 666 777 <br>+ 48 666 888 777</a>
                                </p>


                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Footer links -->



                    </div>
                </footer>
                <!-- Footer -->




</div>
</main><!-- End #main -->

<!-- ======= Footer ======= -->

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('strona_k/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('strona_k/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('strona_k/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('strona_k/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('strona_k/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('strona_k/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('strona_k/assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('strona_k/assets/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('strona_k/assets/js/main.js')}}"></script>



</body>

</html>

