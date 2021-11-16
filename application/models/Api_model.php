<?php
class Api_model extends CI_Model
{
	//traemoos todos los datos de la tabla
	function fetch_all()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('t_usuarios');
	}

	function insert_api($data)
	{
		$this->db->insert('t_usuarios', $data);
	}

	function fetch_single_user($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('t_usuarios');
		return $query->result_array();
	}

	function update_api($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('t_usuarios', $data);
	}

	function delete_single_user($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('t_usuarios');
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

?>
