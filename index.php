<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title> Home 2 - HTML 5 Template</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!-- header -->
    <header>
        <!-- header-bottom -->
        <div class="header-bottom home2-header-bottom margin-top-20">
            <div class="container position-relative">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-6 margin-bottom-20">
                        <div class="logo">
                            <a href="index.html"> <img src="assets/images/logo/logo2.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <nav id="mobile-menu">
                            <ul class="main-menu main-menu2">
                                <li><a href="#">home <span><i class="fas fa-angle-down"></i></span></a>
                                    <ul class="submenu">
                                        <li><a href="index.html">home-1</a></li>
                                        <li><a href="homepage2.html">home-2</a></li>
                                        <li><a href="homepage3.html">home-3</a></li>
                                        <li><a href="homepage4.html">home-4</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">about</a></li>
                                <li><a href="#">blog <span><i class="fas fa-angle-down"></i></span></a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-single.html">single blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">pages <span><i class="fas fa-angle-down"></i></span></a>
                                    <ul class="submenu">
                                        <li><a href="checkout.html">checkout page</a></li>
                                        <li><a href="single-dish.html">single dish page</a></li>
                                        <li><a href="food-page.html">food page</a></li>
                                        <li><a href="food-page2.html">food page 2</a></li>
                                        <li>
                                            <a href="shopping-cart.html">shopping cart page</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">wishlist page</a>
                                        </li>
                                        <li>
                                            <a href="profile.html">profile page</a>
                                        </li>
                                        <li><a href="single-food.html">single food page</a></li>
                                        <li><a href="gallery.html">gallery page</a></li>
                                        <li><a href="login.html">login page</a></li>
                                        <li><a href="signup.html">signup page</a></li>
                                        <li><a href="404.html">404 page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-5 col-md-9 col-12">
                        <div class="customer-area2 d-flex align-items-center justify-content-between">
                            <span class="position-relative">
                                <a class="shopping" href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                <span class="shop-counter">1</span>
                            </span>
                            <span class="order-img d-none d-md-block"><img src="assets/images/icons/1.png"
                                    alt=""></span>
                            <div class="order-content">
                                <span class="span-1">delivery order</span> <span class="span-2">123-59794069</span>
                            </div>
                            <?php 
                                if (!isset($_SESSION["user"])) {
                                    echo '<a href="templates/login.php" class="btn">login</a>';
                                } else {
                                    echo '<a href="templates/logout.php" class="btn">Logout</a>';
                                }
                            ?>

                        </div>
                    </div>
                </div>
                <!-- mobile-menu -->
                <div class="mobile-menu home2"></div>
            </div>
        </div>
    </header>

    <!-- burger-promo-area -->
    <section class="delivery-area burger-promo-area padding-top-240 padding-bottom-135">
        <div class="del-shapes">
            <span class="ds-1"><img src="assets/images/shapes/40.png" alt=""></span>
            <span class="ds-2"><img src="assets/images/shapes/41.png" alt=""></span>
            <span class="ds-33"><img src="assets/images/shapes/5.png" alt=""></span>
            <span class="ds-4"><img src="assets/images/shapes/2.png" alt=""></span>
        </div>
        <div class="container">
            <div class="row flex-row-reverse align-items-center">
                <div class="col-lg-6 col-md-12 margin-bottom-20">
                    <div class="delivery-left">
                        <div class="burger-shapes">
                            <span class="bs1"><img src="assets/images/shapes/capsicam.png" alt=""></span>
                            <span class="bs2"><img src="assets/images/shapes/sauce.png" alt=""></span>
                            <span class="bs3"><img src="assets/images/shapes/sale.png" alt=""></span>
                            <span class="bs4"><img src="assets/images/shapes/redtpmatto.png" alt=""></span>
                            <span class="bs5"><img src="assets/images/shapes/t-slice.png" alt=""></span>
                            <span class="bs6"><img src="assets/images/shapes/113.png" alt=""></span>
                        </div>
                        <img class="mp" src="assets/images/menu-item/burger-promo.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="delivery-right">
                        <div class="common-title-area padding-bottom-40">
                            <h3>best in town</h3>
                            <h1>enjoy our chicken<span>
                                    burger
                                </span> fast food</h1>
                            <h5 class="margin-bottom-40 margin-top-40">bacon-potatos-bbq sauce</h5>
                            <div class="order-box d-flex align-items-center">
                                <a href="shopping-cart.html" class="btn">order now</a>
                                <h5>price : <span>$10.50</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- banner-gallery -->
    <section class="banner-gallery banner-gallery2 overflow-hidden padding-top-120 padding-bottom-60">
        <div class="container position-relative">
            <div class="del-shapes">
                <span class="ds-1 item-bounce"><img src="assets/images/shapes/26.png" alt=""></span>
                <span class="ds-2 item-bounce"><img src="assets/images/shapes/28.png" alt=""></span>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="gallery-img-1">
                        <h3>Buzzed Burger</h3>
                        <p>Sale off 50% only this week</p>
                        <a href="shopping-cart.html" class="btn">order now</a>
                        <img class="pos1" src="assets/images/shapes/bbr.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-img-3">
                        <h5>Super<br>
                            Delicious<br>
                            Burger</h5>
                        <a href="shopping-cart.html">order now</a>
                        <img class="img-pos" src="assets/images/gallery/grid1.png" alt="">
                        <img src="assets/images/shapes/41.png" alt="" class="s1">
                        <span class="gprice-2">$15</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-img-2 d-flex justify-content-end">
                        <img class="img-pos1" src="assets/images/gallery/grid2.png" alt="">
                        <span class="gprice-1">$15</span>
                        <div class="gimg-content">
                            <h5 class="margin-bottom-20">Delicious<br>
                                Burger</h5>
                            <a href="shopping-cart.html">order now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin-top-30">
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-img-3 gallery-img-33">
                        <h5>Super <br>Combo<br>
                            Burger</h5>
                        <a href="shopping-cart.html">order now</a>
                        <img src="assets/images/gallery/grid4.png" alt="" class="img-pos">
                        <img src="assets/images/shapes/41.png" alt="" class="s1">
                        <span class="gprice-2">$15</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-img-22 d-flex justify-content-end">
                        <img class="img-pos" src="assets/images/gallery/grid5.png" alt="">
                        <span class="gprice-1">$15</span>
                        <div class="gimg-content">
                            <h5 class="margin-bottom-20">Super <br>Delicious<br>
                                burger</h5>
                            <img src="assets/images/shapes/42.png" alt="" class="s1">
                            <a href="shopping-cart.html">order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="gallery-img-1 gallery-img-11 gallery-img-01">
                        <h5 class="margin-bottom-10">Chicken <br>Combo<br>
                            Burger</h5>
                        <p>Sale off 50% only this week</p>
                        <a href="shopping-cart.html" class="btn">order now</a>
                        <img class="gs1" src="assets/images/shapes/bbs.png" alt="">
                        <img class="pbadge" src="assets/images/icons/pbadge.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- menu-area -->
    <section class="menu-area home2-menu-area padding-bottom-10">
        <div class="menu-shapes">
            <span class="ds-1"><img src="assets/images/shapes/34.png" alt=""></span>
            <span class="ds-2 item-bounce"><img src="assets/images/shapes/sm-tomatto.png" alt=""></span>
            <span class="ds-3"><img src="assets/images/shapes/donar.png" alt=""></span>
            <span class="ds-4 item-bounce"><img src="assets/images/shapes/triple.png" alt=""></span>
            <span class="ds-5"><img src="assets/images/shapes/scatter.png" alt=""></span>
        </div>
        <div class="container">
            <div class="common-title-area padding-50 wow fadeInLeft">
                <h3>food items</h3>
                <h2>popular <span>menu</span> </h2>
            </div>
            <!-- menu-nav-wrapper -->
            <div class="menu-nav-wrapper">
                <div class="container">
                    <div class="row">
                        <!-- tab-nav-items -->
                        <ul class="nav" id="nav-tab" role="tablist">
                            <!-- menu-nav-1 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link active" id="pizza2-tab" data-bs-toggle="tab"
                                    data-bs-target="#pizza2-tab-pane" role="tab" aria-controls="pizza2-tab-pane"
                                    aria-selected="true">
                                    <div class="single-menu-nav text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/pizza.png" alt="">
                                        </div>
                                        <h6>pizza</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>

                                    </div>
                                </div>
                            </li>

                            <!-- menu-nav-2 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="burger2-tab" data-bs-toggle="tab"
                                    data-bs-target="#burger2-tab-pane" role="tab" aria-controls="burger2-tab-pane"
                                    aria-selected="false">
                                    <div class="single-menu-nav text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/burger.png" alt="">
                                        </div>
                                        <h6>burger</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>
                                </div>
                            </li>

                            <!-- menu-nav-3 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="chicken2-tab" data-bs-toggle="tab"
                                    data-bs-target="#chicken2-tab-pane" role="tab" aria-controls="chicken2-tab-pane"
                                    aria-selected="false">
                                    <div class="single-menu-nav text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/chicken.png" alt="">
                                        </div>
                                        <h6>chicken</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>
                                </div>
                            </li>

                            <!-- menu-nav-4 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="drinks2-tab" data-bs-toggle="tab"
                                    data-bs-target="#drinks2-tab-pane" role="tab" aria-controls="drinks2-tab-pane"
                                    aria-selected="false">
                                    <div class="single-menu-nav text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/drinks.png" alt="">
                                        </div>
                                        <h6>drinks</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>
                                </div>
                            </li>

                            <!-- menu-nav-5 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="drinks3-tab" data-bs-toggle="tab"
                                    data-bs-target="#drinks3-tab-pane" role="tab" aria-controls="drinks3-tab-pane"
                                    aria-selected="false">
                                    <div class="single-menu-nav text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/drinks2.png" alt="">
                                        </div>
                                        <h6>drinks</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>
                                </div>
                            </li>

                            <!-- menu-nav-6 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="combo-tab" data-bs-toggle="tab"
                                    data-bs-target="#combo-tab-pane" role="tab" aria-controls="combo-tab-pane"
                                    aria-selected="false">
                                    <div class="single-menu-nav text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/combo.png" alt="">
                                        </div>
                                        <h6>combo menu</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- menu-items-wrapper -->
            <div class="tab-content" id="nav-tabContent">
                <!-- menu-items-1 -->
                <div class="tab-pane fade show active" id="pizza2-tab-pane" role="tabpanel" aria-labelledby="pizza2-tab"
                    tabindex="0">
                    <div class="menu-items-wrapper padding-50">
                        <div class="menu-i-shapes">
                            <span class="mis-3"><img src="assets/images/shapes/7.png" alt=""></span>
                        </div>
                        <!-- first-row -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Margherita</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Tomato</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Marinara</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                        <span class="del"><del>$15.00</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- second-row -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz4.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Frutti Di Mare</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Americana</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz6.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Pizza Al Pesto</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                        <span class="del"><del>$15.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- menu-items-2 -->
                <div class="tab-pane fade" id="burger2-tab-pane" role="tabpanel" aria-labelledby="burger2-tab"
                    tabindex="0">
                    <div class="menu-items-wrapper padding-50">
                        <div class="menu-i-shapes">
                            <span class="mis-3"><img src="assets/images/shapes/7.png" alt=""></span>
                        </div>
                        <!-- first-row -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Garlic Burger</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">naga burger</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html"> beef burger</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                        <span class="del"><del>$15.00</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- second-row -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br4.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Crispy Burger </a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">chicken burger</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br6.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">garlic burger</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                        <span class="del"><del>$15.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- menu-items-3 -->
                <div class="tab-pane fade" id="chicken2-tab-pane" role="tabpanel" aria-labelledby="chicken2-tab"
                    tabindex="0">
                    <div class="menu-items-wrapper padding-50">
                        <div class="menu-i-shapes">
                            <span class="mis-3"><img src="assets/images/shapes/7.png" alt=""></span>
                        </div>
                        <!-- first-row -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/mi-1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Garlic Burger</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/mi-2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Thai Chicken</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/mi-3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">bbq</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                        <span class="del"><del>$15.00</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- second-row -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/mi-4.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Mutton </a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/mi-5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Thai Chicken</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/mi-6.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">bbq</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                        <span class="del"><del>$15.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- menu-items-4 -->
                <div class="tab-pane fade" id="drinks2-tab-pane" role="tabpanel" aria-labelledby="drinks2-tab"
                    tabindex="0">
                    <div class="menu-items-wrapper padding-50">
                        <div class="menu-i-shapes">
                            <span class="mis-3"><img src="assets/images/shapes/7.png" alt=""></span>
                        </div>
                        <!-- first-row -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/img/dr1.jpg" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Prune Juice</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/img/dr2.jpg" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Guava Juice</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/img/dr3.jpg" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Prune Juice</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                        <span class="del"><del>$15.00</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- second-row -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/img/dr4.jpg" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Lemonade</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/img/dr5.jpg" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Vegetable</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/img/dr6.jpg" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Sugarcane</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                        <span class="del"><del>$15.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- menu-items-5 -->
                <div class="tab-pane fade" id="drinks3-tab-pane" role="tabpanel" aria-labelledby="drinks3-tab"
                    tabindex="0">
                    <div class="menu-items-wrapper padding-50">
                        <div class="menu-i-shapes">
                            <span class="mis-3"><img src="assets/images/shapes/7.png" alt=""></span>
                        </div>
                        <!-- first-row -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/img/dr6.jpg" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Vegetabler</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/img/dr5.jpg" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Sugarcane</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/img/dr4.jpg" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Prune Juice</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                        <span class="del"><del>$15.00</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- second-row -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/img/dr3.jpg" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Lingonberry </a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/img/dr2.jpg" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Lemonade</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/img/dr1.jpg" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html"> Guava Juice</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                        <span class="del"><del>$15.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- menu-items-6 -->
                <div class="tab-pane fade" id="combo-tab-pane" role="tabpanel" aria-labelledby="combo-tab" tabindex="0">
                    <div class="menu-items-wrapper padding-50">
                        <div class="menu-i-shapes">
                            <span class="mis-3"><img src="assets/images/shapes/7.png" alt=""></span>
                        </div>
                        <!-- first-row -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/mi-1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Garlic Burger</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/mi-2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Thai Chicken</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/mi-3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">bbq</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                        <span class="del"><del>$15.00</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- second-row -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/mi-4.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Mutton </a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/mi-5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html">Thai Chicken</a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between ">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/mi-6.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h5><a href="single-dish.html"> bbq </a></h5>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                        <span class="del"><del>$15.00</del></span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- best quality -->
    <section class="best-quality padding-top-60">
        <div class="best-shapes d-none d-xl-block">
            <span class="ds-1"><img src="assets/images/img/31.png" alt=""></span>
            <span class="ds-2"><img src="assets/images/img/37.png" alt=""></span>
        </div>
        <div class="container">
            <div class="common-title-area text-center padding-50 wow fadeInUp">
                <h3>Why Choose US?</h3>
                <h2>Best Quality <span>item<br>
                        Ingredients</span> </h2>
            </div>
            <div class="row align-items-md-center align-items-lg-start">
                <div class="col-lg-3 col-md-3 col-sm-12 text-center text-md-start margin-bottom-60 wow fadeInLeft">
                    <div class="ingredients margin-bottom-80">
                        <h5>Moist Sour Cream Bread</h5>
                        <p>Shrimp, Squid, Pineapple</p>
                        <h6>Price: $5.00</h6>
                        <img src="assets/images/shapes/bshape1.png" alt="" class="ind-shape1 d-none d-lg-block">
                    </div>
                    <div class="ingredients">
                        <h5>ground beef</h5>
                        <p>Mutton, Squid, Chicken</p>
                        <h6>Price: $5.00</h6>
                        <img src="assets/images/shapes/bshape1.png" alt="" class="ind-shape2 d-none d-lg-block">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 margin-bottom-60 wow fadeInUp">
                    <div class="ingredients-img">
                        <img src="assets/images/img/dblburger.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 wow fadeInRight">
                    <div class="ingredients text-center text-md-right margin-bottom-80">
                        <h5>green Vegetable</h5>
                        <p>Tomato, Cucumber, Onion, Egg</p>
                        <h6>Price: $5.00</h6>
                        <img src="assets/images/shapes/bshape2.png" alt="" class="ind-shape3 d-none d-lg-block">
                    </div>
                    <div class="ingredients text-center text-md-right ">
                        <h5>artisen bunas</h5>
                        <p>Mutton, Squid, Chicken</p>
                        <h6>Price: $5.00</h6>
                        <img src="assets/images/shapes/bshape2.png" alt="" class="ind-shape4 d-none d-lg-block">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- delivery-area -->
    <section class="delivery-area delivery-area2 padding-top-115 padding-bottom-100">
        <div class="del-shapes">
            <span class="ds-1"><img src="assets/images/shapes/14.png" alt=""></span>
            <span class="ds-2"><img src="assets/images/shapes/15.png" alt=""></span>
        </div>
        <div class="container">
            <div class="common-title margin-bottom-60 text-center wow fadeInUp">
                <h4 class="margin-bottom-30">Super Delicious Beef <span>Burger<br>
                        $25.00</span> </h4>
                <a href="shopping-cart.html" class="btn">order now</a>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-lg-6 align-self-lg-center col-md-12 margin-bottom-20 wow fadeInLeft">
                    <div class="delivery-left2">
                        <img src="assets/images/gallery/bike.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInRight">
                    <div class="delivery-right">
                        <div class="common-title-area padding-bottom-40">
                            <h3>delivery</h3>
                            <h2 class="margin-bottom-30">A Moments of
                                Delivered <span>
                                    On Right
                                    Time & Place
                                </span> </h2>
                            <p>Food Khan is a restaurant, bar and coffee roastery located on a busy corner site in
                                Farringdon's Exmouth Market. With glazed frontage on two sides of the building,
                                overlooking
                                the market and a bustling London inteon.</p>
                            <div class="order-box d-flex align-items-end">
                                <span class="order-img"><img src="assets/images/icons/1.png" alt=""></span>
                                <div class="order-content">
                                    <p>delivery order num.</p> <span>123-59794069</span>
                                </div>
                                <a href="shopping-cart.html" class="btn">order now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- popular-dishes -->
    <section class="popular-dishes-area home2-popular-dish padding-top-110 padding-bottom-100">
        <div class="container">
            <nav class="popular-tab-nav d-flex flex-wrap justify-content-between align-items-center">
                <div class="common-title-area margin-bottom-30 wow fadeInLeft">
                    <h3>food items</h3>
                    <h2>popular <span>dishes</span> </h2>
                </div>

                <ul class="nav padding-bottom-30" id="popularDishesTab2" role="tablist">
                    <li class="nav-item" role="presentation">
                        <div class="nav-link menu-text active" id="all-items-tab2" data-bs-toggle="tab"
                            data-bs-target="#all-items-tab-pane2" role="tab" aria-controls="all-items-tab-pane2"
                            aria-selected="true">
                            all items</div>
                    </li>
                    <li class="nav-item menu-text" role="presentation">
                        <div class="nav-link" id="pizza3-tab" data-bs-toggle="tab" data-bs-target="#pizza3-tab-pane"
                            role="tab" aria-controls="pizza3-tab-pane" aria-selected="false">pizza</div>
                    </li>
                    <li class="nav-item menu-text" role="presentation">
                        <div class="nav-link" id="burger3-tab" data-bs-toggle="tab" data-bs-target="#burger3-tab-pane"
                            role="tab" aria-controls="burger3-tab-pane" aria-selected="false">burger</div>
                    </li>
                    <li class="nav-item menu-text" role="presentation">
                        <div class="nav-link" id="chicken3-tab" data-bs-toggle="tab" data-bs-target="#chicken3-tab-pane"
                            role="tab" aria-controls="chicken3-tab-pane" aria-selected="false">chicken</div>
                    </li>
                    <li class="nav-item menu-text" role="presentation">
                        <div class="nav-link" id="drinks4-tab" data-bs-toggle="tab" data-bs-target="#drinks4-tab-pane"
                            role="tab" aria-controls="drinks4-tab-pane" aria-selected="false">drinks</div>
                    </li>
                </ul>
            </nav>

            <!-- main-content -->
            <div class="tab-content" id="myTabContent">
                <!-- all items -->
                <div class="tab-pane fade show active" id="all-items-tab-pane2" role="tabpanel"
                    aria-labelledby="all-items-tab2" tabindex="0">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd1.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">Burger Patties
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge">hot</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd2.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Vegetable Pizza
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge"></span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd3.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Chicken fry Recipe
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price badge-color">price :$15.00</span>

                                </div>
                                <span class="badge badge-bg-color">new</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd4.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">Chickpea Soup
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>
                                </div>
                                <span class="badge">sale</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd5.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">Burger Patties
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>
                                </div>
                                <span class="badge">hot</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd6.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Vegetable Pizza
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge"></span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- pizza -->
                <div class="tab-pane fade" id="pizza3-tab-pane" role="tabpanel" aria-labelledby="pizza3-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd5.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Vegetable Pizza
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge"></span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd5.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">Burger Patties
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge">hot</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd5.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Chicken fry Recipe
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price badge-color">price :$15.00</span>

                                </div>
                                <span class="badge badge-bg-color">new</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd5.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">Chickpea Soup
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>
                                </div>
                                <span class="badge">sale</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd5.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">Burger Patties
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>
                                </div>
                                <span class="badge">hot</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd5.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Vegetable Pizza
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge"></span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- burger -->
                <div class="tab-pane fade" id="burger3-tab-pane" role="tabpanel" aria-labelledby="burger3-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd1.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Chicken fry Recipe
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price badge-color">price :$15.00</span>

                                </div>
                                <span class="badge badge-bg-color">new</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd1.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">Burger Patties
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge">hot</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd1.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Vegetable Pizza
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge"></span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd1.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">Chickpea Soup
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>
                                </div>
                                <span class="badge">sale</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd1.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">Burger Patties
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>
                                </div>
                                <span class="badge">hot</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd1.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Vegetable Pizza
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge"></span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- chicken -->
                <div class="tab-pane fade" id="chicken3-tab-pane" role="tabpanel" aria-labelledby="chicken3-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd3.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">Chickpea Soup
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>
                                </div>
                                <span class="badge">sale</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd3.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">Burger Patties
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge">hot</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd3.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Vegetable Pizza
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge"></span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd3.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Chicken fry Recipe
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price badge-color">price :$15.00</span>

                                </div>
                                <span class="badge badge-bg-color">new</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd3.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">Burger Patties
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>
                                </div>
                                <span class="badge">hot</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd3.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Vegetable Pizza
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge"></span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- drinks -->
                <div class="tab-pane fade" id="drinks4-tab-pane" role="tabpanel" aria-labelledby="drinks4-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd3.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Vegetable Pizza
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge"></span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd3.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">Burger Patties
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge">hot</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd3.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Chicken fry Recipe
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price badge-color">price :$15.00</span>

                                </div>
                                <span class="badge badge-bg-color">new</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd3.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">Chickpea Soup
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>
                                </div>
                                <span class="badge">sale</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd3.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">Burger Patties
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>
                                </div>
                                <span class="badge">hot</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="home2-single-dishes single-dishes  d-flex justify-content-between">
                                <div class="dish-img">
                                    <img src="assets/images/menu-item/pd3.png" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h6> <a href="single-dish.html">Vegetable Pizza
                                        </a></h6>
                                    <p>It is a long established fact that a reader BBQ.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge"></span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- serve passion -->
    <div class="serve-passion padding-top-100 padding-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 margin-bottom-60 wow fadeInLeft">
                    <div class="serve-left">
                        <div class="ss-shapes">
                            <span class="ss1 item-bounce"><img src="assets/images/shapes/14.png" alt=""></span>
                            <span class="ss2 item-animateTwo"><img src="assets/images/shapes/6.png" alt=""></span>
                            <span class="ss3"><img src="assets/images/shapes/34.png" alt=""></span>
                        </div>
                        <img class="margin-bottom-20" src="assets/images/gallery/chef.jpg" alt="">
                        <h5>Jane Mila Jon</h5>
                        <p>Chef Officer</p>
                        <div class="inner-counter">
                            <div class="about-gallery-4 text-center">
                                <img class="img" src="assets/images/icons/3.png" alt="">
                                <div class="items counter">2000</div>
                                <p>food item</p>
                                <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="serve-right">
                        <div class="common-title-area  padding-bottom-60">
                            <h3>our chef</h3>
                            <h2>we serve <span>passion</span> </h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="assets/images/menu-item/pd1.png" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5><a href="single-dish.html">Burger Patties
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price">price :$15.00</span>

                                    </div>
                                    <span class="badge">hot</span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="assets/images/menu-item/pd2.png" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5> <a href="single-dish.html">Vegetable Pizza
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price">price :$15.00</span>

                                    </div>
                                    <span class="badge"></span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial -->
    <section class="testimonial testimonial2 padding-bottom-120 padding-top-110">
        <div class="container">
            <div class="testi-shapes">
                <span class="ts-1"><img src="assets/images/shapes/triple.png" alt=""></span>
                <span class="ts-2 item-bounce"><img src="assets/images/shapes/35.png" alt=""></span>
                <span class="ts-3 item-animateTwo"><img src="assets/images/shapes/26.png" alt=""></span>
            </div>
            <div class="common-title-area text-center padding-bottom-50 wow fadeInUp">
                <h3>testimonial</h3>
                <h2>client <span>feedback</span></h2>
            </div>
            <div class="testimonial-active">
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-1.png" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-2.png" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-1.png" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-2.png" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-1.png" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-2.png" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- footer area -->
    <footer class="padding-top-120 padding-bottom-40 footer2">
        <div class="fo-shapes">
            <span class="fs-1 item-animateTwo"><img src="assets/images/shapes/capsicam.png" alt=""></span>
            <span class="fss-2"><img src="assets/images/shapes/fshape1.png" alt=""></span>
            <span class="fss-3"><img src="assets/images/shapes/41.png" alt=""></span>
            <span class="fss-4 item-bounce"><img src="assets/images/shapes/sauce.png" alt=""></span>
            <span class="fss-5 item-bounce"><img src="assets/images/shapes/scatter.png" alt=""></span>
            <span class="fss-6 item-animateTwo"><img src="assets/images/shapes/layer.png" alt=""></span>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row align-items-center justify-content-between padding-bottom-45">
                    <div class="col-lg-6 col-md-12">
                        <div class="f-title">
                            <h4>Our Weekly <span> Newsletter.</span></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <form action="#"
                            class="d-flex align-items-center justify-content-center justify-content-lg-between">
                            <div class="form2">
                                <span><i class="fas fa-envelope-open-text"></i></span>
                                <input type="text" placeholder="Enter email Address">
                                <button class="btn bttn" type="submit">subscribe</button>
                            </div>

                        </form>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="footer-bottom padding-top-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 margin-bottom-20 text-center text-md-start">
                        <div class="widget margin-bottom-30">
                            <h6>Titan Food Khan</h6>
                            <p>570 8th Ave,New York, NY 10018
                                United States</p>
                            <a href="#" class="f-link">View Google Map</a>
                        </div>
                        <div class="widget">
                            <h6>+88 01835-397607</h6>
                            <p>11.00 AM – 11.00 PM</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 margin-bottom-20 text-center text-md-start">
                        <div class="widget margin-bottom-30">
                            <h6>Cardio Food Khan</h6>
                            <p>Dogfood och Sliders foodtruck.
                                Under Om oss kan ni läsa</p>
                            <a href="#" class="f-link">View Google Map</a>
                        </div>
                        <div class="widget">
                            <h6>+88 01835-397607</h6>
                            <p>11.00 AM – 11.00 PM</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 margin-bottom-20 text-center text-md-start">
                        <div class="widget margin-bottom-30">
                            <h6>Maldo Food Khan</h6>
                            <p><span>monday-friday: 8am - 4pm</span>
                                <br><span>saturday: 9am - 5pm</span>
                            </p>

                            <a href="#" class="f-link">View Google Map</a>
                        </div>
                        <div class="widget">
                            <h6>+88 01835-397607</h6>
                            <p>11.00 AM – 11.00 PM</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 margin-bottom-20 text-center text-md-start">
                        <div class="widget">
                            <h6>Book Your Table</h6>
                            <div class="newsletter newsletter-2">
                                <form action="#">
                                    <select>
                                        <option value="4"> 4 people</option>
                                        <option value="6">6 people</option>
                                        <option value="8">8 people</option>
                                        <option value="10">10 people</option>
                                    </select>
                                    <input type="date">
                                    <select>
                                        <option value="4"> 7:30pm</option>
                                        <option value="6">8:30pm</option>
                                        <option value="8">9:30pm</option>
                                        <option value="10">10:30pm</option>
                                    </select>
                                    <button type="submit" class="btn">find table</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 justify-content-self-center">
                        <div class="copyright-content">
                            <div class="f-logo">
                                <a href="index.html"> <img src="assets/images/logo/logo2.png" alt=""></a>
                            </div>
                            <div class="footer-nav text-center">
                                <nav>
                                    <ul class="main-menu main-menu2">
                                        <li><a href="index.html">home</a></li>
                                        <li><a href="menu.html">menu</a></li>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="index.html">page</a></li>
                                        <li><a href="contact.html">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <p>Copyright © 2021 <a href="index.html">khadyo</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ToTop Button -->
    <button class="scrollup"><i class="fas fa-angle-up"></i></button>

    <!-- Javascript Files -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery.meanmenu.min.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/counterup.min.js"></script>
    <script src="assets/js/vendor/countdown.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/easing.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>