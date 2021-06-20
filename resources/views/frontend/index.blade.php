<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.softtechitltd.com/khadyo/khadyo/# by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jun 2021 10:27:27 GMT -->
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Page Title -->
    <title>Lacasa</title>
    <!-- Favicon Icon -->
{{--    <link rel="shortcut icon" href="favicon.png">--}}
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('assets2/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/font-awsome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/style.css')}}">
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
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 d-flex flex-wrap justify-content-between">
                    <div class="contact-box">
                        <span> <a href="#"><i class="fas fa-phone-square-alt"></i> +33-12345678</a> </span>
                        <span> <a href="#"><i class="fas fa-envelope-open-text"></i> support@lacasadespapilles.com</a></span>
                    </div>
                    <div class="social-box">
                        <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                        <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                        <span><a href="#"><i class="fab fa-linkedin-in"></i></a></span>
                        <span><a href="#"><i class="fab fa-instagram"></i></a></span>

                        <span style="height: 80% !important;width: 2px!important;background-color: #ffffff !important;"></span>
                        <span><a href="#"><i class="fas fa-shopping-basket"></i></a></span>
                        <span><a href="#"><i class="fas fa-heart"></i></a></span>
                        <span><a href="#"><i class="fas fa-user"></i></a></span>
                        <span><a href="#" class="btn btn-sm" style="background-color: #ffffff !important; color: #cc3333 !important;padding: 0px 15px !important; font-size: 12px !important;">login</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-bottom -->
    <div class="header-bottom margin-top-20">
        <div class="container position-relative">
            <div class="row d-flex align-items-center">
                <div class="col-lg-2 col-md-2 col-sm-2 col-3">
                    <div class="logo">
{{--                        <a href="#"> <img src="assets2/images/logo_main.png" alt="logo"></a>--}}
                    </div>
                </div>
                <div class="col-lg-10 mx-auto d-none d-lg-block">
                    <nav id="mobile-menu">
                        <ul class="main-menu">
                            <li><a href="#">home</a></li>
                            <li><a href="#">À propos de nous</a></li>
                            <li><a href="#">Catégories <span><i class="fas fa-angle-down"></i></span></a>
                                <ul class="submenu">
                                    <li><a href="#">Pizza</a></li>
                                    <li><a href="#">Burger</a></li>
                                    <li><a href="#">Pâtes</a></li>
                                    <li><a href="#">Boissons non alcoolisées</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blogues <span><i class="fas fa-angle-down"></i></span></a>
                                <ul class="submenu">
                                    <li><a href="#">blog 1</a></li>
                                    <li><a href="#">blog 2</a></li>
                                    <li><a href="#">blog 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Nous contacter</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- mobile-menu -->
            <div class="mobile-menu"></div>
        </div>
    </div>
</header>

<!-- banner-area -->
<section class="banner-area">
    <img src="{{asset('assets2/images/lacasabg2.jpg')}}" class="img-fluid">
</section>
<section class="delivery-area padding-top-115 padding-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-lg-center col-md-12 margin-bottom-20 wow fadeInLeft">
                <div class="delivery-left">
                    <img src="assets2/images/lacasa_about.jpg" alt="" style="border-radius: 25px !important;">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 wow fadeInRight">
                <div class="delivery-right">
                    <div class="common-title-area padding-bottom-40">
                        <h3>À propos de nous</h3>
                        <h2>La casa des papilles <span>
                                    Meilleur restaurant français
                                </span> </h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--popula-menu-area -->


