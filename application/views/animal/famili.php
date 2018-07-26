<div id="animalFamily">
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
					<button class="btn btn-primary" @click="showModal">Tambah Famili</button>
				</p>
			</div>

			<?php } else { ?>
			<button class="btn btn-primary" @click="showModal">Tambah Famili</button>

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

	<div class="modal fade" id="addFamily" tabindex="-1" role="dialog" aria-labelledby="addFamilyLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addFamilyLabel">Tambah Famili Tanaman</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Nama Famili</label>
						<input type="text" class="form-control" placeholder="Nama Famili" v-model="nama">
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" @click="reset">Batal</button>
					<button class="btn btn-primary" type="button" :disabled="!nama">Simpan</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
const animalFamily = new Vue({
	el: '#animalFamily',

	data: () => ({
		nama: ''
	}),

	methods: {
		showModal () {
			$('#addFamily').modal({
				keyboard: false,
				backdrop: 'static'
			}, 'show')
		},

		reset () {
			this.nama = ''
			$('#addFamily').modal('hide')
		}
	}
})
</script>
