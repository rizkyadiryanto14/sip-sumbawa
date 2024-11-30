<?php

/**
 * @property $db
 */

class Dashboard_model extends CI_Model
{
	function get_count_male_gender()
	{
		$this->db->select("*");
		$this->db->from("pemilih");
		$this->db->where("jenis_kelamin", "Laki-Laki");
		return $this->db->count_all_results();
	}

	function get_count_female_gender()
	{
		$this->db->select("*");
		$this->db->from("pemilih");
		$this->db->where("jenis_kelamin", "Perempuan");
		return $this->db->count_all_results();
	}

	function get_average_age()
	{
		$this->db->select_avg('umur');
		$this->db->from('pemilih');
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$row = $query->row();
			return $row->umur;
		} else {
			return 0;
		}
	}

	public function get_count_pemilih()
	{
		$this->db->select("*");
		$this->db->from("pemilih");
		return $this->db->count_all_results();
	}
}
