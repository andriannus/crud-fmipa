<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

	public $id = 'id_berita';
	public $table = 'berita';

	public function view($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->get($this->table);
	}

	public function index()
	{
		$this->db->order_by($this->id, 'DESC');
		return $this->db->get($this->table);
	}

	public function getPerPage($number, $offset)
	{
		$this->db->order_by($this->id, 'DESC');
		return $this->db->get($this->table, $number, $offset);
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
}