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
            <table class="table table-hover table-bordered table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>Product Names</th>
                        <th>Vendor</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($items as $item) : ?>
                        <tr>
                            <td scope="row"><?= $item['product_name'] ?></td>
                            <td><?= $item['vendor'] ?></td>
                            <td><?= $item['category_id'] ?></td>
                            <td><?= $item['description'] ?></td>
                            <td>
                            <a title="Edit" href="./products/edit/<?=$item['i_id'];?>" class="btn btn-info">Edit</a>
                            <a title="Delete" href="<?= base_url("admin/products/delete/".$item['i_id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                        
                    </tbody>
            </table>

		

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
    
</body>
</html>