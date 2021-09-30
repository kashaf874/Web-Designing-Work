
<?php

    $conn = mysqli_connect("localhost","root", "","contact");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Home | BusinessPerfect</title>

    <meta name="description" content="BusinessPerfect - Freebie HTML/CSS template based on Bootstrap">
    <meta name="author" content="Kashaf Naz">
    <meta name="keywords" content="html, css, twitter bootstrap, javascript, jquery, responsive">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/kk.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/kk.png">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/css/colors.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <header id="masthead" class="site-header" data-anchor-target=".hero" data-top="background: rgba(59,58,54,0); border-bottom-color: rgba(226,226,226,0);" data-top-bottom="background: rgba(59,58,54,1); border-bottom-color: rgba(226,226,226,1);">

        <nav id="primary-navigation" class="site-navigation">

            <div class="container-fluid">

                <div class="navbar-header">
                    
                    <a href="index.php" class="site-title orange-text">PROJECT<span class="white-text">Perfect</span></a>

                </div><!-- /.navbar-header -->

                <div class="main-menu" id="perfect-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li class="dropdown">
                            <a href="blog.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Blog <i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-post.php">Blog Post</a></li>
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.dropdown -->
                        <li class="dropdown">
                            <a href="portfolio.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Portfolio <i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio-item.php">Portfolio Item</a></li>                              
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.dropdown -->
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="ui-elements.php">UI Elements</a></li>
                        
                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->
                
            </div>
                      
        </nav><!-- /.site-navigation -->
        
    </header><!-- /#masthead -->

    <div class="hero background-overlay">
    
        <div class="hero-text">
            <h1>Simplicity is the soul of efficiency</h1>
        </div> <!-- /.hero-text -->
        <div class="hero-arrow">
            <a class="scrollTo" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div><!-- /.hero-arrow -->

    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section section-quote text-center">

            <div class="container">

                <p class="quote">I owe my success to having listened respectfully to the very best advice, and then going away and doing the exact opposite</p>
                <p class="quote-owner yellow-text">G. K. Chesterton</p>
                
            </div>
            
        </section><!-- /.section-quote -->

        <section class="site-section section-works light-gray-bg text-center">

            <div class="container">

                <h2 class="section-title">Featured Works</h2>
                <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <div class="multi-item-controls">
                    <a class="left btn carousel-control" href="#threeSlidesSlider" data-slide="next"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                    <a class="right btn carousel-control" href="#threeSlidesSlider" data-slide="prev"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div><!-- /.multi-item-controls -->

            </div>

			<div class="container-fluid">

				<div class="row">

                    <div class="col-md-12">

                        <div class="carousel three-slides-slider multi-item-carousel slide" id="threeSlidesSlider">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-xs-6 col-sm-4">
                                        <img src="assets/img/slider-1.jpg" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-xs-6 col-sm-4">
                                        <img src="assets/img/slider-2.jpg" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-xs-6 col-sm-4">
                                        <img src="assets/img/slider-3.jpg" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                            </div><!-- /.carousel-inner -->
                        </div><!-- /.multi-item-carousel -->

                    </div>

                </div>

            </div>
            
        </section><!-- /.section-works -->

        <section class="site-section-small section-services">

            <div class="container">

                <div class="text-center">    

                    <h3 class="section-title">We Are The Best</h3>
                    <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 

                </div>

                <div class="row">

                    <div class="col-sm-5 col-sm-offset-1 col-xs-6">

                        <div class="service">

                            <div class="service-icon">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                            </div><!-- /.service-icon -->
                            <div class="service-content">
                                <h4 class="service-title">Clean Design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div><!-- /.service-content -->

                        </div><!-- /.service -->
                        
                        <div class="service">

                            <div class="service-icon">
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                            </div><!-- /.service-icon -->
                            <div class="service-content">
                                <h4 class="service-title">Customizable</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div><!-- /.service-content -->

                        </div><!-- /.service -->
                        
                    </div>

                    <div class="col-sm-5 col-xs-6">

                        <div class="service">

                            <div class="service-icon">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </div><!-- /.service-icon -->
                            <div class="service-content">
                                <h4 class="service-title">Responsive Layout</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div><!-- /.service-content -->

                        </div><!-- /.service -->
                        
                        <div class="service">

                            <div class="service-icon">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                            </div><!-- /.service-icon -->
                            <div class="service-content">
                                <h4 class="service-title">Multi-Purpose</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div><!-- /.service-content -->

                        </div><!-- /.service -->
                        
                    </div>
                    
                </div>

            </div>
            
        </section><!-- /.section-services -->

        <section class="site-section-small section-counters light-gray-bg text-center">

            <div class="container-fluid">
                
                <div class="row">
                
                    <div class="col-sm-3 col-xs-6 counter-line">
                        <h4 class="small-title">Cups of Coffee</h4>
                        <p class="counter" data-to="1520" data-speed="2000">1520</p>  
                    </div><!-- /.counter-item -->
                    
                    <div class="col-sm-3 col-xs-6 counter-line">
                        <h4 class="small-title">Happy Clients</h4>
                        <p class="counter" data-to="426" data-speed="2000">426</p>             
                    </div><!-- /.counter-item -->

                    <div class="col-sm-3 col-xs-6 counter-line">
                        <h4 class="small-title">Projects Done</h4>
                        <p class="counter" data-to="512" data-speed="2000">512</p>
                        
                    </div><!-- /.counter-item -->

                    <div class="col-sm-3 col-xs-6 counter-line">
                        <h4 class="small-title">Ideas</h4>
                        <p class="counter" data-to="423" data-speed="2000">423</p>   
                    </div><!-- /.counter-item -->

                </div>

            </div>
            
        </section><!-- /.section-counters -->

        <section class="site-section-small section-team">

            <div class="container">

                <div class="text-center">
                    <h3 class="section-title">Super Team</h3>
                    <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                                    
                <div class="row">

                    <div class="col-md-8 col-md-offset-2">
                        <div class="carousel carousel-sync one-slide-slider slide" id="oneSlideSlider">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-12">
                                        <div class="team-member">
                                            <div class="team-member-img">
                                                <img class="img-carousel" src="assets/img/employee-1.jpg" alt="">
                                            </div><!-- /.team-member-img -->
                                            <div class="team-member-info">
                                                <h4 class="team-member-name">Mark Henderson</h4>
                                                <h5 class="team-member-position">CEO</h5>
                                                <p class="team-member-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <div class="social-links">
                                                    <a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a class="google-plus-bg" href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a>
                                                    <a class="instagram-bg" href="#"><i class="fa fa-instagram"></i></a>
                                                </div><!-- /.social-links -->
                                            </div><!-- /.team-member-info -->
                                        </div><!-- /.team-member -->
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-12">
                                        <div class="team-member">
                                            <div class="team-member-img">
                                                <img class="img-carousel" src="assets/img/employee-2.jpg" alt="">
                                            </div><!-- /.team-member-img -->
                                            <div class="team-member-info">
                                                <h4 class="team-member-name">Linda Smith</h4>
                                                <h5 class="team-member-position">Human Resources</h5>
                                                <p class="team-member-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <div class="social-links">
                                                    <a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a class="google-plus-bg" href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a>
                                                    <a class="instagram-bg" href="#"><i class="fa fa-instagram"></i></a>
                                                </div><!-- /.social-links -->
                                            </div><!-- /.team-member-info -->
                                        </div><!-- /.team-member -->
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-12">
                                        <div class="team-member">
                                            <div class="team-member-img">
                                                <img class="img-carousel" src="assets/img/employee-3.jpg" alt="">
                                            </div><!-- /.team-member-img -->
                                            <div class="team-member-info">
                                                <h4 class="team-member-name">Matt Ryan</h4>
                                                <h5 class="team-member-position">Coordinator</h5>
                                                <p class="team-member-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <div class="social-links">
                                                    <a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a class="google-plus-bg" href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a>
                                                    <a class="instagram-bg" href="#"><i class="fa fa-instagram"></i></a>
                                                </div><!-- /.social-links -->
                                            </div><!-- /.team-member-info -->
                                        </div><!-- /.team-member -->
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-12">
                                        <div class="team-member">
                                            <div class="team-member-img">
                                                <img class="img-carousel" src="assets/img/employee-4.jpg" alt="">
                                            </div><!-- /.team-member-img -->
                                            <div class="team-member-info">
                                                <h4 class="team-member-name">Cindy Bell</h4>
                                                <h5 class="team-member-position">PR Marketing</h5>
                                                <p class="team-member-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <div class="social-links">
                                                    <a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a class="google-plus-bg" href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a>
                                                    <a class="instagram-bg" href="#"><i class="fa fa-instagram"></i></a>
                                                </div><!-- /.social-links -->
                                            </div><!-- /.team-member-info -->
                                        </div><!-- /.team-member -->
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-12">
                                        <div class="team-member">
                                            <div class="team-member-img">
                                                <img class="img-carousel" src="assets/img/employee-5.jpg" alt="">
                                            </div><!-- /.team-member-img -->
                                            <div class="team-member-info">
                                                <h4 class="team-member-name">Frank Dawson</h4>
                                                <h5 class="team-member-position">COO</h5>
                                                <p class="team-member-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <div class="social-links">
                                                    <a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a class="google-plus-bg" href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a>
                                                    <a class="instagram-bg" href="#"><i class="fa fa-instagram"></i></a>
                                                </div><!-- /.social-links -->
                                            </div><!-- /.team-member-info -->
                                        </div><!-- /.team-member -->
                                    </div>
                                </div><!-- /.item -->
                            </div><!-- /.carousel-inner -->
                        </div><!-- /.carousel -->
                    </div>

                    <div class="col-md-8 col-md-offset-2 hidden-xs">
                        <div class="carousel carousel-sync four-slides-slider multi-item-carousel slide" data-interval="false" id="fourSlidesSlider">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-4 col-md-3">
                                      <img src="assets/img/employee-2.jpg" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-4 col-md-3">
                                      <img src="assets/img/employee-3.jpg" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-4 col-md-3">
                                      <img src="assets/img/employee-4.jpg" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-4 col-md-3">
                                      <img src="assets/img/employee-5.jpg" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-4 col-md-3">
                                      <img src="assets/img/employee-1.jpg" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                            </div><!-- /.carousel-inner -->
                        </div><!-- /.multi-item-carousel -->
                    </div>

                    <div class="col-md-12">

                        <div class="multi-item-controls text-center">
                            <a href="#fourSlidesSlider" class="left btn btn-gray-border carousel-control" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i>
                            </a>
                            <a href="#fourSlidesSlider" class="right btn btn-gray-border carousel-control" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div><!-- /.multi-item-controls -->

                    </div>

                </div>

            </div>
            
        </section><!-- /.section-team -->

        <section class="site-section-small section-clients light-gray-bg">

            <div class="container">

                <h3 class="section-title text-center mb-120">What our clients say?</h3>

                <div class="row">

                    <div class="testimonials">

                        <div class="col-md-6"> 

                            <div class="testimonial">
                                <div class="testimonial-content testimonial-1">
                                    <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p> 
                                    <div class="testimonial-owner">
                                        <p>Jennifer Frank</p>
                                        <p class="yellow-text italic-text">Owner of Company</p>
                                    </div><!-- /.testimonial-owner -->
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>

                        <div class="col-md-6"> 

                            <div class="testimonial">
                                <div class="testimonial-content testimonial-2">
                                    <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p> 
                                    <div class="testimonial-owner">
                                        <p>Frank Dawson</p>
                                        <p class="yellow-text italic-text">Owner of Company</p>
                                    </div><!-- /.testimonial-owner -->                                   
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>

                        <div class="col-md-6"> 

                            <div class="testimonial">
                                <div class="testimonial-content testimonial-1">
                                    <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p> 
                                    <div class="testimonial-owner">
                                        <p>Linda Smith</p>
                                        <p class="yellow-text italic-text">Owner of Company</p>
                                    </div><!-- /.testimonial-owner -->
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>

                        <div class="col-md-6"> 

                            <div class="testimonial">
                                <div class="testimonial-content testimonial-2">
                                    <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p> 
                                    <div class="testimonial-owner">
                                        <p>John Dawson</p>
                                        <p class="yellow-text italic-text">Owner of Company</p>
                                    </div><!-- /.testimonial-owner -->
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>

                        <div class="col-md-6"> 

                            <div class="testimonial">
                                <div class="testimonial-content testimonial-1">
                                    <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p> 
                                    <div class="testimonial-owner">
                                        <p>Jane Smith</p>
                                        <p class="yellow-text italic-text">Owner of Company</p>
                                    </div><!-- /.testimonial-owner -->                                  
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>

                        <div class="col-md-6"> 

                            <div class="testimonial">
                                <div class="testimonial-content testimonial-2">
                                    <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p> 
                                    <div class="testimonial-owner">
                                        <p>Matt Ryan</p>
                                        <p class="yellow-text italic-text">Owner of Company</p>
                                    </div><!-- /.testimonial-owner -->                        
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>

                    </div><!-- /.testimonials -->

                </div>

            </div>
            
        </section><!-- /.section-clients -->

        <section class="site-section-small section-work-with-us yellow-bg text-center">

            <div class="container">

                <p class="section-title-small white-text mb-50">Coming together is a beginning, keeping together is progress, working together is success.</p>
                <a class="btn" href="#">Start Now</a>

            </div>
            
        </section><!-- /.section-work-with-us -->

        <section class="social-networks">

            <div class="container-fluid">

                <div class="row">

                    <a class="white-text black-bg twitter-bg" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a class="white-text gray-bg facebook-bg" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a class="white-text black-bg google-plus-bg" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a class="white-text gray-bg message-bg" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
 
                </div>
                
            </div>
            
        </section><!-- /.social-networks -->

    </main><!-- /.site-main -->

    <footer id="colophon" class="site-footer">

        <div class="container">

            <div class="email">
                <a href="mailto:hello@businessperfect.com">hello@businessperfect.com</a>
            </div><!-- /.email -->

            <div class="row">

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <a href="index.html" class="site-title yellow-text">Business<span>Perfect</span></a>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                    </div>
                    
                </div>

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">Get in touch</h4>
                        <ul class="list-unstyled">
                            <li>Phone: <a href="tel:+15417543010">+1-541-754-3010</a></li>
                            <li>Email: <a href="mailto:hello@businessperfect.com">hello@businessperfect.com</a></li>
                            <li>Fax: <a href="tel:+15417543010">+1-541-754-3010</a></li>
                        </ul>   
                    </div>
                    
                </div>
              
                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    
                </div>

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">Location</h4>
                        <ul class="list-unstyled">
                            <li>BusinessPerfect</li>
                            <li>848 My Street,</li>
                            <li>CA 94544</li>
                        </ul>
                    </div>

                </div>

            </div>
            
        </div>

        <div class="copyright">
            <p>&copy; 2017 BusinessPerfect | Made by <a href="http://milansavov.com/" class="yellow-text">Milan Savov</a></p>
        </div><!-- /.copyright -->
        
    </footer><!-- /.site-footer -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/touchswipe.min.js"></script>
    <script src="assets/js/skrollr.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>