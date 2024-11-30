<?php

/**
 * @property $Pemilih_model
 * @property $form_validation
 * @property $input
 * @property $session
 */

class Pemilih extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pemilih_model');
	}

	/**
	 * @return void
	 */
	public function index():void
	{
		$this->load->view('backend/pemilih/list');
	}

	/**
	 * @return void
	 */
	public function insert():void
	{
		$this->load->view('backend/pemilih/insert');
	}

	/**
	 * @param $id_pemilih
	 *
	 * @return void
	 */
	public function edit($id_pemilih):void
	{
		$data['data_pemilih'] = $this->Pemilih_model->getById($id_pemilih);
		$this->load->view('backend/pemilih/edit', $data);
	}

	/**
	 * @param $id_pemilih
	 *
	 * @return void
	 */
	public function update($id_pemilih):void
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama Pemilih', 'required');
		$this->form_validation->set_rules('no_kk', 'Nomor Kartu Keluarga', 'required');
		$this->form_validation->set_rules('no_nik', 'Nomor NIK', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');

		if ($this->form_validation->run()) {
			$this->session->set_flashdata('error', strip_tags(validation_errors()));
		}else {
			$data = [
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'no_kk' => $this->input->post('no_kk'),
				'nik' => $this->input->post('nik'),
				'alamat' => $this->input->post('alamat'),
				'umur'	=> $this->input->post('umur'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'status_perkawinan' => $this->input->post('status_perkawinan'),
			];

			$update_pemilih = $this->Pemilih_model->update($id_pemilih,$data);

			if ($update_pemilih){
				$this->session->set_flashdata('success', 'Pemilih berhasil diupdate');
			}else {
				$this->session->set_flashdata('error', 'Pemilih gagal diupdate');
			}
			redirect(base_url('admin/pemilih'));
		}
		redirect(base_url('admin/pemilih'));

	}

	public function delete($id_pemilih):void
	{
		$data_delete = $this->Pemilih_model->delete($id_pemilih);

		if ($data_delete){
			$this->session->set_flashdata('success', 'Pemilih berhasil dihapus');
		}else {
			$this->session->set_flashdata('error', 'Pemilih gagal dihapus');
		}
		redirect(base_url('admin/pemilih'));
	}

	/**
	 * @return void
	 */
	public function store():void
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama Pemilih', 'required');
		$this->form_validation->set_rules('no_kk', 'Nomor Kartu Keluarga', 'required');
		$this->form_validation->set_rules('no_nik', 'Nomor NIK', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');

		if ($this->form_validation->run()) {
			$this->session->set_flashdata('error', strip_tags(validation_errors()));
		}else {
			$data = [
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'no_kk' => $this->input->post('no_kk'),
				'nik' => $this->input->post('nik'),
				'alamat' => $this->input->post('alamat'),
				'umur'	=> $this->input->post('umur'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'status_perkawinan' => $this->input->post('status_perkawinan'),
			];


			$insert_pemilih = $this->Pemilih_model->insert($data);

			if ($insert_pemilih){
				$this->session->set_flashdata('success', 'Pemilih berhasil ditambahkan');
			}else {
				$this->session->set_flashdata('error', 'Pemilih gagal ditambahkan');
			}
			redirect(base_url('admin/pemilih'));
		}
		redirect(base_url('admin/pemilih'));

	}

	public function get_data_pemilih(): void
	{
		$fetch_data = $this->Pemilih_model->make_datatables();
		if (is_array($fetch_data)) {
			$data = array();
			$start = $_POST['start'];
			$no = $start + 1;
			foreach ($fetch_data as $row) {
				$sub_array = array();
				$sub_array[] = $no++;
				$sub_array[] = $row->nama_lengkap;
				$sub_array[] = $row->nik;
				$sub_array[] = $row->no_kk;
				$sub_array[] = $row->alamat;
				$sub_array[] = longdate_indo($row->tanggal_lahir);
				$sub_array[] = $row->jenis_kelamin;
				$sub_array[] = $row->status_perkawinan;
				$sub_array[] = '<a href="' . site_url('admin/pemilih/edit/' . $row->id_pemilih) . '" class="btn btn-info btn-xs update"><i class="fa fa-edit"></i></a>
                     <a href="' . site_url('admin/pemilih/delete/' . $row->id_pemilih) . '" onclick="return confirm(\'Apakah anda yakin?\')" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></a>';
				$data[] = $sub_array;
			}

			$output = array(
				"draw" => intval($_POST["draw"]),
				"recordsTotal" => $this->Pemilih_model->get_all_data(),
				"recordsFiltered" => $this->Pemilih_model->get_filtered_data(),
				"data" => $data,
			);
			echo json_encode($output);
		} else {
			echo "Error: Fetch data is not an array.";
		}
	}
}
