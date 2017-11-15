<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login {

	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}

	// Login
	public function login($username, $password) {
		// Query untuk pencocokan data
		$query = $this->CI->db->get_where('admin', array(
										'username' => $username,
										'password' => $password
										));

		// Jika ada hasilnya
		if($query->num_rows() == 1) {
			$row 	= $this->CI->db->query('SELECT * FROM admin WHERE username = "'.$username.'"');
			$user 	= $row->row();
			$id 	= $user->id_admin;
			$name	= $user->username;

			// $_SESSION['username'] = $username;
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id', $id);
			// Kalau benar di redirect

			redirect(base_url().'admin/dashboard');

		}else{
			$this->CI->session->set_flashdata('sukses','Oopss.. Username/password salah');
			redirect(base_url().'login');
		}
		return false;
	}

	// Logout
	public function logout() {
		$this->CI->session->unset_userdata('username');
		//$this->CI->session->unset_userdata('akses_level');
		$this->CI->session->unset_userdata('name');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		session_destroy();
		$this->CI->session->set_flashdata('sukses','Terimakasih, Anda berhasil logout');
		redirect(base_url().'login');
	}

}
