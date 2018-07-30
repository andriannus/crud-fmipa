<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AnimalFamily_model extends CI_Model {

	public $id = 'id_famili';
	public $table = 'famili_bnt';

	public function index()
	{
		$this->db->order_by($this->id, 'DESC');
		return $this->db->get($this->table);
	}

	public function view($id_famili)
	{
		$this->db->where($this->id, $id_famili);
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

	public function destroy($id_famili)
	{
		$this->db->where($this->id, $id_famili);
		$this->db->delete($this->table);

		if ($this->db->affected_rows()) {
			return true;

		} else {
			return false;
		}
	}

	public function update($id, $data)
	{
		$this->db->where($this->id, $id_famili);
		$this->db->update($this->table, $data);

		if ($this->db->affected_rows()) {
			return true;
		
		} else {
			return false;
		}
	}
}