<!-- popular-dishes -->
<section class="popular-dishes-area padding-top-110">
    <div class="container">
        <nav class="popular-tab-nav d-flex flex-wrap justify-content-between align-items-center">
            <div class="common-title-area  padding-bottom-30 wow fadeInLeft">
                <h3>La casa des papilles</h3>
                <h2>articles <span>populaires</span> </h2>
            </div>
            <div class="nav padding-bottom-30 wow fadeInRight" id="nav-tab-1" role="tablist">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                   aria-controls="home" aria-selected="true">tous les articles</a>
                <a class="nav-link" id="nav-tab-home" data-toggle="tab" href="#tab-1" role="tab"
                   aria-controls="tab-1" aria-selected="false">pizza</a>

                <a class="nav-link" id="nav-tab-11" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2"
                   aria-selected="false">burger</a>

                <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3"
                   aria-selected="false">Poulette</a>

                <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4"
                   aria-selected="false">boissons</a>
            </div>
        </nav>
        <!-- main-content -->
        <div class="tab-content" id="nav-tabContent-1">

            <!-- all items -->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd1.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Garlic Burger
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>
                            </div>
                            <span class="badge">hot</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd2.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-dish.html">Vegetable Pizza
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd3.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-dish.html">Chicken Fry
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price badge-color">price :€15.00</span>
                                <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                            </div>
                            <span class="badge badge-bg-color">new</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd4.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Chickpea Soup
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>
                            </div>
                            <span class="badge">sale</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd5.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Garlic Burger
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>
                            </div>
                            <span class="badge">hot</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd6.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-dish.html">Vegetable Pizza
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd7.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Chicken Fry
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="badge-color price">price :€15.00</span>
                                <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd8.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Chickpea Soup
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge">sale</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- pizza -->
            <div class="tab-pane fade" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd5.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Margherita
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge">hot</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd5.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-dish.html">Vegetable Pizza
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd5.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-dish.html">Marinara
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price badge-color">price :€15.00</span>
                                <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                            </div>
                            <span class="badge badge-bg-color">new</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd5.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Frutti Di Mare
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>
                            </div>
                            <span class="badge">sale</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd5.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Americana
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>
                            </div>
                            <span class="badge">hot</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd5.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-dish.html">Vegetable Pizza
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd5.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Pizza Al Pesto
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="badge-color price">price :€15.00</span>
                                <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd5.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Americana
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge">sale</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- burger -->
            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd1.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Garlic Burger
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge">hot</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd1.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-dish.html">Vegetable Pizza
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd1.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-dish.html">Chicken Fry
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price badge-color">price :€15.00</span>
                                <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                            </div>
                            <span class="badge badge-bg-color">new</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd1.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Chickpea Soup
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>
                            </div>
                            <span class="badge">sale</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd1.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Garlic Burger
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>
                            </div>
                            <span class="badge">hot</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd1.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-dish.html">Vegetable Pizza
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd1.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Chicken Fry
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="badge-color price">price :€15.00</span>
                                <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd1.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Chickpea Soup
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge">sale</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- chicken -->
            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd8.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Garlic Burger
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge">hot</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd8.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-dish.html">Vegetable Pizza
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd8.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-dish.html">Chicken Fry
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price badge-color">price :€15.00</span>
                                <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                            </div>
                            <span class="badge badge-bg-color">new</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd8.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Chickpea Soup
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>
                            </div>
                            <span class="badge">sale</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd8.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Garlic Burger
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>
                            </div>
                            <span class="badge">hot</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd8.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-dish.html">Vegetable Pizza
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd8.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Chicken Fry
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="badge-color price">price :€15.00</span>
                                <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd8.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Chickpea Soup
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge">sale</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- drinks -->
            <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd2.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Garlic Burger
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge">hot</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd2.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-dish.html">Vegetable Pizza
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd2.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-dish.html">Chicken Fry
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price badge-color">price :€15.00</span>
                                <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                            </div>
                            <span class="badge badge-bg-color">new</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd2.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Chickpea Soup
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>
                            </div>
                            <span class="badge">sale</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd2.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Garlic Burger
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>
                            </div>
                            <span class="badge">hot</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd2.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5> <a href="single-dish.html">Vegetable Pizza
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd2.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Chicken Fry
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="badge-color price">price :€15.00</span>
                                <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                            </div>
                            <span class="badge"></span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                                <img src="assets2/images/menu-item/pd2.png" style="width: inherit;" alt="">
                            </div>
                            <div class="dish-content">
                                <h5><a href="single-dish.html">Chickpea Soup
                                    </a></h5>
                                <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                <span class="price">price :€15.00</span>

                            </div>
                            <span class="badge">sale</span>
                            <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                <span>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>


