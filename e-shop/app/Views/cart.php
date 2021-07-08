<?= $this->extend('layouts/page_layout') ?>

<!-- title -->
<?= $this->section('title') ?>
<title>eShopppu - Your trusted partner</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Main Content - start -->
<main>
    <section class="container stylization maincont">


        <ul class="b-crumbs">
            <li>
                <a href="index.html">
                    Home
                </a>
            </li>
            <li>
                <span>Cart</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Cart</span></h1>
        <!-- Cart Items - start -->
        <form action="#">

            <div class="cart-items-wrap">
                <table class="cart-items">
                    <thead>
                        <tr>
                           
                            <td class="cart-image">Photo</td>
                            <td class="cart-ttl">Products</td>
                            <td class="cart-price">Price</td>
                            <td class="cart-quantity">Quantity</td>
                            <td class="cart-summ">Total</td>
                            <td class="cart-del">Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sum= 0;?>
                        <?php if (!empty($carts)) : ?>
                        <?php foreach ($carts as $c) : ?>
                        <?php $sum=$sum + $c['quantity']*$c['price'];?>
                        <tr>
                 
                            <td class="cart-image">
                                <a href="product.html">
                                    <img src="<?php echo base_url('uploads/'.$c['path'])?>" alt="<?php echo base_url($c['product_name'])?>">
                                </a>
                            </td>
                            <td class="cart-ttl">
                                <a href="<?php echo base_url('product/'.$c['i_id'])?>"><?= $c['product_name'] ;?></a>
                            </td>
                            <td class="cart-price">
                                <b>Rp <?= $c['price'] ;?></b>
                            </td>
                            <td class="cart-quantity">
                                <p class="cart-qnt">
                                    <b><?= $c['quantity'] ;?></b>
                                </p>
                            </td>
                            <td class="cart-summ">
                                <b>Rp <?= $c['quantity']*$c['price'] ;?></b>
                            </td>
                            <!-- <td>
                            <?= form_open_multipart(base_url('remove/'.$c['i_id'])); ?>
                                <button type="submit">Submit</button>
                            <?= form_close() ?>
                          
                            </td> -->
                            <td class="cart-del">
                            <a href="<?= base_url('remove/'.$c['i_id']) ;?>" class="cart-remove"></a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                        <?php endif ?>


                    </tbody>
                </table>
            </div>
            <ul class="cart-total">
                <li class="cart-summ">TOTAL: <b>Rp <?= $sum ;?></b></li>
            </ul>
            <div class="cart-submit">
                <a href="#" class="cart-submit-btn">Checkout</a>
                <a href="#" class="cart-clear">Clear cart</a>
            </div>
        </form>
        <!-- Cart Items - end -->

    </section>
</main>
<!-- Main Content - end -->

<!-- Main Content - end -->
<?= $this->endSection() ?>
<?= $this->section('scripts') ;?>


<?= $this->endSection() ?>