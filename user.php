<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hussein Hassan - Leadership Spotlighting" />
    <meta name="keywords" content="Leadership Spotlighting, Trainings, Masterminding, OneonOne, Public Speaking, Seminars, Workshop" />

    <!--====== TITLE TAG ======-->
    <title>Hussein Hassan - Leadership Spotlighting </title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/stellarnav.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="single-page">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area single-page" id="home">
        <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="header-top-area">
              <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#home" class="navbar-brand"><h3 style="color: orange">HUSSEIN HASSAN</h3></a>
                        </div>
                        <div class="search-and-language-bar pull-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i></a></li>
                                <li class="search-box"><i class="fa fa-search"></i></li>
                                <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                <li class="select-language">
                                    <select name="#" id="#">
                                    <option selected value="End">ENG</option>
                                    <option value="ARA">ARA</option>
                                    <option value="CHI">CHI</option>
                                </select>
                                </li>
                            </ul>
                            <form action="#" class="search-form">
                                <input type="search" name="search" id="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="https://husseinhassan.org/">home</a></li>
                                <li><a href="/about">about</a>      
                                </li>
                                <li><a href="/service">Service</a>
                                    
                                </li>

                                <li><a href="/blog">Blog</a>
                                    
                                </li>
                                <li><a href="/payment">Payment</a></li>
                                <li><a href="/contact">Contact</a></li>
                                <li><a href="https://husseinhassan.org:2096/">mails</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
        <div class="welcome-area">
            <div class="welcome-area-bg"></div>
            <div class="container">
                <div class="row flex-v-center">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="welcome-text text-center">
                            <h1>Successfully Sent</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--END TOP AREA-->

<?php 
    if(isset($_POST['submit'])){
       $name = $_POST['name'];
        $service = $_POST['service'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        
       
        $to = "info@husseinhassan.org";
        $subject ="Registration Email of: ".$service ." Email subject is: ".$subject;
        $message ="My Name is : ".$name. " of Email: ".$email." and Telephone". $tel." The Following is my message: ".$message;
        $headers ="From: ".$email;
         if(mail($to,$subject,$message,$headers)){
            
          echo " <b>Message Sent. Thank You $name  for your Message.<b>";
}

else {
    echo "Not Sent";
    
}

       


    }
    else
    {
        echo "try again";
    }

 ?>


 <!--FOOER AREA-->
    <div class="footer-area dark-bg">
        <div class="footer-area-bg"></div>
       <br>
        <div class="footer-bottom-area wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget footer-about">
                            <h3>About Us</h3>
                            <p>Expand your sphere of influence and your level of effectiveness. Learn more about Hussien Hassan...<a href="about.html">Learn More</a></p>
                            <ul>
                                <li><i class="fa fa-phone"></i> <a href="callto:+254 722 57333">+254 732 880 599</a></li>
                                <li><i class="fa fa-phone"></i> <a href="mailto:info@husseinhassan.org">info@husseinhassan.org | husssein@husseinhassan.org</a></li>
                                <li><i class="fa fa-map-marker"></i> KICC, 8th Floor, Office No: 708.<br>P.O Box 123 Nairobi- Kenya</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget twitter-widget">
                            <h3>Latest Tweets</h3>
                            <ul>
                                <li>
                                    <div class="twitter-icon"><i class="fa fa-phone"></i></div>
                                    <div class="tweet-detail">
                                        <p>Regiser to our services so that you can understand more on how to over come your fears.</p>
                                        <a href="#" class="tweet-meta" style="color: orange">5 Miniutes Ago</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="twitter-icon"><i class="fa fa-phone"></i></div>
                                    <div class="tweet-detail">
                                        <p>Enrollment to classes is ongoing. <a href="/register" style="color: red">registration</a> is on..</p>
                                        <a href="#" class="tweet-meta" style="color: orange">5 Miniutes Ago</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget list-widget">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="faqs">FAQS</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget instafeed-widget">
                            <h3>Customer Service</h3>
                            <ul>
                                <li><a href="#"><img src="img/slider/service-01.png" alt=""></a></li>
                                <li><a href="#"><img src="img/slider/service-02.png" alt=""></a></li>
                                <li><a href="#"><img src="img/slider/service-03.png" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/6.jpg" alt=""></a></li>
                            </ul>
                            <p>
                                
                                Youtube: Hussein Hassan Safeway <br>
                                Facebook @hussein Hassan <br>
                                Twitter @husseinsafeway<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-border" > </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="footer-copyright wow fadeIn">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  by <a href="https://softwaretechn.co.ke" target="_blank"><B style="color: red">Software Technology Kenya</B></a></p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="footer-social-bookmark text-right wow fadeIn">
                            <ul class="social-bookmark">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="js/vendor/jquery.easing.1.3.js"></script>
    <script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/vendor/jquery.appear.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/stellarnav.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="js/main.js"></script>
</body>

</html>

