<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

    <?php echo view("admin/_partials/navbar.php") ?>

    <div id="wrapper">

        <?php echo view("admin/_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">
                <div class="card">

                    <div class="card-header">Form Edit Produk</div>

                    <div class="card-body">

                        <?php if(!empty(session()->getFlashdata('success'))){ ?>

                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('success');?>
                        </div>

                        <?php } ?>

                        <?= form_open_multipart(base_url('admin/products/edit_item/'.$item['i_id'])); ?>
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" name="product_name" value="<?= $item['product_name'] ?>"
                                placeholder="Enter Product Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Category</label>
                            <select class="custom-select" name="category" id="">
                                <option>Choose category</option>
                                <?php foreach ($categories as $c) : ?>
                                <option <?php if ($c['c_id'] == $item['c_id'] )
                            echo "selected" ?> value="<?= $c['c_id'] ?>"><?= $c['category'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Vendor</label>
                            <input type="text" name="vendor" value="<?= $item['vendor'] ?>"
                                placeholder="Enter Vendor Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" name="price" class="form-control" value="<?php echo $item['price']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" name="stock" class="form-control"
                                value="<?php echo $item['stock']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="textarea" name="description" value="<?= $item['description'] ?>"
                                class="form-control">
                        </div>



                        <div class="form-group">
                            <?= form_submit('Send', 'Edit', ['class' => 'btn btn-primary']) ?>
                        </div>

                        <?= form_close() ?>

                        
                        <!-- <div class="form-group"> -->
                            <label for="">Foto Produk</label>
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                <?php $pertama=true ;?>
                                <?php foreach ($img as $im) : ?>
                                    <div class="carousel-item <?php if($pertama) echo "active" ;?>">
                                        <div class="card">
                                            <!-- <img class="card-img-top" src="holder.js/100x180/" alt=""> -->
                                            <img class="card-img-top"
                                                src="<?php echo base_url('uploads/'.$im['path']) ?>" alt="First slide">
                                            <div class="card-body">
                                            <?= form_open_multipart(base_url('admin/products/edit_image/'.$im['im_id'])); ?>
                                            <div class="carousel-caption d-none d-md-block">
                                                <input type="file" name="file_upload" multiple>
                                                <div class="form-group">
                                                    <?= form_submit('Edit', 'Edit', ['class' => 'btn btn-primary']) ?>
                                                </div>
                                            </div>

                                            <?= form_close() ?>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <?php $pertama=false; ;?>
                                <?php endforeach ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        <!-- </div> -->

                        </div>


                    </div>

                             

                </div>
                <!-- /.container-fluid -->
                
                <!-- Sticky Footer -->
                <?php echo view("admin/_partials/footer.php") ?>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->


        <?php echo view("admin/_partials/scrolltop.php") ?>
        <?php echo view("admin/_partials/modal.php") ?>
        <?php echo view("admin/_partials/js.php") ?>

        <script>
            $(function () {
                $("input[type = 'submit']").click(function () {
                    var $fileUpload = $("input[type='file']");
                    if (parseInt($fileUpload.get(0).files.length) > 3) {
                        alert("You are only allowed to upload a maximum of 3 files");
                    }
                });
            });
        </script>
</body>

</html>
