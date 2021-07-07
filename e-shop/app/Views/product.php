<?= $this->extend('layouts/page_layout') ?>

<!-- title -->
<?= $this->section('title') ?>
<title>eShopppu - Your trusted partner</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Main Content - start -->
<main>
    <section class="container">
        <ul class="b-crumbs">
            <li>
                <a href="<?php echo base_url('/')?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('catalog')?>"">Catalog</a>
            </li>
            <li>
                <a href="<?php echo base_url('catalog')?>"><?= $item['category'] ;?></a>
            </li>
            <li>
                <span><?= $item['product_name'] ;?></span>
            </li>
        </ul>
        <h1 class="main-ttl"><span><?= $item['product_name'] ;?></span></h1>
        <!-- Single Product - start -->
        <div class="prod-wrap prod2-wrap">

            <!-- Product Images -->
            <div class="prod-slider-wrap prod2-slider-wrap">
                <div class="prod-slider">
                    <ul class="prod2-slider-car">
                        <?php foreach ($images as $i) : ?>
                            <li>
                                <a data-fancybox-group="product" class="fancy-img" href="<?php echo base_url('uploads/'.$i['path'])?>" >
                                    <img src="<?php echo base_url('uploads/'.$i['path'])?>" alt="">
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <div class="prod-thumbs">
                    <ul class="prod2-thumbs-car">
                        <?php $slide_id=0?>
                        <?php foreach ($images as $i) : ?>
                            <?php $slide_id=$slide_id+1;?>
                            <li>
                                <a data-slide-index="<?= $slide_id ?>" href="#">
                                    <img class="scroll_active" src="<?php echo base_url('uploads/'.$i['path'])?>" alt="">
                                </a>
                            </li>
                        <?php endforeach ?>
                        
                    </ul>
                </div>
            </div>

            <!-- Product Description/Info -->
            <div class="prod-cont">
                <div class="prod-cont-inner">
                    <div class="prod-cont-txt">
                        
                        <p class="prod-price">
                            <b class="item_current_price">Stock : </b>
                        </p>
                        <p class="prod-price">
                            <b class="item_current_price"><?= $item['stock'];?></b>
                            <b class="item_current_price"> left</b>
                        </p>
                    </div>
                    <div class="prod-info">
                        <p class="prod-price">
                            <b class="item_current_price">Rp. <?= $item['price'] ;?></b>
                        </p>
                        <p class="prod-qnt">
                            <input value="1" type="text">
                            <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prod-addwrap">
                            <a href="#" class="prod-add" rel="nofollow">Add to cart</a>
                        </p>
                    </div>

                    <!-- <ul class="prod-i-props">
                        <li>
                            <b>Exterior</b> Solid Bag
                        </li>
                    </ul> -->


                    <!-- Product Tabs -->
                    <div class="prod-tabs-wrap">
                        <ul class="prod-tabs">
                            <li><a data-prodtab-num="1" class="active" href="#" data-prodtab="#prod-tab-1">Description</a></li>
                            <!-- <li><a data-prodtab-num="2" href="#" data-prodtab="#prod-tab-5">Reviews</a></li> -->
                        </ul>
                        <div class="prod-tab-cont">

                            <p data-prodtab-num="1" class="prod-tab-mob active" data-prodtab="#prod-tab-1">Description</p>
                            <div class="prod-tab stylization" id="prod-tab-1">
                                <p><?= $item['description'] ;?></p>
                            </div>
                            
                            <!-- <p data-prodtab-num="2" class="prod-tab-mob" data-prodtab="#prod-tab-5">Reviews</p>
                            <div class="prod-tab" id="prod-tab-5">
                                <ul class="reviews-list">
                                    <li class="reviews-i existimg">
                                        <div class="reviews-i-img">
                                            <img src="http://placehold.it/120x120" alt="Averill Sidony">
                                            <div class="reviews-i-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <time datetime="2017-12-21 12:19:46" class="reviews-i-date">21 May 2017</time>
                                        </div>
                                        <div class="reviews-i-cont">
                                            <p>Numquam aliquam maiores ratione dolores ducimus, laborum hic similique delectus. Neque saepe nobis omnis laudantium itaque tempore voluptate harum error, illum nemo, reiciendis architecto, quam tenetur amet sit quisquam cum.<br>Pariatur cum tempore eius nulla impedit cumque odit quos porro iste a voluptas, optio alias voluptate minima distinctio facere aliquid quasi, vero illum tenetur sed temporibus eveniet obcaecati.</p>
                                            <span class="reviews-i-margin"></span>
                                            <h3 class="reviews-i-ttl">Averill Sidony</h3>
                                            <p class="reviews-i-showanswer"><span data-open="Show answer" data-close="Hide answer">Show answer</span> <i class="fa fa-angle-down"></i></p>
                                        </div>
                                        <div class="reviews-i-answer">
                                            <p>Thanks for your feedback!<br>
                                                Nostrum voluptate autem, eaque mollitia sed rem cum amet qui repudiandae libero quaerat veniam accusantium architecto minima impedit. Magni illo illum iure tempora vero explicabo, esse dolores rem at dolorum doloremque iusto laboriosam repellendus. <br>Numquam eius voluptatum sint modi nihil exercitationem dolorum asperiores maiores provident repellat magnam vitae, consequatur omnis expedita, accusantium voluptas odit id.</p>
                                            <span class="reviews-i-margin"></span>
                                        </div>
                                    </li>
                                    <li class="reviews-i existimg">
                                        <div class="reviews-i-img">
                                            <img src="http://placehold.it/120x120" alt="Araminta Kristeen">
                                            <div class="reviews-i-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <time datetime="2017-12-21 12:19:46" class="reviews-i-date">14 February 2017</time>
                                        </div>
                                        <div class="reviews-i-cont">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                            <span class="reviews-i-margin"></span>
                                            <h3 class="reviews-i-ttl">Araminta Kristeen</h3>
                                            <p class="reviews-i-showanswer"><span data-open="Show answer" data-close="Hide answer">Show answer</span> <i class="fa fa-angle-down"></i></p>
                                        </div>
                                        <div class="reviews-i-answer">
                                            Benjy, hi!<br>
                                            Officiis culpa quos, quae optio quia.<br>
                                            Amet sunt dolorem tempora, pariatur earum quidem adipisci error voluptates tempore iure, nobis optio temporibus voluptatum delectus natus accusamus incidunt provident sapiente explicabo vero labore hic quo?
                                            <span class="reviews-i-margin"></span>
                                        </div>
                                    </li>
                                    <li class="reviews-i">
                                        <div class="reviews-i-cont">
                                            <time datetime="2017-12-21 12:19:46" class="reviews-i-date">21 May 2017</time>
                                            <div class="reviews-i-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                            <span class="reviews-i-margin"></span>
                                            <h3 class="reviews-i-ttl">Jeni Margie</h3>
                                            <p class="reviews-i-showanswer"><span data-open="Show answer" data-close="Hide answer">Show answer</span> <i class="fa fa-angle-down"></i></p>
                                        </div>
                                        <div class="reviews-i-answer">
                                            Hello, Jeni Margie!<br>
                                            Nostrum voluptate autem, eaque mollitia sed rem cum amet qui repudiandae libero quaerat veniam accusantium architecto minima impedit. Magni illo illum iure tempora vero explicabo, esse dolores rem at dolorum doloremque iusto laboriosam repellendus. <br>Numquam eius voluptatum sint modi nihil exercitationem dolorum asperiores maiores provident repellat magnam vitae, consequatur omnis expedita, accusantium voluptas odit id.
                                            <span class="reviews-i-margin"></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="prod-comment-form">
                                    <h3>Add your review</h3>
                                    <form method="POST" action="#">
                                        <input type="text" placeholder="Name">
                                        <input type="text" placeholder="E-mail">
                                        <textarea placeholder="Your review"></textarea>
                                        <div class="prod-comment-submit">
                                            <input type="submit" value="Submit">
                                            <div class="prod-rating">
                                                <i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- Single Product - end -->


    </section>
</main>
<!-- Main Content - end -->
<?= $this->endSection() ?>