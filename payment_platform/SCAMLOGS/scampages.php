<?php


session_start();

if(!isset($_SESSION['user_in'])){
header('location:../login/login.php');


}


?>




<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Deerhost Template">
    <meta name="keywords" content="Deerhost, unica, creative, php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SCAMLOGS</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

        <!-- Offcanvas Menu Begin -->
    <div class="offcanvas__menu__overlay"></div>
    <div class="offcanvas__menu__wrapper">
        <div class="canvas__close">
            <span class="fa fa-times-circle-o"></span>
        </div>
        <div class="offcanvas__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                        <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="#">Banks Logs</a>
                                <ul class="dropdown">
                                    <li><a href="./usa%20banks.php">USA BANKS</a></li>
                                      
                                    
                                    <li><a href="./uk banks.php">UK BANKS</a></li>
                                    <li><a href="./canadian banks.php">CANADIAN BANKS</a></li>
                                </ul>
                            </li>
                            <li><a href="./Shop With Script.php">Shop With Script</a></li>
                            <li><a href="#">Scam Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./EMAIL SCAMPAGES.php">Email Scam Pages</a></li>
                                    <li><a href="./scampages.php">Scam pages</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="#">Support</a>
                                <ul class="dropdown">
                                    <li><a href="./FAQ.php">FAQ</a></li>
                                    <li><a href="./TICKETS.php">TICKETS</a></li>
                                    <li><a href="./.php">CHANGE PASWORD</a></li>
                                    
                                </ul>
                            </li>
                            
                            <li><a href="./top%20up.php">$.TOP UP</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <ul>
                 <li><a href="#"><span class="icon_chat_alt"></span> Live chat</a></li>
                                <li><a href="#"><span class="fa fa-user"></span> Logout</a></li>
            </ul>
        </div>
        <div class="offcanvas__info">
            
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header__info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__info-left">
                            <ul>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__info-right">
                            <ul>
                                <li><a href="#"><span class="icon_chat_alt"></span> Live chat</a></li>
                                <li><a href="#"><span class="fa fa-user"></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="header__menu">
                        <ul>
                           <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="#">Banks Logs</a>
                                <ul class="dropdown">
                                    <li><a href="./usa%20banks.php">USA BANKS</a></li>
                                      
                                    
                                    <li><a href="./uk banks.php">UK BANKS</a></li>
                                    <li><a href="./canadian banks.php">CHANADIAN BANKS</a></li>
                                </ul>
                            </li>
                            <li><a href="./Shop With Script.php">Shop With Script</a></li>
                            <li><a href="#">Scam Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./EMAIL SCAMPAGES.php">Email Scam Pages</a></li>
                                    <li><a href="./scampages.php">Scam pages</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="#">Support</a>
                                <ul class="dropdown">
                                    <li><a href="./FAQ.php">FAQ</a></li>
                                    <li><a href="./TICKETS.php">TICKETS</a></li>
                                    <li><a href="./.php">CHANGE PASWORD</a></li>
                                    
                                </ul>
                            </li>
                            
                            <li><a href="./top%20up.php">$.TOP UP</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header End -->
    

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                               
                                <h2>Welcome !!!!!! <br /> SCAMPAGE </h2>
                               
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img">
                                <img src="img/hero/hero-right.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                
                                <h2>Bank Scampage<br /></h2>
                               
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img">
                                <img src="img/hero/hero-right.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

   



