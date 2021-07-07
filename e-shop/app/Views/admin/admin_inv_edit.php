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

             <?= form_open_multipart(base_url('admin/products/add')); ?>
             <div class="form-group">
                 <label for="">Product Name</label>
                 <input type="text" name="product_name" value="<?= $item['product_name'] ?>" placeholder="Enter Product Name" class="form-control"> 
             </div>
            <div class="form-group">
                <label for="">Category</label>
                <select class="custom-select" name="category" id="">
                    <option>Choose category</option>
                    <?php foreach ($categories as $c) : ?>
                        <option <?php if ($c['c_id'] == $item['c_id'] )
                            echo "selected" ?>
                        value="<?= $c['c_id'] ?>"><?= $c['category'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
             
             <div class="form-group">
                 <label for="">Vendor</label>
                 <input type="text" name="vendor" value="<?= $item['vendor'] ?>" placeholder="Enter Vendor Name" class="form-control"> 
             </div>
             <div class="form-group">
                 <label for="">Price</label>
                 <input type="text" name="price" class="form-control" value="<?php echo $item['price']; ?>"> 
             </div>
             <div class="form-group">
                 <label for="">Stock</label>
                 <input type="number" name="stock" class="form-control" value="<?php echo $item['stock']; ?>"> 
             </div>
             <div class="form-group">
                 <label for="">Description</label>
                 <input type="text" name="description" value="<?= $item['description'] ?>" placeholder="Enter Product Description" class="form-control"> 
             </div>
             
              
             <div class="form-group">
             <label for="">Foto Produk</label>
                    <?php foreach ($img as $im) : ?>
                        <img src="<?php echo base_url('uploads/'.$im['path']) ?>" width="100" />
                        <a title="Edit" href="" class="btn btn-info">Edit</a>
                    <?php endforeach ?>
             </div>

             <div class="form-group">
                 <?= form_submit('Send', 'Send', ['class' => 'btn btn-primary']) ?>
             </div>

             <?= form_close() ?>

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
    $(function(){
    $("input[type = 'submit']").click(function(){
        var $fileUpload = $("input[type='file']");
        if (parseInt($fileUpload.get(0).files.length) > 3){
            alert("You are only allowed to upload a maximum of 3 files");
        }
    });
    });
</script>
</body>
</html>

