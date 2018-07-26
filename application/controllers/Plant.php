<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plant extends CI_Controller {

	public $layout = 'core/layouts/admin_app';

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
			'famili' => ''
		];

		$this->load->view($this->layout, $data);
	}

	public function familiAdd()
	{
		$data = [
			'title' => 'Tambah Famili Tanaman | Administrator - FMIPA',
			'menu' => 'tanaman-famili',
			'page' => 'plant/famili_add'
		];

		$this->load->view($this->layout, $data);
	}

	public function familiAddProcess()
	{
		//
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
