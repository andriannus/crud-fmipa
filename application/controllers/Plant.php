<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plant extends CI_Controller {

	public $layout = 'core/layouts/admin_app';

	public function __construct()
	{
		parent::__construct();
		$this->load->model([
			'Plant_model' => 'plant',
			'PlantArea_model' => 'area',
			'PlantFamily_model' => 'family'
		]);
	}

	public function area()
	{
		$data = [
			'title' => 'Area Tanaman | Administrator - FMIPA',
			'menu' => 'tanaman-area',
			'page' => 'plant/area',
			'area' => ''
		];

		$this->load->view($this->layout, $data);
	}

	public function areaAdd()
	{
		$data = [
			'title' => 'Tambah Area Tanaman | Administrator - FMIPA',
			'menu' => 'tanaman-area',
			'page' => 'plant/area_add'
		];

		$this->load->view($this->layout, $data);
	}

	public function areaAddProcess()
	{
		//
	}

	public function areaEdit($id)
	{
		$data = [
			'title' => 'Tambah Area Tanaman | Administrator - FMIPA',
			'menu' => 'tanaman-area',
			'page' => 'plant/area_add'
		];

		$this->load->view($this->layout, $data);
	}

	public function areaEditProcess()
	{
		//
	}

	// ---------- Pemisah ----------

	public function famili()
	{
		$data = [
			'title' => 'Famili Tanaman | Administrator - FMIPA',
			'menu' => 'tanaman-famili',
			'page' => 'plant/famili',
			'famili' => $this->family->index()->result()
		];

		$this->load->view($this->layout, $data);
	}

	public function familiAddProcess()
	{
		$nama = $this->input->post('nama');

		$data['nama'] = $nama;

		$result = $this->family->store($data);
		if ($result) {
			return $this->output
									->set_status_header('201')
									->set_output(json_encode([
											'success' => true
										]));

		} else {
			return $this->output
									->set_status_header('500')
									->set_output(json_encode([
											'success' => false
										]));
		}
	}

	public function familiEdit($id)
	{
		$data = [
			'title' => 'Tambah Famili Tanaman | Administrator - FMIPA',
			'menu' => 'tanaman-famili',
			'page' => 'plant/famili_add'
		];

		$this->load->view($this->layout, $data);
	}

	public function familiEditProcess()
	{
		//
	}
}
