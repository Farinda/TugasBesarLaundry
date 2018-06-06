<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_laundry_model extends CI_Model {

	public function get_data()
	{
		return $this->db->get('jenis_laundry')->result_array();
	}
	public function get_data_id($id)
	{
		return $this->db->where('id_jenis_laundry',$id)->get('jenis_laundry')->result_array()[0];
	}
	public function insert()
	{
		$data = $this->
	}
}