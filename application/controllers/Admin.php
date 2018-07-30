<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public $layout = 'core/layouts/admin_app';

	public function __construct()
	{
		parent::__construct();
		$this->load->model([
			'Animal_model' => 'binatang',
			'Plant_model' => 'tanaman',
			'News_model' => 'berita'
		]);
	}

	public function index()
	{
		$data = [
			'title' => 'Administrator | FMIPA',
			'menu' => 'beranda',
			'page' => 'admin/index'
		];

		$this->load->view($this->layout, $data);
	}

	public function binatang()
	{
		$data = [
			'title' => 'Binatang | Administrator - FMIPA',
			'menu' => 'binatang',
			'page' => 'animal/index'
		];

		$this->load->view($this->layout, $data);
	}

	public function tanaman()
	{
		$data = [
			'title' => 'Tanaman | Administrator - FMIPA',
			'menu' => 'tanaman',
			'page' => 'plant/index'
		];

		$this->load->view($this->layout, $data);
	}

	public function berita()
	{
		$data = [
			'title' => 'Berita | Administrator - FMIPA',
			'menu' => 'berita',
			'page' => 'news/index',
			'berita' => $this->berita->index()->result()
		];

		$this->load->view($this->layout, $data);
	}
}
