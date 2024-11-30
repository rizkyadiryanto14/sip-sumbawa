<?php

/**
 * @property $Dashboard_model
 */


class  Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model');
	}

	public function index()
	{
		$data = [
			'average_age'	=> $this->Dashboard_model->get_average_age(),
			'male_gender'	=> $this->Dashboard_model->get_count_male_gender(),
			'female_gender'	=> $this->Dashboard_model->get_count_female_gender(),
			'pemilih'		=> $this->Dashboard_model->get_count_pemilih()
		];
		$this->load->view('backend/dashboard', $data);
	}
}