<!-- testimonial -->
<section class="testimonial padding-bottom-120 padding-top-110">
    <div class="container" style="background-color: #A30F0E; border-radius: 0px 50px">
        <div class="common-title-area text-center padding-bottom-50 wow fadeInUp">
            <h3 style="color: #ffffff !important;">La casa des papilles</h3>
            <h2 style="color: #ffffff !important;">clients
                <span style="color: #ffffff !important;">Commentaires des </span></h2>
        </div>
        <div class="testimonial-active">
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="testi-img">
                        <img src="assets2/images/cl1.jpg" alt="" style="border-radius: 50px !important;">
                    </div>
                    <div class="testi-meta">
                        <h6 style="color: #A30F0E !important;">Nom du client</h6>
                        <p style="color: #A30F0E !important;">XYZ Company</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                    a type specimen book.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="testi-img">
                        <img src="assets2/images/cl2.jpg" alt="" style="border-radius: 50px !important;">
                    </div>
                    <div class="testi-meta">
                        <h6 style="color: #A30F0E !important;">Nom du client</h6>
                        <p style="color: #A30F0E !important;">XYZ Company</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                    a type specimen book.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="testi-img">
                        <img src="assets2/images/cl1.jpg" alt="" style="border-radius: 50px !important;">
                    </div>
                    <div class="testi-meta">
                        <h6 style="color: #A30F0E !important;">Nom du client</h6>
                        <p style="color: #A30F0E !important;">XYZ Company</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                    a type specimen book.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="testi-img">
                        <img src="assets2/images/cl2.jpg" alt="" style="border-radius: 50px !important;">
                    </div>
                    <div class="testi-meta">
                        <h6 style="color: #A30F0E !important;">Nom du client</h6>
                        <p style="color: #A30F0E !important;">XYZ Company</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                    a type specimen book.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="testi-img">
                        <img src="assets2/images/cl1.jpg" alt="" style="border-radius: 50px !important;">
                    </div>
                    <div class="testi-meta">
                        <h6 style="color: #A30F0E !important;">Nom du client</h6>
                        <p style="color: #A30F0E !important;">XYZ Company</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                    a type specimen book.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="testi-img">
                        <img src="assets2/images/cl2.jpg" alt="" style="border-radius: 50px !important;">
                    </div>
                    <div class="testi-meta">
                        <h6 style="color: #A30F0E !important;">Nom du client</h6>
                        <p style="color: #A30F0E !important;">XYZ Company</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                    a type specimen book.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="testi-img">
                        <img src="assets2/images/cl1.jpg" alt="" style="border-radius: 50px !important;">
                    </div>
                    <div class="testi-meta">
                        <h6 style="color: #A30F0E !important;">Nom du client</h6>
                        <p style="color: #A30F0E !important;">XYZ Company</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                    a type specimen book.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="testi-img">
                        <img src="assets2/images/cl2.jpg" alt="" style="border-radius: 50px !important;">
                    </div>
                    <div class="testi-meta">
                        <h6 style="color: #A30F0E !important;">Nom du client</h6>
                        <p style="color: #A30F0E !important;">XYZ Company</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                    a type specimen book.</p>
            </div>
        </div>
    </div>
</section>


<!-- delivery-area -->
<section class="delivery-area padding-top-115 padding-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-lg-center col-md-12 margin-bottom-20 wow fadeInLeft">
                <div class="delivery-left">
                    <img src="assets2/images/bg/delivery-img.png" alt="" style="border-radius: 25px">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 wow fadeInRight">
                <div class="delivery-right">
                    <div class="common-title-area padding-bottom-40">
                        <h3>livraison</h3>
                        <h2>Un moment de livraison<span>
                                    Au bon moment et au bon endroit
                                </span> </h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled
                            it to make a type specimen book. It has survived not only five centuries</p>
                        <div class="order-box d-flex align-items-end">
                            <span class="order-img"><img src="assets2/images/icons/1.png" alt=""></span>
                            <div class="order-content">
                                <p>N ° de commande.
                                </p> <span>123-59794069</span>
                            </div>
                            <a href="#" class="btn btn-sm">order now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blog-area -->
