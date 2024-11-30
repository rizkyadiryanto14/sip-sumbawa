<?php

/**
 * @property $db
 */

class Pemilih_model extends CI_Model
{

	public function insert($data)
	{
		return $this->db->insert('pemilih', $data);
	}

	public function update($id_pemilih, $data)
	{
		$this->db->where('id_pemilih', $id_pemilih);
		return $this->db->update('pemilih', $data);
	}

	public function getById($id_pemilih)
	{
		return $this->db->get_where('pemilih', ['id_pemilih' => $id_pemilih])->row_array();
	}

	public function delete($id_pemilih)
	{
		$this->db->where('id_pemilih', $id_pemilih);
		return $this->db->delete('pemilih');
	}

	//model untuk jquery
	function make_query(): void
	{
		$this->db->select('pemilih.*')
			->from("pemilih");
		if (isset($_POST["search"]["value"])) {
			$this->db->like("alamat", $_POST["search"]["value"]);
			$this->db->or_like("nama_lengkap", $_POST["search"]["value"]);
		}
		if (isset($_POST["order"])) {
			$this->db->order_by($_POST['order']['0']['column'], $_POST['order']['0']['dir']);
		} else {
			$this->db->order_by('id_pemilih', 'DESC');
		}
	}

	function make_datatables()
	{
		$this->make_query();
		if ($_POST["length"] != -1) {
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get();
		if ($query === false) {
			return false;
		}

		return $query->result();
	}

	function get_filtered_data()
	{
		$this->make_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	function get_all_data()
	{
		$this->db->select("*");
		$this->db->from("pemilih");
		return $this->db->count_all_results();
	}
}
