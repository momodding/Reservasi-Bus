<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {

		// Validasi
		$validasi 	= $this->form_validation;

		$username	= $this->input->post('username');
		$password	= $this->input->post('password');

		$validasi->set_rules('username','Username','required');
		$validasi->set_rules('password','Password','required');

		if($validasi->run()) {
			$this->admin_login->login($username,$password);
		}

		$data = array ('title' => 'Halaman Login Admin');
		$this->load->view('tampilan_login', $data);

	}

	// Logout
	public function logout() {
		$this->admin_login->logout();
	}

}