<section class="blog-area padding-top-110 padding-bottom-120">

    <div class="container">
        <div class="common-title-area text-center padding-bottom-60 wow fadeInUp">
            <h3>La casa des papilles</h3>
            <h2>Blogues</h2>
        </div>
        <div class="blog-slider-active">
            <div class="single-blog" style="background-color: #A30F0E !important; border-radius: 25px !important;">
                <div class="blog-img">
                    <a href="#"> <img src="assets2/images/blog/b-1.jpg" alt=""></a>
                    <div class="b-badge">
                        <span class="date"><a href="#">02</a></span><br>
                        <span class="month"><a href="#">dec</a></span>
                    </div>
                </div>
                <div class="blog-meta d-flex justify-content-center">
                    <h6 class="text-center">La casa des papilles Blog</h6>
                </div>
                <div class="text-center text-white">
                    <small><i class="fa fa-user-check"></i> Admin</small>
                </div>
            </div>
            <div class="single-blog" style="background-color: #A30F0E !important; border-radius: 25px !important;">
                <div class="blog-img">
                    <a href="#"> <img src="assets2/images/blog/b-1.jpg" alt=""></a>
                    <div class="b-badge">
                        <span class="date"><a href="#">02</a></span><br>
                        <span class="month"><a href="#">dec</a></span>
                    </div>
                </div>
                <div class="blog-meta d-flex justify-content-center">
                    <h6 class="text-center">La casa des papilles Blog</h6>
                </div>
                <div class="text-center text-white">
                    <small><i class="fa fa-user-check"></i> Admin</small>
                </div>
            </div>
            <div class="single-blog" style="background-color: #A30F0E !important; border-radius: 25px !important;">
                <div class="blog-img">
                    <a href="#"> <img src="assets2/images/blog/b-1.jpg" alt=""></a>
                    <div class="b-badge">
                        <span class="date"><a href="#">02</a></span><br>
                        <span class="month"><a href="#">dec</a></span>
                    </div>
                </div>
                <div class="blog-meta d-flex justify-content-center">
                    <h6 class="text-center">La casa des papilles Blog</h6>
                </div>
                <div class="text-center text-white">
                    <small><i class="fa fa-user-check"></i> Admin</small>
                </div>
            </div>
            <div class="single-blog" style="background-color: #A30F0E !important; border-radius: 25px !important;">
                <div class="blog-img">
                    <a href="#"> <img src="assets2/images/blog/b-1.jpg" alt=""></a>
                    <div class="b-badge">
                        <span class="date"><a href="#">02</a></span><br>
                        <span class="month"><a href="#">dec</a></span>
                    </div>
                </div>
                <div class="blog-meta d-flex justify-content-center">
                    <h6 class="text-center">La casa des papilles Blog</h6>
                </div>
                <div class="text-center text-white">
                    <small><i class="fa fa-user-check"></i> Admin</small>
                </div>
            </div>
            <div class="single-blog" style="background-color: #A30F0E !important; border-radius: 25px !important;">
                <div class="blog-img">
                    <a href="#"> <img src="assets2/images/blog/b-1.jpg" alt=""></a>
                    <div class="b-badge">
                        <span class="date"><a href="#">02</a></span><br>
                        <span class="month"><a href="#">dec</a></span>
                    </div>
                </div>
                <div class="blog-meta d-flex justify-content-center">
                    <h6 class="text-center">La casa des papilles Blog</h6>
                </div>
                <div class="text-center text-white">
                    <small><i class="fa fa-user-check"></i> Admin</small>
                </div>
            </div>
            <div class="single-blog" style="background-color: #A30F0E !important; border-radius: 25px !important;">
                <div class="blog-img">
                    <a href="#"> <img src="assets2/images/blog/b-1.jpg" alt=""></a>
                    <div class="b-badge">
                        <span class="date"><a href="#">02</a></span><br>
                        <span class="month"><a href="#">dec</a></span>
                    </div>
                </div>
                <div class="blog-meta d-flex justify-content-center">
                    <h6 class="text-center">La casa des papilles Blog</h6>
                </div>
                <div class="text-center text-white">
                    <small><i class="fa fa-user-check"></i> Admin</small>
                </div>
            </div>
            <div class="single-blog" style="background-color: #A30F0E !important; border-radius: 25px !important;">
                <div class="blog-img">
                    <a href="#"> <img src="assets2/images/blog/b-1.jpg" alt=""></a>
                    <div class="b-badge">
                        <span class="date"><a href="#">02</a></span><br>
                        <span class="month"><a href="#">dec</a></span>
                    </div>
                </div>
                <div class="blog-meta d-flex justify-content-center">
                    <h6 class="text-center">La casa des papilles Blog</h6>
                </div>
                <div class="text-center text-white">
                    <small><i class="fa fa-user-check"></i> Admin</small>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- footer area -->
