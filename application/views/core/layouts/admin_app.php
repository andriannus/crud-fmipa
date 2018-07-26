<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title><?= $title; ?></title>

		<!-- Bootstrap core CSS-->
		<link rel="stylesheet" href="<?= base_url('asset/bootstrap/css/bootstrap.min.css') ?>">

		<!-- Custom fonts for this template-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

		<!-- Page level plugin CSS-->
		<link rel="stylesheet" href="<?= base_url('asset/datatables/dataTables.bootstrap4.min.css') ?>">

		<!-- Custom styles for this template-->
		<link rel="stylesheet" href="<?= base_url('asset/sb-admin/css/sb-admin.min.css') ?>">

		<script src="<?= base_url('asset/vue/vue.min.js') ?>"></script>
		<script src="<?= base_url('asset/axios/axios.min.js') ?>"></script>
	</head>

	<body id="page-top">

		<?php $this->load->view('core/element/navigations/admin') ?>

		<div id="wrapper">

			<!-- Sidebar -->
			<?php $this->load->view('core/element/sidebar') ?>

			<div id="content-wrapper">
				<div class="container-fluid">

					<?php $this->load->view($page) ?>

				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view('core/element/footers/admin') ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
		</a>

		<!-- Bootstrap core JavaScript-->
		<script src="<?= base_url('asset/jquery/jquery.min.js') ?>"></script>
		<script src="<?= base_url('asset/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

		<!-- Core plugin JavaScript-->
		<script src="<?= base_url('asset/jquery-easing/jquery.easing.min.js') ?>"></script>

		<!-- Page level plugin JavaScript-->
		<script src="<?= base_url('asset/datatables/jquery.dataTables.min.js') ?>"></script>
		<script src="<?= base_url('asset/datatables/dataTables.bootstrap4.min.js') ?>"></script>

		<!-- Custom scripts for all pages-->
		<script src="<?= base_url('asset/sb-admin/js/sb-admin.min.js') ?>"></script>

		<script>
		// Call the dataTables jQuery plugin
		$(document).ready(function() {
			$('#dataTable').DataTable();
		});
		</script>
	</body>
</html>
