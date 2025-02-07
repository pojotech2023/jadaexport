<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>JADA EXPORTS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="../assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="../assets/css/vendor/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/vendor/plaza-icon.css">
    <link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css">
    
    <!-- Plugin CSS Files -->
    <link rel="stylesheet" href="../assets/css/plugin/slick.css">
    <link rel="stylesheet" href="../assets/css/plugin/material-scrolltop.css">
    <link rel="stylesheet" href="../assets/css/plugin/price_range_style.css">
    <link rel="stylesheet" href="../assets/css/plugin/in-number.css">
    <link rel="stylesheet" href="../assets/css/plugin/venobox.min.css">
    <link rel="stylesheet" href="../assets/css/plugin/jquery.lineProgressbar.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css"/>
    <link rel="stylesheet" href="assets/css/plugin/plugins.min.css"/>
    <link rel="stylesheet" href="assets/css/main.min.css"> -->

    <!-- Main Style CSS File -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- ::::::  Start Header Section  ::::::  -->
    <header>
        <div class="header d-none d-lg-block">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header__top-content d-flex justify-content-between align-items-center">
                                <div class="header__top-content--left">
                                    <span>Delivery: Take advantage of our time to save event</span>
                                </div>
                                <ul class="header__top-content--right user-set-role d-flex">
                                    <li class="user-info pos-relative">
                                        <a class="user-set-role__button" href="mailto://info@jadaexports.com" >Mail: info@jadaexports.com</a>
                                    </li>
                                    <li class="user-info pos-relative">
                                        <a class="user-set-role__button" href="cellNo:+91 9944900621" >Cell No:+91 9944900621</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Header Center area -->
            <div class="header__center sticky-header p-tb-10">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <div class="header__logo">
                                <a href="../index.php" class="header__logo-link img-responsive">
                                    <img class="header__logo-img img-fluid" src="../assets/img/logo/logo-1.jpeg" alt="">
                                </a>
                            </div>
                            <div class="header-menu">
                                <nav>
                                    <ul class="header__nav">
                                        <li class="header__nav-item pos-relative">
                                            <a href="../index.php" class="header__nav-link">Home</a>
                                        </li> 
                                        <li class="header__nav-item pos-relative">
                                            <a href="#" class="header__nav-link">Abouts Us<i class="fal fa-chevron-down"></i></a>
                                            <ul class="dropdown__menu pos-absolute">
                                                <!-- <li class="dropdown__list"><a href="#" class="mega-menu__link">Company director</a></li>  -->
                                                <li class="dropdown__list"><a href="../rc.php" class="mega-menu__link">certificate</a></li>    
                                                <li class="dropdown__list"><a href="../vision.php" class="mega-menu__link">vision</a></li> 
                                                <li class="dropdown__list"><a href="../mission.php" class="mega-menu__link">mission</a></li>  
                                            </ul>
                                        </li>
                                        <li class="header__nav-item pos-relative">
                                            <a href="../product.php" class="header__nav-link">Products</a>
                                        </li>
                                        
                                        <!-- <li class="header__nav-item pos-relative">
                                            <a href="#" class="header__nav-link">Protfolio</a>
                                        </li> -->
                                        <li class="header__nav-item pos-relative">
                                            <a href="../contact.php" class="header__nav-link">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Header Center area -->
        </div> <!--  End Large Header Section  -->

        <!--  Start Mobile Header Section   -->
        <div class="header__mobile mobile-header--1 d-block d-lg-none p-tb-20">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <ul class="header__mobile--leftside d-flex align-items-center justify-content-start">
                            <li>
                                <div class="header__mobile-logo">
                                    <a href="../index.php" class="header__mobile-logo-link">
                                        <img src="../assets/img/logo/logo-1.jpeg" alt="" class="header__mobile-logo-img">
                                    </a>
                                </div>
                            </li>
                        </ul>
    
                        <ul class="header__mobile--rightside header__user-action-icon  d-flex align-items-center justify-content-end"> 
                            <li><a href="#offcanvas-mobile-menu" class="offcanvas-toggle"><i class="far fa-bars"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--  Start Mobile Header Section   -->

        <!--  Start Mobile-offcanvas Menu Section   -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <div class="offcanvas__top">
                <span class="offcanvas__top-text"></span>
                <button class="offcanvas-close"><i class="fal fa-times"></i></button>
            </div>
            
            <div class="offcanvas-inner">
                <div class="offcanvas-menu">
                    <ul>
                        <li><a href="../index.php"><span>Home</span></a></li>
                        <li>
                            <a href="#"><span>About us</span></a>
                            <ul class="sub-menu">
                                <li><a href="#">Company Director</a></li>
                                <li><a href="../rc.php">Certificate</a></li>
                                <li><a href="../vision.php">Vision</a></li>
                                <li><a href="../mission.php">Mission</a></li>
                            </ul>
                        </li>
                        <li><a href="../product.php">Product</a></li>
                        <li><a href="#">Protfolio</a></li>
                        <li><a href="../contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div> <!--  End Mobile-offcanvas Menu Section   -->    
        <div class="offcanvas-overlay"></div>
    </header>  <!-- :::::: End Header Section ::::::  -->  