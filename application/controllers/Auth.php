<?php

/**
 * @property $input
 * @property $Auth_model
 * @property $form_validation
 * @property $session
 */

class  Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	/**
	 * @return void
	 */
	public function index():void
	{
		$this->load->view('auth/login');
	}

	/**
	 * @return void
	 */
	public function login():void
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data_users = $this->Auth_model->getByUsername($username);

		if ($data_users) {
			if (password_verify($password, $data_users['password'])) {
				$usersession = [
					'username' 	=> $data_users['username'],
					'role' 		=> $data_users['role'],
					'id_users' 		=> $data_users['id_users'],
				];
				$this->session->set_userdata($usersession);
				redirect(base_url('dashboard'));
			}else {
				$this->session->set_flashdata('error', 'username atau password salah');
			}
			redirect(base_url('datacenter'));
		}else {
			$this->session->set_flashdata('error', 'user tidak ditemukan dalam database');
		}
		redirect(base_url('datacenter'));
	}

	/**
	 * @return void
	 */
	public function logout():void
	{
		$this->session->sess_destroy();
		redirect(base_url('Home'));
	}
}
