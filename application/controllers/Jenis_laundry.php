<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_laundry extends CI_Controller {

	function __construct()
	{
		$this->load->model('Jenis_laundry_model');
	}
	public function index()
	{
		$data['list_data'] = $this->Jenis_laundry_model->get_data();
		$this->load->view('jenis_laundry/show',$data);
	}
	public function insert()
	{
		if ($this->input->post('nama') != null) {
			$this->Jenis_laundry_model->insert();
			redirect('Jenis_laundry');
		}else{
			$this->load->view('jenis_laundry/input');
		}
	}
	public function update($id)
	{
		$data['old_data'] = $this->Jenis_laundry_model->get_data_id($id);
		if ($this->input->post('nama') != null) {
			$this->Jenis_laundry_model->update($id);
			redirect('Jenis_laundry');
		}else{
			$this->load->view('jenis_laundry/update',$data);
		}
	}
	public function delete($id)
	{
		$this->Jenis_laundry_model->delete($id);
		redirect('Jenis_laundry');
	}
}
