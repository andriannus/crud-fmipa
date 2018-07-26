<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal extends CI_Controller {

	public $layout = 'core/layouts/admin_app';

	public function area()
	{
		$data = [
			'title' => 'Area Binatang | Administrator - FMIPA',
			'menu' => 'binatang-area',
			'page' => 'animal/area',
			'area' => ''
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
			'famili' => ''
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
