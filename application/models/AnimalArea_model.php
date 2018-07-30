<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AnimalArea_model extends CI_Model {

	public $id = 'id_area';
	public $table = 'area_bnt';

	public function index()
	{
		$this->db->order_by($this->id, 'DESC');
		return $this->db->get($this->table);
	}

	public function view($id_area)
	{
		$this->db->where($this->id, $id_area);
		return $this->db->get($this->table);
	}

	public function store($data)
	{
		$this->db->insert($this->table, $data);

		if ($this->db->affected_rows()) {
			return true;

		} else {
			return false;
		}
	}

	public function delete($id_area)
	{
		$this->db->where($this->id, $id_area);
		$this->db->delete($this->table);

		if ($this->db->affected_rows()) {
			return true;

		} else {
			return false;
		}
	}

	public function update($id_area, $data)
	{
		$this->db->where($this->id, $id_area);
		$this->db->update($this->table, $data);

		if ($this->db->affected_rows()) {
			return true;
		
		} else {
			return false;
		}
	}
}
