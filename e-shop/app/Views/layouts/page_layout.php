<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?= $this->renderSection('title') ?>

    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700ii%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">

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

</head>
<body>
<!-- Header - start -->
<header class="header">
    <!-- Logo, Shop-menu - start -->
    <div class="header-middle">
        <div class="container header-middle-cont">
            <div class="toplogo">
                <a href="<?php echo base_url('/')?>">
                    <img src="<?php echo base_url('img/logo.png')?>" alt="AllStore - MultiConcept eCommerce Template">
                </a>
            </div>
            <div class="shop-menu">
                <ul>
                    <li class="topauth">
                        <a href="<?php echo base_url('/auth')?>">
                            <i class="fa fa-lock"></i>
                            <span class="shop-menu-ttl">Registration</span>
                        </a>
                        <a href="<?php echo base_url('/auth')?>">
                            <span class="shop-menu-ttl">Login</span>
                        </a>
                    </li>
                    <li>
                        <div class="h-cart">
                            <a href="cart.html">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="shop-menu-ttl">Cart</span>
                                (<b>0</b>)
                            </a>
                        </div>
                    </li>
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
                    <a class="topcatalog-btn" href="<?php echo base_url('catalog')?>"><span>All</span> catalog</a>
                    <?php 
                        $cat= new App\Models\Category();
                        $cats = $cat->findAll();
                    ;?>
                    <ul class="topcatalog-list">
                        <?php foreach ($cats as $c) : ?>
                            <li>
                                <a href="<?php echo base_url('catalog')?>">
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
                    <!-- <li class="menu-item-has-children">
                        <a href="catalog-list.html">
                            Catalog <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="catalog-list.html">
                                    Catalog List - Style 1
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="mainmenu-more">
                        <span>...</span>
                        <ul class="mainmenu-sub"></ul>
                    </li>
                </ul>
                <!-- Main menu - end -->
                <!-- Search - start -->
                <div class="topsearch">
                    <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                    <form class="topsearch-form" action="#">
                        <input type="text" placeholder="Search products">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- Search - end -->
            </nav>
        </div>
    </div>
    <!-- Topmenu - end -->
</header>
<!-- Header - end -->

<?= $this->renderSection('content') ?>

<!-- Footer - start -->
<footer class="footer-wrap">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="companyinfo">
                    <a href="<?php echo base_url('/')?>">
                        <img src="<?php echo base_url('img/logo-b.png')?>" alt="AllStore - MultiConcept eCommerce Responsive HTML5 Template">
                        eShopppu - Your trusted partner
                    </a>
                </div>
                <div class="f-block-list">
                    <div class="f-block-wrap">
                        <div class="f-block">
                            <a href="#" class="f-block-btn" data-id="#f-block-modal-4">
                                <div class="iframe-img">
                                    <img src="http://placehold.it/300x127" alt="Our address">
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </a>
                            <p class="f-info-ttl">Our address</p>
                            <p>Spain, Madrid, 45</p>
                        </div>
                    </div>
                </div>
                <div class="stylization f-block-modal f-block-modal-map" id="f-block-modal-4">
                    <div class="allstore-gmap">
                        <div class="marker" data-zoom="15" data-lat="-37.81485261872975" data-lng="144.95655298233032" data-marker="img/marker.png">534-540 Little Bourke St, Melbourne VIC 3000, Australia</div>
                    </div>
                </div>
                <div class="f-delivery">
                    <img src="<?php echo base_url('img/map.png') ?>" alt="">
                    <h4>Free delivery in London</h4>
                    <p>We will deliver within 1 hour</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container f-menu-list">
        <div class="row">
            <div class="f-menu">
                <h3>
                    About us
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="<?php echo base_url('/')?>">Home</a></li>
                    <li><a href="<?php echo base_url('catalog')?>">Catalog</a></li>
                    <!-- <li><a href="contacts.html">Contacts</a></li> -->
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <ul class="social-icons nav navbar-nav">
                    <li>
                        <a href="http://facebook.com/" rel="nofollow" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://google.com/" rel="nofollow" target="_blank">
                            <i class="fa fa-google-plus') ?>"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://twitter.com/" rel="nofollow" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://vk.com/" rel="nofollow" target="_blank">
                            <i class="fa fa-vk"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://instagram.com/" rel="nofollow" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
                <div class="footer-copyright">
                    <i><a href="https://themeforest.net/user/real-web?ref=real-web">Real-Web</a></i> © Copyright 2017
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