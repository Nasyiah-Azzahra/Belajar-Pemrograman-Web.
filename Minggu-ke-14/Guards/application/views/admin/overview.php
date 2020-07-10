<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid">
		
		<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Selamat Datang di Guards</h1>
				<p class="lead">Guards adalah aplikasi berbasis web pencarian bodyguards.</p>
				<hr class="my-4">
			</div>
		</div>
		
		</div>

		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	
</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>