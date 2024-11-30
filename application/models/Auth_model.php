<?php

/**
 * @property $db
 */

class Auth_model extends CI_Model
{
	public function getByUsername($id_users)
	{
		return $this->db->get_where('users', ['username' => $id_users])->row_array();
	}

	public function insert($data)
	{
		return $this->db->insert('users', $data);
	}

	public function update($id_users, $data)
	{
		$this->db->where('id_users', $id_users);
		return $this->db->update('users', $data);
	}

	public function delete($id_users)
	{
		$this->db->where('id_users', $id_users);
		return $this->db->delete('users');
	}
}
