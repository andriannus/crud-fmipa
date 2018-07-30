<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public $layout = 'core/layouts/admin_app';
	public $file_name;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('News_model', 'news');

		$this->file_name = 'news_'.date('dmY').'_'.mt_rand();
	}

	public function newsAdd()
	{
		$data = [
			'title' => 'Tambah Berita',
			'menu' => 'berita',
			'page' => 'news/add',
		];

		$this->load->view($this->layout, $data);
	}

	public function newsAddProcess()
	{
		$tanggal = $this->input->post('tanggal');
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$isi = $this->input->post('isi');

		$config = [
			'upload_path' => './asset/upload/news/',
			'allowed_types' => 'jpg|jpeg|png',
			'max_size' => 2048,
			'file_name' => $this->file_name
		];

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			//

		} else {
			$picture = $this->upload->data();

			$data = [
				'tanggal' => $tanggal,
				'judul' => $judul,
				'kategori' => $kategori,
				'isi' => $isi,
				'gambar' => $picture['file_name']
			];

			$result = $this->news->store($data);
			if (!$result) {
				//

			} else {
				chmod($picture['full_path'], 0777);
				redirect('admin/berita');
			}
		}
	}

	public function newsDelete($id) 
	{
		$old = $this->news->view($id)->row();
		unlink('./asset/upload/news/'.$old->gambar);

		$result = $this->news->destroy($id);

		if (!$result) {
			//

		} else {
			redirect('admin/berita');
		}
	}
	
	public function updateNews($id) 
	{
		$data = [
			'title' => 'Ubah Berita - Herbarium',
			'menu' => 'berita',
			'page' => 'news/edit',
			'news' => $this->news->view($id)->row()
		];

		$this->load->view('core/layouts/admin_app', $data);
	}

	public function updateNewsProcess()
	{
		$id = $this->input->post('id');
		$tanggal = $this->input->post('tanggal');
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$isi = $this->input->post('isi');

		$this->load->library('upload', $this->config);

		$picture = $this->upload->data();

		if (!$_FILES['gambar']['name']) {
			$data = [
				'tanggal' => $tanggal,
				'judul' => $judul,
				'kategori' => $kategori,
				'isi' => $isi,
			];

			$result = $this->news->update($id, $data);
			if (!$result) {
				//

			} else {
				redirect('admin/berita');
			}

		} else {
			
			if (!$this->upload->do_upload('gambar')) {
				echo $this->upload->display_errors();

			} else {
				$old = $this->news->view($id)->row();
				unlink('./asset/upload/news/'.$old->gambar);

				$data = [
					'tanggal' => $tanggal,
					'judul' => $judul,
					'kategori' => $kategori,
					'isi' => $isi,  
					'gambar' => $picture['file_name']
				];

				$result = $this->news->update($id, $data); //akses model untuk menyimpan ke database
				if (!$result) {
					echo $this->upload->display_errors();

				} else {
					chmod($picture['full_path'], 0777);
					redirect('admin/berita');
				}
			}
		}
	}
}
