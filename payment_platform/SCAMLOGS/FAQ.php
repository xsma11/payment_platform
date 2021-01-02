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
    <title>DEERHOST | Template</title>

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
    <header class="header-section header-normal">
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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__option">
                        <a href="./index.php"><span class="fa fa-home"></span> Support</a>
                        <span>FAQ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

   

   

    <!-- Question Section Begin -->
    <section class="question-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Have a questions?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="question__accordin">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading active">
                                    <a class="active" data-toggle="collapse" data-target="#collapseOne">
                                        How do I cancel and delete my account?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                            facilisis. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseTwo">
                                        Can I get my website listed in Google?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                            facilisis. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseThree">
                                        Can I run a business?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                            facilisis. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFour">
                                        Does ArkaHost offer phone support?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                            facilisis. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="#" class="question-form">
                        <input type="text" placeholder="Name">
                        <input type="text" placeholder="Email">
                        <textarea placeholder="Question"></textarea>
                        <button type="submit" class="site-btn">Send question</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Question Section End -->


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