<!-- Breadcrumbs-->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="<?= base_url('admin/index') ?>">Beranda</a>
	</li>
	<li class="breadcrumb-item"><a href="<?= base_url('admin/berita') ?>">Berita</a></li>
	<li class="breadcrumb-item active">Tambah</li>
</ol>

<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i>
		Tambah Berita
	</div>

	<div class="card-body">
		<?= form_open_multipart('news/updateNewsProcess'); ?>
			<?= form_hidden('id', $news->id_berita); ?>
			<div class="form-group">
				<label>Tanggal</label>
				<input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="<?= $news->tanggal; ?>" required>
			</div>

			<div class="form-group">
				<label>Judul</label>
				<input type="text" class="form-control" name="judul" placeholder="Judul" class="form-control" value="<?= $news->judul; ?>" required>
			</div>
			
			<div class="form-group">
				<label>Kategori</label>
				<input type="text" class="form-control" name="kategori" placeholder="Kategori" class="form-control" value="<?= $news->kategori; ?>" required>
			</div>

			<div class="form-group">
				<label>Isi</label>
				<textarea class="ckeditor" placeholder="Isi" name="isi"><?= $news->isi; ?></textarea>
			</div>

			<div class="form-group">
				<label>Gambar Lama</label>
				<div>
					<img class="img-thumbnail" src="<?= base_url('asset/upload/news/').$news->gambar; ?>" width="400px">
				</div>
			</div>
			
			<div class="form-group">
				<label>Gambar Baru</label>
				<input type="file" class="form-control" name="gambar">
			</div>
	</div>

	<div class="card-footer">
		<button type="submit" class="btn btn-primary">Submit</button>
		<a href="<?= base_url('admin/berita'); ?>" class="btn btn-danger">Batal</a>
		<?= form_close(); ?>
	</div>
</div>