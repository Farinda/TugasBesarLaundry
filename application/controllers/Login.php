<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','trim|required|callback_proses');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			redirect('Admin');
		}
	}
	public function proses($username)
	{
		$password = md5($this->input->post('password'));
		$aut = $this->Login_model->autentifikasi($username,$password);
		if($aut['num_rows'] == 1){
			$this->session->set_userdata($aut['result']);
			return true;
		}else{
			$this->form_validation->set_message('proses','Username and Password tidak valid');
			return false;
		}
	}
	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','trim|required|is_unique[karyawan.username]');
		$this->form_validation->set_rules('password','Password','required|matches[re-password]');
		$this->form_validation->set_rules('re-password','re-Password','required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		} else {
			$this->Login_model->register();
			redirect('Login');
		}
	}
}
