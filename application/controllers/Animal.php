<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal extends CI_Controller {

	public $layout = 'core/layouts/admin_app';

	public function __construct()
	{
		parent::__construct();
		$this->load->model([
			'Animal_model' => 'animal',
			'AnimalArea_model' => 'area',
			'AnimalFamily_model' => 'family'
		]);
	}

	public function area()
	{
		$data = [
			'title' => 'Area Binatang | Administrator - FMIPA',
			'menu' => 'binatang-area',
			'page' => 'animal/area',
			'area' => $this->area->index()->result()
		];

		$this->load->view($this->layout, $data);
	}

	public function areaAdd()
	{
		$data = [
			'title' => 'Area Binatang | Administrator - FMIPA',
			'menu' => 'binatang-area',
			'page' => 'animal/area_add'
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
			'title' => 'Area Binatang | Administrator - FMIPA',
			'menu' => 'binatang-area',
			'page' => 'animal/area_edit'
		];

		$this->load->view($this->layout, $data);
	}

	public function areaEdirProcess()
	{
		//
	}

	// ---------- Pemisah ----------

	public function famili()
	{
		$data = [
			'title' => 'Famili Binatang | Administrator - FMIPA',
			'menu' => 'binatang-famili',
			'page' => 'animal/famili',
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
			'title' => 'Famili Binatang | Administrator - FMIPA',
			'menu' => 'famili-area',
			'page' => 'animal/famili_edit'
		];

		$this->load->view($this->layout, $data);
	}

	public function familiEditProcess()
	{
		//
	}	
}
