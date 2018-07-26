<!-- Breadcrumbs-->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="<?= base_url('admin/index') ?>">Beranda</a>
	</li>
	<li class="breadcrumb-item"><a href="<?= base_url('admin/binatang') ?>">Binatang</a></li>
	<li class="breadcrumb-item active">Area</li>
</ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i>
		Daftar Area
	</div>

	<div class="card-body">
		<?php if (empty($area)) { ?>
		<div class="text-center">
			<p>
				<strong>Tidak ada data tersedia</strong>
			</p>
			<p>
				<a href="<?= base_url('admin/binatang/area/tambah') ?>" class="btn btn-primary">Tambah Area</a>
			</p>
		</div>

		<?php } else { ?>
		<a href="<?= base_url('admin/binatang/area/tambah') ?>" class="btn btn-primary">Tambah Area</a>

		<hr>

		<div class="table-responsive">
			<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width ="1%">No</th>
						<th>NamaArea</th>
						<th width="10%">Action</th>   
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
					foreach ($area as $list) { ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $list->nama_area; ?></td>
						<td>
							<a href="<?= base_url('admin/ubaharea/').$list->id_area_tnm; ?>" class="btn btn-sm btn-primary"><span class="fa fa-pencil"></span></a>
							<a href="javascript:void(0)" onClick="return checkMe(<?= $list->id_area_tnm ?>)"class="btn btn-sm btn-danger"><span class="fa fa-trash"></span></a>
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