<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function autentifikasi($username,$password)
	{
		$this->db->where('username',$username);	
		$this->db->where('password',$password);
		$query = $this->db->get('karyawan');
		$data['num_rows'] = $query->num_rows();
		if($data['num_rows'] == 1){
			$data['result'] = $query->result();
		}
		return $data;
	}
	public function register()
	{
		$data = array(
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))
		);
		$this->db->insert('karyawan',$data);
	}
}