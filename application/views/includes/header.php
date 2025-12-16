<!doctype html>
<html lang="en" data-bs-theme="<?=$theme??"dark"?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kokulife</title>
        <meta name="description" content="DİREKT ÜRETİCİDEN BAMBU KOKU VE KOKUYA DAİR HER ŞEY.">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_ENV['BASE_URL'];?>assets/images/kokulife-favicon.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
          rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/vendors/lightgallery/css/lightgallery-bundle.min.css">
        <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/vendors/animate/animate.min.css">
        <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/vendors/slick/slick.css">
        <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/vendors/mapbox-gl/mapbox-gl.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/theme.css">

        <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/style.css?v=1.8.1">
        <style>
            #header .nav-item > a{
                white-space: nowrap;
            }
            .nav-bar-custom{
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            @media (max-width: 800px) {
                .nav-bar-custom{
                    z-index: 111;
                    background: #000;
                }
            }
        </style>
    </head>
    <body>
        <header id="header" class="header header-sticky header-sticky-smart disable-transition-all z-index-5">
            <div class="topbar" style="background-color: #DAFAF4;">
                <div class="container">
                    <p class="mb-0 text-dark text-center p-4 fs-14px fw-medium ls-1 text-uppercase">
                        Kokulife ile sağlıklı ve mutlu bir yaşamın kapılarını aralayın!
                    </p>
                </div>
            </div>
            <div class="header-above mb-3">
                <div class="container d-xl-block">
                    <div class="pt-8 d-flex">
                        <a href="<?php echo $_ENV['BASE_URL'];?>" class="navbar-brand px-8 py-4 mx-auto">
                            <img class="light-mode-img" src="<?php echo $_ENV['BASE_URL'];?>assets/cam-demo-images/koku-life-logo.svg" width="179"  alt="Kokulife Logo">
                            <img class="dark-mode-img" src="<?php echo $_ENV['BASE_URL'];?>assets/cam-demo-images/koku-life-logo-white.svg" width="179"  alt="Kokulife Logo">
                        </a>
                    </div>
                </div>
            </div>
            <div class="sticky-area">
                <div class="main-header nav navbar bg-body navbar-light navbar-expand-xl py-6 py-xl-0">
                    <div class="container">
                        
                        <div class="d-xl-flex nav-bar-custom">
                            <ul class="navbar-nav">
                                <li class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10">
                                    <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
                                        href="<?php echo $_ENV['BASE_URL'];?>"  id="menu-item-home" aria-haspopup="false" aria-expanded="false">Anasayfa</a>
                                    
                                </li>
                                <li class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10">
                                    <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
                                        href="<?php echo CATEGORY_LIST;?>"  id="menu-item-home" aria-haspopup="false" aria-expanded="false">Kategoriler</a>
                                    
                                </li>
                                <li class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10">
                                    <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
                                        href="<?php echo PRODUCT_LIST;?>products"  id="menu-item-home" aria-haspopup="false" aria-expanded="false">Ürünler</a>
                                    
                                </li>
                                <li class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10">
                                    <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
                                        href="<?php echo PAGE_DETAIL.'kullanici-yorumlari';?>"  id="menu-item-home" aria-haspopup="false" aria-expanded="false">Kullanıcı Yorumları</a>
                                    
                                </li>
                                <li class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10">
                                    <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
                                        href="<?php echo PAGE_DETAIL.'hakkimizda';?>"  id="menu-item-home" aria-haspopup="false" aria-expanded="false">Hakkımızda</a>
                                    
                                </li>
                                <li class="nav-item transition-all-xl-1 py-xl-7 py-0 me-xxl-12 me-xl-10">
                                    <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-semibold ls-1 fs-6 fs-xl-15px text-body-emphasis"
                                        href="<?php echo PAGE_DETAIL.'iletisim';?>"  id="menu-item-home" aria-haspopup="false" aria-expanded="false">İletişim</a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>


<!--


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kokulife Oda Kokuları</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_ENV['BASE_URL'];?>assets/images/kokulife-favicon.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/chosen.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/lightbox.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/js/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/jquery.scrollbar.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/mobile-menu.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/style.css?v=1.8.1">
    <style>
        .src i{
            font-size:20px;
        }
    </style>
</head>
<body class="home">
<header class="header style7">
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-lg-2 col-sm-2 col-md-3 col-xs-7 col-ts-12 header-element">
                    <div class="logo">
                        
                    </div>
                </div>
                <div class="col-lg-8 col-sm-8 col-md-6 col-xs-5 col-ts-12" style="text-align:center;">
                    <a href="<?php echo $_ENV['BASE_URL'];?>">
                        <img src="<?php echo $_ENV['BASE_URL'];?>assets/cam-demo-images/koku-life-logo.svg" alt="img" width="280">
                    </a>
                </div>
                <div class="col-lg-2 col-sm-2 col-md-3 col-xs-12 col-ts-12">
                    <div class="header-control">
                        <a class="menu-bar mobile-navigation menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav-container">
        <div class="container">
            <div class="header-nav-wapper main-menu-wapper">
                <div class="header-nav">
                    <div class="container-wapper" style="display: flex;align-items: center;justify-content: flex-end;">
                        <ul class="stelina-clone-mobile-menu stelina-nav main-menu " id="menu-main-menu">
                            <li class="menu-item">
                                <a href="<?php echo $_ENV['BASE_URL'];?>" class="stelina-menu-item-title" title="Home">Anasayfa</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo CATEGORY_LIST;?>" class="stelina-menu-item-title" title="Shop">Kategoriler</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo PRODUCT_LIST;?>" class="stelina-menu-item-title" title="Shop">Ürünler</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo PAGE_DETAIL.'kullanici-yorumlari';?>" class="stelina-menu-item-title" title="About">KULLANICI YORUMLARI</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo PAGE_DETAIL.'hakkimizda';?>" class="stelina-menu-item-title" title="About">Hakkımızda</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo PAGE_DETAIL.'iletisim';?>" class="stelina-menu-item-title" title="About">İLETİŞİM</a>
                            </li>
                            
                            <li class="menu-item">
                                <a target="_blank" href="https://wa.me/+905425441711" class="stelina-menu-item-title" title="About">
                                    <img src="<?php echo $_ENV['BASE_URL'];?>assets/cam-demo-images/whatsapp.svg" width="30px">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="header-device-mobile">
    <div class="wapper">
        <div class="item mobile-logo">
            <div class="logo">
                <a href="<?php echo $_ENV['BASE_URL'];?>">
                    <img src="<?php echo $_ENV['BASE_URL'];?>assets/cam-demo-images/koku-life-logo.svg" alt="img" width="240">
                </a>
            </div>
        </div>
        
        <div class="item menu-bar">
            <a class=" mobile-navigation  menu-toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</div>
-->