<footer class="padding-top-40 padding-bottom-40">
    <div class="footer-top d-none d-md-block">
        <div class="container">
            <div class="row align-items-center justify-content-between padding-bottom-25">
                <div class="col-lg-3 col-md-3">
                    <div class="f-logo">
                        <a href="#"> <img src="assets2/images/logo_main.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="widget">
                        <h6>address</h6>
                        <p style="color: #ffffff">570 8th Ave,New York, NY 10018 United States</p>
                        <h6>email</h6>
                        <p style="color: #ffffff">info@lacasa.com</p>
                        <h6>Contacter</h6>
                        <p style="color: #ffffff">+33-123-123456</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="widget">
                        <h6 class="pb-2">Horaires d'ouvertures</h6>
                        <ul>
                            <li style="color: #ffffff">Mon 10am - 4pm</li>
                            <li style="color: #ffffff">Tue 10am - 4pm</li>
                            <li style="color: #ffffff">Wed 10am - 4pm</li>
                            <li style="color: #ffffff">Thu 10am - 4pm</li>
                            <li style="color: #ffffff">Fri 10am - 4pm</li>
                            <li style="color: #ffffff">Sat 10am - 4pm</li>
                            <li style="color: #ffffff">Sun 10am - 4pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="widget">
                        <h6>newsletter</h6>
                        <div class="newsletter d-flex">
                            <form action="#">
                                <input type="email" placeholder="Entrer votre Email" class="form-control" style="background-color: transparent !important; color: #ffffff !important;">
                                <button class="btn btn-sm btn-block my-1" style="background-color: #000000;padding: 0px 0px !important;">S'abonner</button>
                            </form>
                        </div>
                        <p class="mt-5" style="color: #ffffff !important;">Copyright &copy; 2021 La casa des papilles</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- ToTop Button -->
<button class="scrollup"><i class="fas fa-angle-up"></i></button>

<!-- Javascript Files -->
<script src="{{asset('assets2/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('assets2/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets2/js/vendor/jquery.meanmenu.min.js')}}"></script>
<script src="{{asset('assets2/js/vendor/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets2/js/vendor/slick.min.js')}}"></script>
<script src="{{asset('assets2/js/vendor/counterup.min.js')}}"></script>
<script src="{{asset('assets2/js/vendor/countdown.js')}}"></script>
<script src="{{asset('assets2/js/vendor/waypoints.min.js')}}"></script>
<script src="{{asset('assets2/js/vendor/jquery-ui.js')}}"></script>
<script src="{{asset('assets2/js/vendor/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets2/js/vendor/easing.min.js')}}"></script>
<script src="{{asset('assets2/js/vendor/wow.min.js')}}"></script>
<script src="{{asset('assets2/js/main.js')}}"></script>


</body>


<!-- Mirrored from html.softtechitltd.com/khadyo/khadyo/# by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jun 2021 10:28:05 GMT -->
</html>
