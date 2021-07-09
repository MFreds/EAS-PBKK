<?= $this->extend('layouts/page_layout') ?>

<!-- title -->
<?= $this->section('title') ?>
<title>eShopppu - Your trusted partner</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Main Content - start -->
<main>
    <section class="container">
        <!-- Popular Products -->
        <div class="fr-pop-wrap">
            <h3 class="component-ttl"><span>New products</span></h3>
            <ul class="fr-pop-tabs sections-show">
                <li><a data-frpoptab-num="0" data-frpoptab="#frpoptab-tab-0" href="#" class="active">All Categories</a></li>
                <?php foreach ($categories as $c) : ?>
                    <li><a data-frpoptab-num="<?= $c['c_id']?>" data-frpoptab="#frpoptab-tab-<?= $c['c_id']?>" href="<?= $c['slug'] ?>"><?= $c['category'] ?></a></li>
                <?php endforeach ?>
            </ul>
            <div class="fr-pop-tab-cont">
                <p data-frpoptab-num="0" class="fr-pop-tab-mob active" data-frpoptab="#frpoptab-tab-0">All Categories</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-0">
                    <ul class="slides">
                        <?php foreach ($items as $item) : ?>
                            <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="<?php echo base_url('product/'.$item['i_id'])?>" class="prod-i-img"><!-- NO SPACE --><img src="<?php echo base_url('uploads/'.$item['path'])?>" alt="<?= $item['product_name'] ;?>"><!-- NO SPACE --></a>
                                <!-- <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p> -->
                                <p class="prod-i-addwrap">
                                    <a href="<?php echo base_url('product/'.$item['i_id'])?>" class="prod-i-add">Go to detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="<?php echo base_url('product/'.$item['i_id'])?>"><?= $item['product_name'] ?></a>
                            </h3>
                            <p class="prod-i-price">
                                <b>Rp <?= $item['price'] ;?></b>
                            </p>
                        </li>
                        <?php endforeach ?>
                        
                        
                    </ul>
                </div>
                <?php foreach ($categories as $c) : ?>
                    <p data-frpoptab-num="<?= $c['c_id']?>" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-<?= $c['c_id']?>"><?= $c['category']?></p>
                    <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-<?= $c['c_id']?>">
                        <ul class="slides">
                            <?php foreach ($items as $item) : ?>
                                
                                <?php if ($item['category_id']===$c['c_id']) : ?>  
                                    <li class="prod-i">
                                        <div class="prod-i-top">
                                            <a href="<?php echo base_url('product/'.$item['i_id'])?>" class="prod-i-img"><!-- NO SPACE --><img src="<?php echo base_url('uploads/'.$item['path'])?>" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                            <!-- <p class="prod-i-info">
                                                <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                                <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                                <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                            </p> -->
                                            <p class="prod-i-addwrap">
                                                <a href="<?php echo base_url('product/'.$item['i_id'])?>" class="prod-i-add">Go to detail</a>
                                            </p>
                                        </div>
                                        <h3>
                                            <a href="product.html"><?= $item['product_name'] ?></a>
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
                                <?php endif ?>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endforeach ?>
                
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