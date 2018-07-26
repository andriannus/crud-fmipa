<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PlantFamily_model extends CI_Model {

	public $id = 'id_famili';
	public $table = 'famili_tnm';

	public function index()
	{
		$this->db->order_by($this->id,'DESC');
		return $this->db->get($this->table);
	}

	public function view($id)
	{
		$this->db->where($this->id, $id);
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

	public function destroy($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);

		if ($this->db->affected_rows()) {
			return true;

		} else {
			return false;
		}
	}

	public function update($id, $data)
	{
		$this->db->where($this->id, $id);
		$this->db->update($this->table, $data);

		if ($this->db->affected_rows()) {
			return true;
		
		} else {
			return false;
		}
	}
}