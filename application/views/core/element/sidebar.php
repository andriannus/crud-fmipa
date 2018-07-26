<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<ul class="sidebar navbar-nav">
	<li class="nav-item <?= (isset($menu) && $menu === 'beranda' ? 'active' : '') ?>">
		<a class="nav-link" href="<?= base_url('admin/index') ?>">
			<i class="fas fa-fw fa-home"></i>
			<span>Beranda</span>
		</a>
	</li>
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-fw fa-folder"></i>
			<span>Basis Data</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
			<h6 class="dropdown-header">Tanaman:</h6>
			<a
				class="dropdown-item <?= (isset($menu) && $menu === 'tanaman-area' ? 'active' : '') ?>"
				href="<?= base_url('admin/tanaman/area') ?>"
			>Area</a>

			<a
				class="dropdown-item <?= (isset($menu) && $menu === 'tanaman-famili' ? 'active' : '') ?>"
				href="<?= base_url('admin/tanaman/famili') ?>"
			>Famili</a>
			
			<a
				class="dropdown-item <?= (isset($menu) && $menu === 'tanaman' ? 'active' : '') ?>"
				href="<?= base_url('admin/tanaman') ?>"
			>Tanaman</a>

			<div class="dropdown-divider"></div>

			<h6 class="dropdown-header">Binatang:</h6>
			<a
				class="dropdown-item <?= (isset($menu) && $menu === 'binatang-area' ? 'active' : '') ?>"
				href="<?= base_url('admin/binatang/area') ?>"
			>Area</a>

			<a
				class="dropdown-item <?= (isset($menu) && $menu === 'binatang-famili' ? 'active' : '') ?>"
				href="<?= base_url('admin/binatang/famili') ?>"
			>Famili</a>
			
			<a
				class="dropdown-item <?= (isset($menu) && $menu === 'binatang' ? 'active' : '') ?>"
				href="<?= base_url('admin/binatang') ?>"
			>Binatang</a>
		</div>
	</li>
	<li class="nav-item <?= (isset($menu) && $menu === 'berita' ? 'active' : '') ?>">
		<a class="nav-link" href="<?= base_url('admin/berita') ?>">
			<i class="fas fa-fw fa-newspaper"></i>
			<span>Berita</span></a>
	</li>
</ul>
