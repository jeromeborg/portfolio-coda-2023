<?php
require_once __DIR__ . '/src/require/common.php';

// PARTNERS
$is_active = true;
$response = $bdLink->prepare("SELECT name, logo, link FROM cl_partners WHERE is_active = :is_active");
$response->bindParam(':is_active', $is_active);
$response->execute();
$partners = $response->fetchAll();

//var_dump($partners);
?>
<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <!-- title -->
        <title>Le site du client</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="css/bootsnav.css">
        <link rel="stylesheet" type="text/css" href="css/font-icons.min.css">
        <link rel="stylesheet" type="text/css" href="css/theme-vendors.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    </head>
    <body>
        <div class="box-layout box-layout-md">
            <!-- start header -->
            <?php include 'include/header.php' ?>
            <!-- end header -->
            <!-- start slider section --> 
            <section class="p-0 main-slider wow animate__fadeIn">
                <div class="swiper-container white-move" data-slider-options='{ "loop": true, "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination-01", "clickable": true } }'>
                    <div class="swiper-wrapper">
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="row m-0">
                                <div class="col-12 col-md-6 d-flex align-items-center bg-deep-pink h-700px sm-h-250px">
                                    <div class="padding-twelve-all sm-padding-five-all w-100">
                                        <h6 class="title-large text-white-2 alt-font font-weight-600 letter-spacing-minus-3">we are creative thinkers</h6>
                                        <span class="text-large text-middle-line font-weight-300 margin-30px-top w-65 lg-w-75 md-w-90 text-white-2 d-block sm-margin-15px-top">we are creative design agency</span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 cover-background h-700px sm-h-400px" style="background-image:url('images/slider-05.jpg');"></div>
                            </div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="row m-0">
                                <div class="col-12 col-md-6 d-flex align-items-center bg-deep-pink h-700px sm-h-250px">
                                    <div class="padding-twelve-all sm-padding-five-all w-100">
                                        <h6 class="title-large text-white-2 alt-font font-weight-600 letter-spacing-minus-3">pixel perfect design</h6>
                                        <span class="text-large text-middle-line font-weight-300 margin-30px-top w-65 lg-w-75 md-w-90 text-white-2 d-block sm-margin-15px-top">we are creative design agency</span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 cover-background h-700px sm-h-400px" style="background-image:url('images/slider-06.jpg');">
                                </div>
                            </div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="row m-0">
                                <div class="col-12 col-md-6 d-flex align-items-center bg-deep-pink h-700px sm-h-250px">
                                    <div class="padding-twelve-all sm-padding-five-all w-100">
                                        <h6 class="title-large text-white-2 alt-font font-weight-600 letter-spacing-minus-3">we are design agency</h6>
                                        <span class="text-large text-middle-line font-weight-300 margin-30px-top w-65 lg-w-75 md-w-90 text-white-2 d-block sm-margin-15px-top">we are creative design agency</span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 cover-background h-700px sm-h-400px" style="background-image:url('images/slider-07.jpg');">
                                </div>
                            </div>
                        </div>
                        <!-- end slider item -->
                    </div>
                    <!-- start slider pagination -->
                    <div class="swiper-pagination swiper-pagination-01 swiper-pagination-square swiper-pagination-white"></div>
                    <!-- end slider pagination -->
                    <!-- start slider navigation -->
                    <!-- <div class="swiper-button-next light"><i class="ti-angle-right"></i></div>
                    <div class="swiper-button-prev light"><i class="ti-angle-left"></i></div> -->
                    <!-- end slider navigation -->
                </div>
            </section>
            <!-- end slider section -->
            <!-- start feature box section -->
            <section id="about" class="wow animate__fadeIn">
                <div class="container">
                    <div class="row justify-content-center">
                        <!-- start feature box item -->
                        <div class="col-12 col-lg-8 col-md-10 text-center margin-eight-bottom sm-margin-30px-bottom">
                            <span class="alt-font text-deep-pink text-medium margin-5px-bottom d-block">We are delivering beautiful digital products</span>
                            <h5 class="font-weight-300 text-extra-dark-gray m-0">We provide high quality and cost effective offshore web and software development services</h5>
                        </div>
                        <!-- end feature box item -->
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 justify-content-center">
                        <!-- start features box item -->
                        <div class="col text-center text-md-start sm-margin-40px-bottom wow animate__fadeInUp last-paragraph-no-margin">
                            <div class="row m-0">
                                <div class="col-12 col-lg-3 col-md-4 ps-0 sm-no-padding-right">
                                    <i class="icon-lightbulb icon-extra-medium text-medium-gray float-none float-md-left sm-margin-15px-bottom position-relative top-minus3"></i>
                                    <span class="separator-line-verticle-large margin-ten-right bg-deep-pink float-end align-top margin-two-top d-none d-md-inline-block"></span>
                                </div>
                                <div class="col-12 col-lg-9 col-md-8 md-no-padding-lr">
                                    <span class="text-medium margin-four-bottom text-extra-dark-gray alt-font d-block">Digital Branding</span>
                                    <p class="w-90 lg-w-100">We can help you find the precise message to clearly speak to who you are as a company.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col text-center text-md-start sm-margin-40px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                            <div class="row m-0">
                                <div class="col-12 col-lg-3 col-md-4 ps-0 sm-no-padding-right">
                                    <i class="icon-globe icon-extra-medium text-medium-gray float-none float-md-left sm-margin-15px-bottom position-relative top-minus3"></i>
                                    <span class="separator-line-verticle-large margin-ten-right bg-deep-pink float-end align-top margin-two-top d-none d-md-inline-block"></span>
                                </div>
                                <div class="col-12 col-lg-9 col-md-8 md-no-padding-lr">
                                    <h5 class="text-medium margin-four-bottom text-extra-dark-gray alt-font d-block">Web Interactive</h5>
                                    <p class="w-90 lg-w-100">Our websites look great, but each page has a clearly defined conversion goal.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col text-center text-md-start wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                            <div class="row m-0">
                                <div class="col-12 col-lg-3 col-md-4 ps-0 sm-no-padding-right">
                                    <i class="icon-paintbrush icon-extra-medium text-medium-gray float-none float-md-left sm-margin-15px-bottom position-relative top-minus3"></i>
                                    <span class="separator-line-verticle-large margin-ten-right bg-deep-pink float-end align-top margin-two-top d-none d-md-inline-block"></span>
                                </div>
                                <div class="col-12 col-lg-9 col-md-8 md-no-padding-lr">
                                    <h5 class="text-medium margin-four-bottom text-extra-dark-gray alt-font d-block">Graphic Design</h5>
                                    <p class="w-90 lg-w-100">We interlace our creative with solid marketing and branding principles.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                    </div>
                </div>
            </section>
            <!-- end feature box section -->
            <!-- start section -->
            <section class="wow animate__fadeIn bg-extra-dark-gray">
                <div class="container"> 
                    <div class="row">
                        <div class="col-12 col-xl-5 col-lg-6 d-flex align-items-center sm-margin-40px-bottom md-margin-five-bottom text-center text-lg-start sm-no-margin-top wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="lg-padding-15px-lr sm-no-padding-lr w-100">
                                <span class="alt-font text-medium-gray d-block margin-10px-bottom">Unique digital experiences</span>
                                <h6 class="text-light-gray alt-font w-90 md-w-100">Pixel perfect design and clear code delivered to you</h6>
                                <p class="w-85 lg-w-90 md-w-100">Lorem Ipsum is simply dummy text of Ipsum the printing and typesetting industry. It has survived not & only five centuries, but also the leap into electronic essentially unchanged and Lorem Ipsum is simply of the printing & typesetting industry. Lorem Ipsum is dummy text of the printing & typesetting industry.has survived not only five centuries.</p>
                                <a href="about-us-classic.html" class="btn btn-transparent-white btn-small border-radius-4"><i class="fas fa-play-circle icon-very-small margin-5px-right ms-0" aria-hidden="true"></i>Read More</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 offset-xl-1 text-center md-margin-five-bottom wow animate__fadeIn">
                            <img src="images/image-10.jpg" alt="" class="w-100">
                        </div>
                        <div class="col-lg-3 wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-start flex-column justify-content-center text-white-2 bg-deep-pink padding-35px-lr lg-padding-15px-all md-padding-30px-all last-paragraph-no-margin h-100">
                                <div class="text-large margin-15px-bottom w-100">We always stay with our clients and respect their business.</div>
                                <p class="w-100">Lorem Ipsum and dummy text of the printing & typesetting is industry lorem is Ipsum been industry's standard dummy text ever since lorem Ipsum is simply dummys.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            <!-- start counter section -->
            <section class="wow animate__fadeIn">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4">
                        <!-- start counter item-->
                        <div class="col text-center md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp">
                            <div class="counter-feature-box-1 w-100 border-all padding-5px-all">
                                <div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
                                    <i class="icon-heart icon-medium text-medium-gray margin-15px-bottom"></i>
                                    <h6 class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 counter" data-to="4650" data-speed="2000">4650</h6>
                                    <span>Happy Clients</span>
                                </div>
                            </div>
                        </div>
                        <!-- end counter item-->
                        <!-- start counter item-->
                        <div class="col text-center md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp" data-wow-delay="0.2s">
                            <div class="counter-feature-box-1 w-100 border-all padding-5px-all">
                                <div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
                                    <i class="icon-laptop icon-medium text-medium-gray margin-15px-bottom"></i>
                                    <h6 class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 counter" data-to="3790" data-speed="2000">3790</h6>
                                    <span>Project Completed</span>
                                </div>
                            </div>
                        </div>
                        <!-- end counter item-->
                        <!-- start counter item-->
                        <div class="col text-center xs-margin-15px-bottom wow animate__fadeInUp" data-wow-delay="0.4s">
                            <div class="counter-feature-box-1 w-100 border-all padding-5px-all">
                                <div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
                                    <i class="icon-camera icon-medium text-medium-gray margin-15px-bottom"></i>
                                    <h6 class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 counter" data-to="5580" data-speed="2000">5580</h6>
                                    <span>Photo Capture</span>
                                </div>
                            </div>
                        </div>
                        <!-- end counter item-->
                        <!-- start counter item-->
                        <div class="col text-center wow animate__fadeInUp" data-wow-delay="0.6s">
                            <div class="counter-feature-box-1 w-100 border-all padding-5px-all">
                                <div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
                                    <i class="icon-chat icon-medium text-medium-gray margin-15px-bottom"></i>
                                    <h6 class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 counter" data-to="8580" data-speed="2000">8580</h6>
                                    <span>Telephonic Talk</span>
                                </div>
                            </div>
                        </div>
                        <!-- end counter item-->
                    </div>
                </div>
            </section>
            <!-- end counter section -->
            <!-- start parallax with feature box section -->
            <section class="parallax one-second-screen parallax-feature-box md-h-auto" data-parallax-background-ratio="0.3" style="background-image:url('images/homepage-9-parallax-img7.jpg');">
                <div class="opacity-medium bg-extra-dark-gray"></div>
                <div class="container position-relative">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-6 col-md-8 text-center md-margin-60px-bottom sm-margin-40px-bottom">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=sU3FkzUKHXU">
                                <img src="images/icon-play.png" class="w-130px" alt=""/></a>
                            <h4 class="alt-font text-white-2">We are delivering beautiful digital products for you</h4>
                        </div>
                    </div>
                    <div class="row parallax-feature-box-bottom z-index-5 justify-content-center w-100 m-0 left-0 wow animate__fadeInUp">
                        <!-- start features box item -->
                        <div class="col-12 col-lg-3 col-md-6 col-sm-8 md-margin-30px-bottom wow animate__fadeInUp">
                            <div class="bg-white box-shadow-light text-center h-100 padding-fifteen-all position-relative md-padding-twelve-lr xs-padding-ten-lr last-paragraph-no-margin">
                                <h4 class="text-light-gray text-deep-pink alt-font margin-25px-top margin-15px-bottom md-no-margin-top">01</h4>
                                <div class="alt-font text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600 text-uppercase">Best services</div>
                                <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start features box item -->
                        <div class="col-12 col-lg-3 col-md-6 col-sm-8 md-margin-30px-bottom wow animate__fadeInUp" data-wow-delay="0.2s">
                            <div class="bg-white box-shadow-light text-center h-100 padding-fifteen-all position-relative md-padding-twelve-lr xs-padding-ten-lr last-paragraph-no-margin">
                                <h4 class="text-light-gray text-deep-pink alt-font margin-25px-top margin-15px-bottom md-no-margin-top">02</h4>
                                <div class="alt-font text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600 text-uppercase">Professional</div>
                                <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start features box item -->
                        <div class="col-12 col-lg-3 col-md-6 col-sm-8 sm-margin-30px-bottom wow animate__fadeInUp" data-wow-delay="0.4s">
                            <div class="bg-white box-shadow-light text-center h-100 padding-fifteen-all position-relative md-padding-twelve-lr xs-padding-ten-lr last-paragraph-no-margin">
                                <h4 class="text-light-gray text-deep-pink alt-font margin-25px-top margin-15px-bottom md-no-margin-top">03</h4>
                                <div class="alt-font text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600 text-uppercase">Friendly support</div>
                                <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start features box item -->
                        <div class="col-12 col-lg-3 col-md-6 col-sm-8 wow animate__fadeInUp" data-wow-delay="0.6s">
                            <div class="bg-white box-shadow-light text-center h-100 padding-fifteen-all position-relative md-padding-twelve-lr xs-padding-ten-lr last-paragraph-no-margin">
                                <h4 class="text-light-gray text-deep-pink alt-font margin-25px-top margin-15px-bottom md-no-margin-top">04</h4>
                                <div class="alt-font text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600 text-uppercase">Make it Simple</div>
                                <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                    </div>
                </div>
            </section>
            <!-- end parallax with feature box section -->
            <!-- start feature box section -->
            <section class="wow animate__fadeIn bg-light-gray">
                <div class="container margin-seven-half-top lg-margin-ten-top md-no-margin-top">
                    <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                        <!-- start features box item -->
                        <div class="col md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeInRight last-paragraph-no-margin">
                            <div class="feature-box-6 position-relative">
                                <i class="icon-tools icon-extra-medium text-deep-pink"></i>
                                <div class="alt-font text-extra-dark-gray font-weight-600 line-height-20">Powerful Customization</div>
                                <p class="line-height-20">Shortcode subtitle</p>
                            </div>
                        </div>  
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeInRight last-paragraph-no-margin" data-wow-delay="0.2s">
                            <div class="feature-box-6 position-relative">
                                <i class="icon-heart icon-extra-medium text-deep-pink"></i>
                                <div class="alt-font text-extra-dark-gray font-weight-600 line-height-20">Design with Love</div>
                                <p class="line-height-20">Shortcode subtitle</p>
                            </div>
                        </div>  
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col xs-margin-30px-bottom wow animate__fadeInRight last-paragraph-no-margin" data-wow-delay="0.4s">
                            <div class="feature-box-6 position-relative">
                                <i class="icon-layers icon-extra-medium text-deep-pink"></i>
                                <div class="alt-font text-extra-dark-gray font-weight-600 line-height-20">Visual Page Builder</div>
                                <p class="line-height-20">Shortcode subtitle</p>
                            </div>
                        </div>  
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col wow animate__fadeInRight last-paragraph-no-margin" data-wow-delay="0.6s">
                            <div class="feature-box-6 position-relative">
                                <i class="icon-expand icon-extra-medium text-deep-pink"></i>
                                <div class="alt-font text-extra-dark-gray font-weight-600 line-height-20">Live Website Builder</div>
                                <p class="line-height-20">Shortcode subtitle</p>
                            </div>
                        </div>  
                        <!-- end features box item -->
                    </div>
                </div>
            </section>
            <!-- end feature box section -->
            <!-- start portfolio section -->
            <section class="wow animate__fadeIn padding-90px-top md-padding-50px-top sm-padding-30px-top no-padding-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- start filter navigation -->
                            <ul class="portfolio-filter nav nav-tabs justify-content-center border-0 portfolio-filter-tab-1 font-weight-600 alt-font text-uppercase text-center margin-80px-bottom text-small md-margin-40px-bottom sm-margin-20px-bottom">
                                <li class="nav active"><a href="javascript:void(0);" data-filter="*" class="light-gray-text-link text-very-small">All</a></li>
                                <li class="nav"><a href="javascript:void(0);" data-filter=".web" class="light-gray-text-link text-very-small">Web</a></li>
                                <li class="nav"><a href="javascript:void(0);" data-filter=".advertising" class="light-gray-text-link text-very-small">Advertising</a></li>
                                <li class="nav"><a href="javascript:void(0);" data-filter=".branding" class="light-gray-text-link text-very-small">Branding</a></li>
                                <li class="nav"><a href="javascript:void(0);" data-filter=".design" class="light-gray-text-link text-very-small">Design</a></li>
                                <li class="nav"><a href="javascript:void(0);" data-filter=".photography" class="light-gray-text-link text-very-small">Photography</a></li>
                            </ul> 
                            <!-- end filter navigation -->
                        </div>
                    </div>
                </div>
                <!-- start filter content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 filter-content overflow-hidden">
                            <ul class="hover-option7 portfolio-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-medium">
                                <li class="grid-sizer"></li>
                                <!-- start portfolio item -->
                                <li class="grid-item web branding design wow animate__fadeInUp">
                                    <a href="single-project-page-01.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item170.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Naked Soap</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Web and Photography</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item design photography wow animate__fadeInUp" data-wow-delay="0.2s">
                                    <a href="single-project-page-02.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item171.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Berlin Design</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Branding and Brochure</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item web branding design photography wow animate__fadeInUp" data-wow-delay="0.4s">
                                    <a href="single-project-page-03.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item172.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Abstract Comics</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Branding and Identity</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item advertising branding design photography wow animate__fadeInUp" data-wow-delay="0.6s">
                                    <a href="single-project-page-04.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item173.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Teabag Collection</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Web and Photography</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item web branding design wow animate__fadeInUp">
                                    <a href="single-project-page-05.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item174.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">HardDot Stone</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Branding and Identity</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item web advertising branding design photography wow animate__fadeInUp" data-wow-delay="0.2s">
                                    <a href="single-project-page-06.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item175.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Educamp School</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Branding and Identity</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item web advertising branding design photography wow animate__fadeInUp" data-wow-delay="0.4s">
                                    <a href="single-project-page-07.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item176.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Third Eye Glasses</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Branding and Brochure</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item web advertising branding wow animate__fadeInUp" data-wow-delay="0.6s">
                                    <a href="single-project-page-08.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item177.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Violator Series</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Web and Photography</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end filter content -->
            </section>
            <!-- end portfolio section -->
            
            <!-- start feature box section -->
            <section class="p-0 wow animate__fadeIn bg-extra-dark-gray">
                <div class="container-fluid">
                    <div class="row row-cols-1 row-cols-lg-2">
                        <div class="col cover-background md-h-500px sm-h-350px wow animate__fadeIn" style="background-image:url('images/homepage-option15-image-6.jpg');"><div class="sm-h-400px"></div></div>
                        <div class="col d-flex align-items-center wow animate__fadeInRight last-paragraph-no-margin text-center text-lg-start">
                            <div class="w-100 padding-fifteen-all xl-padding-twelve-all lg-padding-ten-all md-padding-90px-all sm-padding-40px-tb sm-no-padding-lr">
                                <span class="text-medium margin-20px-bottom d-block alt-font">We create premium designs and technology</span>
                                <h4 class="alt-font text-light-gray">A digital studio crafting beautiful experiences.</h4>
                                <p class="w-85 lg-w-100 xl-w-95">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text.</p>
                                <a href="home-creative-small-business.html" class="btn btn-small btn-transparent-white text-small border-radius-4 lg-margin-15px-bottom margin-35px-top">Start Your Business</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end feature box section -->

            <section class="no-padding" style="margin-bottom:80px;"></section>
            <!-- start feature box section -->
            <section class="wow no-padding animate__fadeIn bg-extra-dark-gray">
                <div class="container-fluid">
                    <div class="row row-cols-1 row-cols-lg-2">
                        <div class="col cover-background md-h-500px sm-h-350px wow animate__fadeIn" style="background-image:url('images/homepage-option15-image-7.jpg');"><div class="sm-h-400px"></div></div>
                        <div class="col padding-five-tb padding-six-lr xl-padding-five-lr lg-padding-50px-tb md-padding-70px-tb wow animate__fadeIn">
                            <div class="row">
                                <div class="col-12 margin-four-bottom lg-margin-six-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center text-lg-start">
                                    <h4 class="alt-font text-white-2 md-w-70 mx-auto md-no-margin-bottom sm-w-100 d-inline-block">Unique, truly responsive and functional websites</h4>
                                </div>
                            </div>

                            <div class="row row-cols-1 row-cols-xl-2 row-cols-lg-1 row-cols-md-2 row-cols-sm-2">
                                <!-- start feature box item -->
                                <div class="col margin-six-bottom md-margin-40px-bottom last-paragraph-no-margin text-center text-md-start">
                                    <div class="text-light-gray margin-10px-bottom md-margin-5px-bottom alt-font"><span class="margin-10px-right d-block d-md-inline-block sm-w-100">01.</span>Elegant / unique design</div>
                                    <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                                <!-- end feature box item -->
                                <!-- start feature box item -->
                                <div class="col margin-six-bottom md-margin-40px-bottom last-paragraph-no-margin text-center text-md-start">
                                    <div class="text-light-gray margin-10px-bottom md-margin-5px-bottom alt-font"><span class="margin-10px-right d-block d-md-inline-block sm-w-100">02.</span>Different layout type</div>
                                    <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                                <!-- end feature box item -->
                                <!-- start feature box item -->
                                <div class="col md-margin-40px-bottom lg-margin-six-bottom last-paragraph-no-margin text-center text-md-start">
                                    <div class="text-light-gray margin-10px-bottom md-margin-5px-bottom alt-font"><span class="margin-10px-right d-block d-md-inline-block sm-w-100">03.</span>Make it simple</div>
                                    <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                                <!-- end feature box item -->
                                <!-- start feature box item -->
                                <div class="col last-paragraph-no-margin text-center text-md-start">
                                    <div class="text-light-gray margin-10px-bottom md-margin-5px-bottom alt-font"><span class="margin-10px-right d-block d-md-inline-block sm-w-100">04.</span>True responsiveness</div>
                                    <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                                <!-- end feature box item -->
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
            <!-- end feature box section -->
           
            <!-- start section -->
            <section class="bg-light-gray sm-no-padding-tb wow animate__fadeIn">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-5 text-center text-lg-start offset-lg-1 order-1 order-lg-2 md-padding-50px-all sm-padding-15px-lr">
                            <i class="fas fa-quote-left text-deep-pink icon-medium margin-15px-bottom"></i>
                            <h5 class="text-extra-dark-gray alt-font font-weight-600">Design is not just what it looks like and feels</h5>
                            <p class="w-90 md-w-100">Pofo philosophy that great design can only be delivered by people with a deep social and cultural understanding of the communities they designing. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever...</p>
                            <img src="images/signature-dark.png" alt="" class="margin-15px-top">
                            <span class="text-extra-dark-gray text-large d-block margin-30px-top alt-font font-weight-600">Colin Smith</span>
                            <span class="d-block">From the chairman's desk</span>
                        </div>
                        <div class="col-12 col-lg-6 order-2 order-lg-1 sm-no-padding text-center position-relative">
                            <div class="position-absolute background-position-left h-100 w-100 d-none d-md-block" style="background-image: url(images/homepage-option15-image-8.jpg); background-repeat: no-repeat"></div>
                            <div class="bg-extra-dark-gray padding-55px-all lg-padding-35px-all text-start w-70 md-w-60 sm-w-100 float-end last-paragraph-no-margin position-relative md-top-10 sm-top-15 sm-top-10 z-index-1">
                                <div class="text-medium margin-25px-bottom text-white-2">We always stay on the cutting edge of digital,that our clients maintain their competitive advantage online.</div>
                                <p>Lorem Ipsum is simply dummy of printing & typesetting industry. Lorem Ipsum been the industry's standard dummy text ever the 1500s. Lorem Ipsum simply text the printing & typesetting Lorem Ipsum has been the indust since the 1500s.</p>
                                <p>Lorem Ipsum is simply of the printing the industry's standard the industry.</p>
                                <a href="#expertise" class="inner-link text-uppercase alt-font margin-25px-top d-inline-block font-weight-600 text-white-2 text-deep-pink-hover text-small xs-margin-15px-bottom">our company history<i class="fas fa-long-arrow-alt-right margin-10px-left text-deep-pink position-relative" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            <!-- start clients slider section -->
            <section class="wow animate__fadeIn">
                <div class="container text-center">
                    <div class="row">
                        <div class="swiper-container black-move wow animate__fadeIn" data-slider-options='{ "slidesPerView": "1", "allowTouchMove":true,"paginationClickable": true, "autoplay": { "delay": 3000, "disableOnInteraction": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination-02", "clickable": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "pagination": { "el": null } }'>
                            <div class="swiper-wrapper">
                                <?php foreach($partners as $partner) { ?>
                                <div class="swiper-slide text-center">
                                    <a href="<?= $partner['link']?>" title="<?= $partner['name']?>"><img src="<?= PATH_FILES . $partner['logo']?>" alt="<?= $partner['name']?>"></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end clients slider section -->
            <!-- start testimonial slider section -->
            <section class="bg-black wow animate__fadeIn">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-5 col-md-6 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                            <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">What clients say</div>
                            <h5 class="alt-font text-white-2 font-weight-600 text-uppercase m-0">Testimonials</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="swiper-container swiper-pagination-bottom white-move blog-slider" data-slider-options='{ "slidesPerView": "1", "allowTouchMove":true, "loop":false, "spaceBetween": 30, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "pagination": { "el": ".swiper-pagination-03", "clickable": true } }'>
                            <div class="swiper-wrapper">
                                <!-- start testimonial item -->
                                <div class="swiper-slide">
                                    <div class="margin-half-all bg-extra-dark-gray box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                        <img src="images/avtar-19.jpg" class="rounded-circle w-100px h-100px margin-25px-bottom md-margin-15px-bottom" alt=""/>
                                        <p class="md-margin-15px-bottom sm-margin-20px-bottom">I wanted to hire the best and after looking at several other companies, I knew Jacob was the perfect guy for the job. He is a true professional.</p>
                                        <span class="text-deep-pink text-small text-uppercase d-block line-height-10 alt-font font-weight-600">Shoko Mugikura</span>
                                        <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Design Manager</span>
                                    </div>
                                </div>
                                <!-- end testimonial item -->
                                <!-- start testimonial item -->
                                <div class="swiper-slide">
                                    <div class="margin-half-all bg-extra-dark-gray box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                        <img src="images/avtar-20.jpg" class="rounded-circle w-100px h-100px margin-25px-bottom md-margin-15px-bottom" alt=""/>
                                        <p class="md-margin-15px-bottom sm-margin-20px-bottom">I wanted to hire the best and after looking at several other companies, I knew Jacob was the perfect guy for the job. He is a true professional.</p>
                                        <span class="text-deep-pink text-small text-uppercase d-block line-height-10 alt-font font-weight-600">Alexander Harvard</span>
                                        <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Co Founder / CEO</span>
                                    </div>
                                </div>
                                <!-- end testimonial item -->
                                <!-- start testimonial item -->
                                <div class="swiper-slide">
                                    <div class="margin-half-all bg-extra-dark-gray box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                        <img src="images/avtar-21.jpg" class="rounded-circle w-100px h-100px margin-25px-bottom md-margin-15px-bottom" alt=""/>
                                        <p class="md-margin-15px-bottom sm-margin-20px-bottom">I wanted to hire the best and after looking at several other companies, I knew Jacob was the perfect guy for the job. He is a true professional.</p>
                                        <span class="text-deep-pink text-small text-uppercase d-block line-height-10 alt-font font-weight-600">Lindsay Swanson</span>
                                        <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Creative Director</span>
                                    </div>
                                </div>
                                <!-- end testimonial item -->
                                <!-- start testimonial item -->
                                <div class="swiper-slide">
                                    <div class="margin-half-all bg-extra-dark-gray box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                        <img src="images/avtar-18.jpg" class="rounded-circle w-100px h-100px margin-25px-bottom md-margin-15px-bottom" alt=""/>
                                        <p class="md-margin-15px-bottom sm-margin-20px-bottom">I wanted to hire the best and after looking at several other companies, I knew Jacob was the perfect guy for the job. He is a true professional.</p>
                                        <span class="text-deep-pink text-small text-uppercase d-block line-height-10 alt-font font-weight-600">Herman Miller</span>
                                        <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Creative Director</span>
                                    </div>
                                </div>
                                <!-- end testimonial item -->
                            </div>
                            <div class="swiper-pagination swiper-pagination-03 swiper-pagination-white"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end testimonial slider section -->
            
            <!-- start blog section -->
            <section class="wow animate__fadeIn">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-5 col-md-6 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                            <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">What you think</div>
                            <h5 class="alt-font text-extra-dark-gray font-weight-700 text-uppercase m-0">Latest Blogs</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 blog-content">
                            <ul class="blog-grid blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col hover-option4 blog-post-style3 gutter-extra-large">
                                <li class="grid-sizer"></li>
                                <!-- start post item -->
                                <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp">
                                    <div class="blog-post bg-light-gray">
                                        <div class="blog-post-images overflow-hidden position-relative">
                                            <a href="blog-post-layout-01.html">
                                                <img src="images/blog-img121.jpg" alt="">
                                                <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                            </a>
                                        </div>
                                        <div class="post-details padding-40px-all md-padding-20px-all">
                                            <a href="blog-post-layout-01.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">I like the body. I like to design everything to do with the body.</a>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                            <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                            <div class="author">
                                                <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="blog-masonry.html" class="text-medium-gray">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- end post item -->
                                <!-- start post item -->
                                <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp" data-wow-delay="0.2s">
                                    <div class="blog-post bg-light-gray">
                                        <div class="blog-post-images overflow-hidden position-relative">
                                            <a href="blog-post-layout-02.html">
                                                <img src="images/blog-img122.jpg" alt="">
                                                <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                            </a>
                                        </div>
                                        <div class="post-details padding-40px-all md-padding-20px-all">
                                            <a href="blog-post-layout-02.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">Styles come and go. Design is a language, not a style.</a>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                            <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                            <div class="author">
                                                <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="blog-masonry.html" class="text-medium-gray">Herman Miller</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- end post item -->
                                <!-- start post item -->
                                <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp" data-wow-delay="0.4s">
                                    <div class="blog-post bg-light-gray">
                                        <div class="blog-post-images overflow-hidden position-relative">
                                            <a href="blog-post-layout-03.html">
                                                <img src="images/blog-img123.jpg" alt="">
                                                <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                            </a>
                                        </div>
                                        <div class="post-details padding-40px-all md-padding-20px-all">
                                            <a href="blog-post-layout-03.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">Recognizing the need is the primary condition for design.</a>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy....</p>
                                            <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                            <div class="author">
                                                <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="blog-masonry.html" class="text-medium-gray">Hugh Macleod</a>&nbsp;&nbsp;|&nbsp;&nbsp;15 March 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- end post item -->
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end blog section -->
        </div>
        <!-- start footer --> 
        <?php include 'include/footer.php' ?>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <script type="text/javascript" src="js/theme-vendors.min.js"></script>
        <!-- setting -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>