<!-- Upcoming Music Show -->
<div class="section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <div class="section-header text-center">
                            <h3 class="section-title">Bank Scampage</h3>
                           
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table show-table table-borderless">
                                 <th>  SCAMPAGE NAME  </th>
                                   
                                    <th>DETAILS</th>
                                    
                                    <th>PRICE</th>
                                  
                                        <th>BUY NOW </th>
                                  
                                   
                                   
                                    
                                <tr>
                                    
                                      <td class="show-date">
                                        <span class="date"></span>
                                        <span class="day">Lloyds Scampage</span>
                                    </td>
                                    
                                    <td class="show-hall">
                                        <span class="hall-name">Online Access, Email Access, Debit card info.....</span>
                                    </td>
                                    
                                   
                                    
                                    
                                  
                                    
                                    
                                     <td class="show-name">
                                       30 USD
                                    </td>
                                    
                                    
                                  
                                    
                                    <td class="show-ticket">
                                        <a class="btn btn-border btn-black" href="top%20up.php">Buy Ticket</a>
                                    </td>
                                </tr>
                                

                                
                                <tr>
                                    
                                      <td class="show-date">
                                        <span class="date"></span>
                                        <span class="day">Chase Scampage</span>
                                    </td>
                                    
                                    <td class="show-hall">
                                        <span class="hall-name">Online Access, Email Access, Debit card info.....</span>
                                    </td>
                                    
                                   
                                    
                                    
                                  
                                    
                                    
                                     <td class="show-name">
                                       30 USD
                                    </td>
                                    
                                    
                                  
                                    
                                    <td class="show-ticket">
                                        <a class="btn btn-border btn-black" href="#">Buy Ticket</a>
                                    </td>
                                </tr>
                                
                                
                                <tr>
                                    
                                      <td class="show-date">
                                        <span class="date"></span>
                                        <span class="day">Hsbc Scampage</span>
                                    </td>
                                    
                                    <td class="show-hall">
                                        <span class="hall-name">Online Access, Email Access, Debit card info.....</span>
                                    </td>
                                    
                                   
                                    
                                    
                                  
                                    
                                    
                                     <td class="show-name">
                                       30 USD
                                    </td>
                                    
                                    
                                  
                                    
                                    <td class="show-ticket">
                                        <a class="btn btn-border btn-black" href="top%20up.php">Buy Ticket</a>
                                    </td>
                                </tr>
                                
                                
                                <tr>
                                    
                                      <td class="show-date">
                                        <span class="date"></span>
                                        <span class="day">BMO Scampage</span>
                                    </td>
                                    
                                    <td class="show-hall">
                                        <span class="hall-name">Online Access, Email Access, Debit card info.....</span>
                                    </td>
                                    
                                   
                                    
                                    
                                  
                                    
                                    
                                     <td class="show-name">
                                       30 USD
                                    </td>
                                    
                                    
                                  
                                    
                                    <td class="show-ticket">
                                        <a class="btn btn-border btn-black" href="top%20up.php">Buy Ticket</a>
                                    </td>
                                </tr>
                                
                                
                                <tr>
                                    
                                      <td class="show-date">
                                        <span class="date"></span>
                                        <span class="day">Lloyds Scampage</span>
                                    </td>
                                    
                                    <td class="show-hall">
                                        <span class="hall-name">Online Access, Email Access, Debit card info.....</span>
                                    </td>
                                    
                                   
                                    
                                    
                                  
                                    
                                    
                                     <td class="show-name">
                                       30 USD
                                    </td>
                                    
                                    
                                  
                                    
                                    <td class="show-ticket">
                                        <a class="btn btn-border btn-black" href="top%20up.php">Buy Ticket</a>
                                    </td>
                                </tr>
                                
                                
                                <tr>
                                    
                                      <td class="show-date">
                                        <span class="date"></span>
                                        <span class="day">Boa Scampage</span>
                                    </td>
                                    
                                    <td class="show-hall">
                                        <span class="hall-name">Online Access, Email Access, Debit card info.....</span>
                                    </td>
                                    
                                   
                                    
                                    
                                  
                                    
                                    
                                     <td class="show-name">
                                       30 USD
                                    </td>
                                    
                                    
                                  
                                    
                                    <td class="show-ticket">
                                        <a class="btn btn-border btn-black" href="top%20up.php">Buy Ticket</a>
                                    </td>
                                </tr>
                                
                                
                                <tr>
                                    
                                      <td class="show-date">
                                        <span class="date"></span>
                                        <span class="day">Lloyds Scampage</span>
                                    </td>
                                    
                                    <td class="show-hall">
                                        <span class="hall-name">Online Access, Email Access, Debit card info.....</span>
                                    </td>
                                    
                                   
                                    
                                    
                                  
                                    
                                    
                                     <td class="show-name">
                                       30 USD
                                    </td>
                                    
                                    
                                  
                                    
                                    <td class="show-ticket">
                                        <a class="btn btn-border btn-black" href="top%20up.php">Buy Ticket</a>
                                    </td>
                                </tr>
                                

                               


                               

                                  
                          
                                

                             
                                
                               
                                
                              
                                
                      
                                
                                
                                
                                
                            </table>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Upcoming Music Show End -->



   
    <!-- Achievement Section Begin -->
    <section class="achievement-section set-bg spad" data-setbg="img/achievement-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="achievement__item">
                        <span class="fa fa-user-o"></span>
                        <h2 class="achieve-counter">2468</h2>
                        <p>Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="achievement__item">
                        <span class="fa fa-edit"></span>
                        <h2 class="achieve-counter">2468</h2>
                        <p>Domains</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="achievement__item">
                        <span class="fa fa-clone"></span>
                        <h2 class="achieve-counter">2468</h2>
                        <p>Server</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="achievement__item">
                        <span class="fa fa-cog"></span>
                        <h2 class="achieve-counter">2468</h2>
                        <p>Installs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Achievement Section End -->

    
    
    
  <div class="footer__text-copyright">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Scamlogs <i class="fa fa-heart" aria-hidden="true"></i>  <a href="" target="_blank"></a>
    </div>
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>