<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?= $this->renderSection('title') ?>

    <link
        href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700ii%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic"
        rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/ion.rangeSlider.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/ion.rangeSlider.skinFlat.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/jquery.bxslider.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/jquery.fancybox.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/flexslider.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/swiper.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/media.css')?>">
    <style>
        .inactiveLink {
            pointer-events: none;
            cursor: default;
        }
    </style>

</head>

<body>
    <!-- Header - start -->
    <header class="header">
        <!-- Logo, Shop-menu - start -->
        <div class="header-middle">
            <div class="container header-middle-cont">
                <div class="toplogo">
                    <a href="<?php echo base_url('/')?>">
                        <img src="<?php echo base_url('img/logo.png')?>"
                            alt="AllStore - MultiConcept eCommerce Template">
                    </a>
                </div>
                <div class="shop-menu">
                    <ul>

                        <?php if(session()->get('logged_in')==TRUE) : ?>
                        <li>
                            <div class="h-cart">
                                <i class="fa fa-user"></i>
                                <span class="shop-menu-ttl"><?= session()->get('name') ;?></span>
                            </div>
                        </li>
                        <li>
                            <div class="h-cart">
                                <a href="<?php echo base_url('/cart')?>">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="shop-menu-ttl">Cart</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="h-cart">
                                <a href="<?php echo base_url('/logout')?>">
                                    <i class="fa fa-sign-out"></i>
                                    <span class="shop-menu-ttl">Logout</span>
                                </a>
                            </div>
                        </li>
                        <?php elseif (session()->get('logged_in')==FALSE) : ?>
                        <li class="topauth">
                            <a href="<?php echo base_url('/auth')?>">
                                <i class="fa fa-lock"></i>
                                <span class="shop-menu-ttl">Registration</span>
                            </a>
                            <a href="<?php echo base_url('/auth')?>">
                                <span class="shop-menu-ttl">Login</span>
                            </a>
                        </li>
                        <?php endif ?>

                    </ul>
                </div>
            </div>
        </div>
        <!-- Logo, Shop-menu - end -->

        <!-- Topmenu - start -->
        <div class="header-bottom">
            <div class="container">
                <nav class="topmenu">
                    <!-- Catalog menu - start -->
                    <div class="topcatalog">
                        <a class="topcatalog-btn inactiveLink" href="#"><span>Explore</span> catalog</a>
                        <?php 
                        $cat= new App\Models\Category();
                        $cats = $cat->findAll();
                    ;?>
                        <ul class="topcatalog-list">
                            <?php foreach ($cats as $c) : ?>
                            <li>
                                <a href="<?php echo base_url('catalog/'.$c['c_id'])?>">
                                    <?= $c['category'] ?>
                                </a>
                            </li>
                            <?php endforeach ?>

                        </ul>
                    </div>
                    <!-- Catalog menu - end -->

                    <!-- Main menu - start -->
                    <button type="button" class="mainmenu-btn">Menu</button>
                    <ul class="mainmenu">
                        <li>
                            <a href="<?php echo base_url('/')?>" class="active">
                                Home
                            </a>
                        </li>
                    </ul>
                    <div class="topsearch">
                        <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                        <form class="topsearch-form" action="<?php echo base_url('/search')?>">
                            <input type="text" name="keyword" placeholder="Search products">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Search - end -->
                </nav>
            </div>
        </div>
        <!-- Topmenu - end -->
    </header>
    <?= $this->renderSection('content') ?>

    <!-- Footer - start -->
    <footer class="footer-wrap">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="companyinfo">
                        <a href="<?php echo base_url('/')?>">
                            <img src="<?php echo base_url('img/logo-b.png')?>"
                                alt="AllStore - MultiConcept eCommerce Responsive HTML5 Template">
                            eShopppu - Your trusted partner
                        </a>
                    </div>
                    <div class="container f-menu-list">
                        <div class="row">
                            <div class="f-menu">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="<?php echo base_url('/')?>">Home</a></li>
                                    <?php foreach ($cats as $c) : ?>
                                    <li><a href="<?php echo base_url('catalog/'.$c['c_id'])?>"><?= $c['category'] ?></a>
                                    </li>
                                    <?php endforeach ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="footer-copyright">
                        <i><a href="https://themeforest.net/user/real-web?ref=real-web">Real-Web</a></i> © Copyright
                        2017
                    </div>
                    <div class="footer-copyright">
                        <i>PBKKA2021</a></i> Copyright 2021
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- Footer - end -->


    <!-- jQuery plugins/scripts - start -->
    <?= $this->renderSection('scripts') ?>
    <script src="<?php echo base_url('js/jquery-1.11.2.min.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery.bxslider.min.js') ?>"></script>
    <script src="<?php echo base_url('js/fancybox/fancybox.js') ?>"></script>
    <script src="<?php echo base_url('js/fancybox/helpers/jquery.fancybox-thumbs.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery.flexslider-min.js') ?>"></script>
    <script src="<?php echo base_url('js/swiper.jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery.waypoints.min.js') ?>"></script>
    <script src="<?php echo base_url('js/progressbar.min.js') ?>"></script>
    <script src="<?php echo base_url('js/ion.rangeSlider.min.js') ?>"></script>
    <script src="<?php echo base_url('js/chosen.jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('js/jQuery.Brazzers-Carousel.js') ?>"></script>
    <script src="<?php echo base_url('js/plugins.js') ?>"></script>
    <script src="<?php echo base_url('js/main.js') ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhAYvx0GmLyN5hlf6Uv_e9pPvUT3YpozE"></script>
    <script src="<?php echo base_url('js/gmap.js') ?>"></script>
    <!-- jQuery plugins/scripts - end -->

</body>

</html>