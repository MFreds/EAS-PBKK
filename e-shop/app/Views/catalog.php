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
                <a href="<?= base_url('/') ;?>">
                    Home
                </a>
            </li>
            <li>
                <a href="<?= base_url('/catalog/'.$category['c_id']) ;?>">
                    Catalog
                </a>
            </li>
            <li>
                <span><?= $category['category'] ;?></span>
            </li>
        </ul>
        <h1 class="main-ttl"><span><?= $category['category'] ;?></span></h1>
        <!-- Catalog Sidebar - start -->
        <div class="section-sb">

            <!-- Catalog Categories - start -->
            <div class="section-sb-current">
                <?php foreach ($categories as $c) : ?>
                    <?php if ($c['c_id']==$category['c_id']) : ?>
                        <h3>
                    <a href="<?= base_url('/catalog/'.$c['c_id']) ;?>"><?= $c['category'] ;?>
                        <span id="section-sb-toggle" class="section-sb-toggle">
                            <span class="section-sb-ico">
                        </span></span>
                    </a>
                </h3>
                    <?php endif ?>
                <?php endforeach ?>
                
                <ul class="section-sb-list" id="section-sb-list">
                <?php foreach ($categories as $c) : ?>
                    <?php if ($c['c_id']!=$category['c_id']) : ?>
                        <li class="categ-1">
                        <a href="<?= base_url('/catalog/'.$c['c_id']) ;?>">
                            <span class="categ-1-label"><?= $c['category'];?></span>
                        </a>
                    </li>
                    <?php endif ?>
                <?php endforeach ?>
                    
                </ul>
            </div>
            <!-- Catalog Categories - end -->
        </div>
        <div class="section-cont">

            <!-- Catalog Topbar - start -->
            <div class="section-top">

                <!-- View Mode -->
                <ul class="section-mode">
                    <li class="section-mode-gallery active"><a title="View mode: Gallery"
                            href="<?= base_url('/catalog/'.$category['c_id']) ;?>"></a></li>
                </ul>
            </div>
            <!-- Catalog Topbar - end -->
            <div class="prod-items section-items prod-items-galimg">
                <?php foreach ($items as $i) : ?>
                    <?php $item=new App\Models\Item; $im=$item->getImages_byId($i['i_id']); ?>
                    <div class="prod-i">
                        <div class="prod-i-top">
                            <a href="<?= base_url('/product/'.$i['i_id']) ;?>" class="prod-i-img">
                                <!-- NO SPACE --><img src="<?= base_url('uploads/'.$im['path']) ;?>" alt="<?= $i['product_name'] ;?>"><!-- NO SPACE --></a>
    
                            
                        </div>
                        <h3>
                            <a href="<?= base_url('/product/'.$i['i_id']) ;?>"><?= $i['product_name'] ;?></a>
                        </h3>
                        <div class="prod-i-action">
                            <p class="prod-i-info">
                                <a href="<?= base_url('/add/'.$i['i_id']) ;?>" data-method="post" class="prod-i-buy"><span>Add to cart</span><i
                                        class="fa fa-shopping-basket"></i></a>
                                <a href="<?= base_url('/product/'.$i['i_id']) ;?>" class="qview-btn prod-i-qview"><span>Quick View</span><i
                                        class="fa fa-search"></i></a>
                            </p>
                            <p class="prod-i-price">
                                <b>Rp <?= $i['price'] ;?></b>
                            </p>
                        </div>
                        <div class="prod-i-skuwrapcolor">
                            <ul class="prod-i-skucolor">
                                <li class="bx_active"><img src="<?= base_url('img/color/red.jpg') ;?>" alt="Red"></li>
                                <li><img src="<?= base_url('img/color/blue.jpg') ;?>" alt="Blue"></li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach ?>
                

            </div>

            <!-- Pagination - start -->
            <ul class="pagi">
                <?= $pager->links() ?>
            </ul>
        </div>
        <!-- Catalog Items | Gallery V2 - start -->

        <!-- Quick View Product - start -->
        <div class="qview-modal">
            <div class="prod-wrap">
                <a href="product.html">
                    <h1 class="main-ttl">
                        <span>Reprehenderit adipisci</span>
                    </h1>
                </a>
            </div>
        </div>
        <!-- Quick View Product - end -->
    </section>
</main>
<!-- Main Content - end -->
<?= $this->endSection() ?>