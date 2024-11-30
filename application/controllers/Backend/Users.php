<?php

/**
 * @property $Users_model
 * @property $input
 */

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
	}

	/**
	 * @return void
	 */
	public function index():void
	{
		$this->load->view('backend/users/list');
	}

	/**
	 * @return void
	 */
	public function get_data_belanja(): void
	{
		$fetch_data = $this->Users_model->make_datatables();
		if (is_array($fetch_data)) {
			$data = array();
			$start = $_POST['start'];
			$no = $start + 1;
			foreach ($fetch_data as $row) {
				$sub_array = array();
				$sub_array[] = $no++;
				$sub_array[] = $row->kode_belanja;
				$sub_array[] = $row->nama_belanja;
				$sub_array[] = longdate_indo($row->tanggal_belanja);
				$sub_array[] = '<a href="' . site_url('belanja/update_view/' . $row->id_users) . '" class="btn btn-info btn-xs update"><i class="fa fa-edit"></i></a>
                     <a href="' . site_url('belanja/delete/' . $row->id_users) . '" onclick="return confirm(\'Apakah anda yakin?\')" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></a>';
				$data[] = $sub_array;
			}

			$output = array(
				"draw" => intval($_POST["draw"]),
				"recordsTotal" => $this->Users_model->get_all_data(),
				"recordsFiltered" => $this->Users_model->get_filtered_data(),
				"data" => $data,
			);
			echo json_encode($output);
		} else {
			echo "Error: Fetch data is not an array.";
		}
	}
}
