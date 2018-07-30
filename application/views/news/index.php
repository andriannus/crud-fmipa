<!-- Breadcrumbs-->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="<?= base_url('admin/index') ?>">Beranda</a>
	</li>
	<li class="breadcrumb-item active">Berita</li>
</ol>

<!-- Example DataTables Card-->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i>
		Daftar Berita
	</div>

	<div class="card-body">
		<?php if (empty($berita)) { ?>
		<div class="text-center">
			<p>
				<strong>Tidak ada data tersedia</strong>
			</p>
			<p>
				<a href="<?= base_url('admin/berita/tambah') ?>" class="btn btn-primary">Tambah Berita</a>
			</p>
		</div>

		<?php } else { ?>
		<a href="<?= base_url('admin/berita/tambah') ?>" class="btn btn-primary">Tambah Berita</a>

		<hr>

		<div class="table-responsive">
			<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width ="1%">No</th>
						<th>Judul Berita</th>
						<th>Kategori</th>
						<th>Tanggal</th>
						<th width="10%">Aksi</th>   
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($berita as $b) {
					?>
					<tr>
						<td class="text-center"><?= $no; ?></td>
						<td>
							<?php
							if (strlen($b->judul) >= 71) {
								echo substr($b->judul, 0, 70).'...';

							} else {
								echo $b->judul;
							}
							?>
						</td>
						<td><span class="badge badge-primary"><?= $b->kategori; ?></span></td>
						<td><?= $b->tanggal; ?></td>
						<td>
							<a href="<?= base_url('admin/berita/'.$b->id_berita.'/ubah');?>" class="btn btn-sm btn-primary"><span class="fas fa-pencil-alt"></span></a>
							<a href="javascript:void(0)" onClick="return checkMe(<?= $b->id_berita ?>)" class="btn btn-sm btn-danger"><span class="fas fa-trash"></span></a>
							</td>
					</tr>
					<?php
					$no++;
					}
					?>
				</tbody>
			</table>
		</div>
		<?php } ?>
	</div>
</div>

<script>
function checkMe (id) {
	if (confirm("Apakah anda yakin ingin menghapus ?")) {
		alert("Data Berhasil Dihapus");

		window.location.replace('<?= base_url("news/newsDelete/"); ?>' + id)
		return true;

	} else {
		alert("Data Batal Dihapus");
		return false;
	}
}
</script>
