<!-- Breadcrumbs-->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="<?= base_url('admin/index') ?>">Beranda</a>
	</li>
	<li class="breadcrumb-item"><a href="<?= base_url('admin/binatang') ?>">Binatang</a></li>
	<li class="breadcrumb-item active">Famili</li>
</ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i>
		Daftar Famili
	</div>

	<div class="card-body">
		<?php if (empty($famili)) { ?>
		<div class="text-center">
			<p>
				<strong>Tidak ada data tersedia</strong>
			</p>
			<p>
				<a href="<?= base_url('admin/binatang/famili/tambah') ?>" class="btn btn-primary">Tambah Famili</a>
			</p>
		</div>

		<?php } else { ?>
		<a href="<?= base_url('admin/binatang/famili/tambah') ?>" class="btn btn-primary">Tambah Famili</a>

		<hr>

		<div class="table-responsive">
			<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width ="1%">No</th>
						<th>Nama Famili</th>
						<th width="10%">Action</th>   
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
					foreach ($famili as $list) { ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $list->famili; ?></td>


						<td>
							<a href="<?= base_url('admin/ubahfamili/').$list->id; ?>" class="btn btn-sm btn-primary"><span class="fa fa-pencil"></span></a>
							<a href="javascript:void(0)" onClick="return checkMe(<?= $list->id; ?>)"class="btn btn-sm btn-danger"><span class="fa fa-trash"></span></a>
						</td>
						<?php
						$no++;
						}
						?>
					</tr>
				</tbody>
			</table>
		</div>
		<?php } ?>
	</div>
</div>