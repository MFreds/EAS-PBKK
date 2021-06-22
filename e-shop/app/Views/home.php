<?= $this->extend('layouts/page_layout') ?>

<!-- title -->
<?= $this->section('title') ?>
<title>eShopppu - Your trusted partner</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Main Content - start -->
<main>
    <section class="container">
        <!-- Slider -->
        <div class="fr-slider-wrap">
            <div class="fr-slider">
                <ul class="slides">
                    <li>
                        <img src="img/slider/slide1.jpg" alt="">
                        <div class="fr-slider-cont">
                            <h3>MEGA SALE -30%</h3>
                            <p>Winter collection for women's. <br>We all have choices for you. Check it out!</p>
                            <p class="fr-slider-more-wrap">
                                <a class="fr-slider-more" href="#">View collection</a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Popular Products -->
        <div class="fr-pop-wrap">
            <h3 class="component-ttl"><span>Popular products</span></h3>
            <ul class="fr-pop-tabs sections-show">
                <li><a data-frpoptab-num="1" data-frpoptab="#frpoptab-tab-1" href="#" class="active">All Categories</a></li>
                <li><a data-frpoptab-num="2" data-frpoptab="#frpoptab-tab-2" href="#">Women</a></li>
                <li><a data-frpoptab-num="3" data-frpoptab="#frpoptab-tab-3" href="#">Men</a></li>
                <li><a data-frpoptab-num="4" data-frpoptab="#frpoptab-tab-4" href="#">Kids</a></li>
                <li><a data-frpoptab-num="5" data-frpoptab="#frpoptab-tab-5" href="#">Shoes</a></li>
            </ul>
            <div class="fr-pop-tab-cont">
                <p data-frpoptab-num="1" class="fr-pop-tab-mob active" data-frpoptab="#frpoptab-tab-1">All Categories</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-1">
                    <ul class="slides">
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/250x350" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Go to detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Aspernatur excepturi rem</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                            <div class="prod-i-skuwrapcolor">
                                <ul class="prod-i-skucolor">
                                    <li class="bx_active"><img src="img/color/red.jpg" alt="Red"></li>
                                    <li><img src="img/color/blue.jpg" alt="Blue"></li>
                                </ul>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/277x250" alt="Aperiam tempore"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Aperiam tempore</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$75</b>
                            </p>
                        </li>
                    </ul>
                </div>
                <p data-frpoptab-num="2" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-2">Kids</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-2">
                    <ul class="slides">
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/250x350" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Go to detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Aspernatur excepturi rem</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                            <div class="prod-i-skuwrapcolor">
                                <ul class="prod-i-skucolor">
                                    <li class="bx_active"><img src="img/color/red.jpg" alt="Red"></li>
                                    <li><img src="img/color/blue.jpg" alt="Blue"></li>
                                </ul>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/250x361" alt="Non ex sapiente deserunt"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>

                                <div class="prod-sticker">
                                    <p class="prod-sticker-3">-30%</p><p class="prod-sticker-4 countdown" data-date="29 Jan 2017, 14:30:00"></p>
                                </div>
                            </div>
                            <h3>
                                <a href="product.html">Non ex sapiente deserunt</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$65</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/250x361" alt="Amet tempore unde"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Amet tempore unde</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$85</b>
                            </p>
                        </li>
                    </ul>
                </div>
                <p data-frpoptab-num="3" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-3">Women</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-3">
                    <ul class="slides">
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/250x302" alt="Amet tempore unde"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Amet tempore unde</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$165</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/250x327" alt="Perspiciatis dolor"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Go to detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Perspiciatis dolor</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$205</b>
                            </p>
                            <div class="prod-i-skuwrapcolor">
                                <ul class="prod-i-skucolor">
                                    <li class="bx_active"><img src="img/color/red.jpg" alt="Red"></li>
                                    <li><img src="img/color/blue.jpg" alt="Blue"></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <p data-frpoptab-num="4" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-4">Men</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-4">
                    <ul class="slides">
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/250x422" alt="Nisi provident atque"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Nisi provident atque</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$130</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/250x385" alt="Eveniet nobis minus possimus"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>

                                <div class="prod-sticker">
                                    <p class="prod-sticker-1">NEW</p>
                                </div>
                            </div>
                            <h3>
                                <a href="product.html">Eveniet nobis minus possimus</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$80</b>
                            </p>
                        </li>
                    </ul>
                </div>
                <p data-frpoptab-num="5" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-5">Shoes</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-5">
                    <ul class="slides">
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/252x250" alt="Nisi autem error"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Go to detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Nisi autem error</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$95</b>
                            </p>
                            <div class="prod-i-skuwrapcolor">
                                <ul class="prod-i-skucolor">
                                    <li class="bx_active"><img src="img/color/red.jpg" alt="Red"></li>
                                    <li><img src="img/color/blue.jpg" alt="Blue"></li>
                                </ul>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/316x250" alt="Tempora ea ratione vel"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>

                                <div class="prod-sticker">
                                    <p class="prod-sticker-2">HIT</p>
                                </div>
                            </div>
                            <h3>
                                <a href="product.html">Tempora ea ratione vel</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$120</b>
                            </p>
                        </li>
                    </ul>
                </div>
            </div><!-- .fr-pop-tab-cont -->
        </div><!-- .fr-pop-wrap -->

        <!-- Special offer -->
        <div class="discounts-wrap">
            <h3 class="component-ttl"><span>Special offer</span></h3>
            <div class="flexslider discounts-list">
                <ul class="slides">
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/120x120" alt="Dicta doloremque">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Dicta doloremque</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$115</b> <del>$135</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/99x120" alt="Similique delectus">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Similique delectus</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$105</b> <del>$120</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/75x120" alt="Adipisci nemo">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Adipisci nemo</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$70</b> <del>$90</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/65x120" alt="Ullam harum">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Ullam harum</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$55</b> <del>$75</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/78x120" alt="Similique delectus">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Similique delectus</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$135</b> <del>$155</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/81x120" alt="Туфли Dr.Koffer">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Туфли Dr.Koffer</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$190</b> <del>$210</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/117x120" alt="Quod consequatur">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Quod consequatur</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$120</b> <del>$140</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/80x120" alt="Dolore fugit">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Dolore fugit</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$80</b> <del>$95</del>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="discounts-info">
                <p>Special offer!<br>Limited time only</p>
                <a href="catalog-list.html">Shop now</a>
            </div>
        </div>
        <!-- Latest news -->
        <div class="posts-wrap">
            <div class="posts-list">
                <div class="posts-i">
                    <a class="posts-i-img" href="post.html">
                        <span style="background: url(http://placehold.it/354x236)"></span>
                    </a>
                    <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>30</span> Jan</time>
                    <div class="posts-i-info">
                        <a href="blog.html" class="posts-i-ctg">Reviews</a>
                        <h3 class="posts-i-ttl">
                            <a href="post.html">Animi quaerat at</a>
                        </h3>
                    </div>
                </div>
                <div class="posts-i">
                    <a class="posts-i-img" href="post.html">
                        <span style="background: url(http://placehold.it/354x236)"></span>
                    </a>
                    <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>29</span> Jan</time>
                    <div class="posts-i-info">
                        <a href="blog.html" class="posts-i-ctg">Articles</a>
                        <h3 class="posts-i-ttl">
                            <a href="post.html">Ex atque commodi</a>
                        </h3>
                    </div>
                </div>
                <div class="posts-i">
                    <a class="posts-i-img" href="post.html">
                        <span style="background: url(http://placehold.it/354x236)"></span>
                    </a>
                    <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>25</span> Jan</time>
                    <div class="posts-i-info">
                        <a href="blog.html" class="posts-i-ctg">News</a>
                        <h3 class="posts-i-ttl">
                            <a href="post.html">Hic quod maxime deserunt</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials -->
        <div class="reviews-wrap">
            <div class="reviewscar-wrap">
                <div class="swiper-container reviewscar">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Corrupti velit, vero esse, aperiam error magni illum quos, accusantium debitis et possimus recusandae tempora ad itaque dolorem veniam non voluptatem impedit iste? Dicta doloremque hic porro aspernatur. Dolores eligendi similique, cumque, eius veritatis</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-container reviewscar-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Aureole Jayde">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Aureole Jayde</a></h3>
                            <p class="reviewscar-post">Director</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Benjy Darrin">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Benjy Darrin</a></h3>
                            <p class="reviewscar-post">Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Main Content - end -->
<?= $this->endSection() ?>