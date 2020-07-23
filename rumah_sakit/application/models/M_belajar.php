<?php
/**
* 
*/
class M_belajar extends CI_Model
{
	
	function save($datasensor)
	{
		$this->db->insert('sensor', $datasensor);
		return TRUE;
	}

	function ambildata(){
		$this->db->select('*');
		$this->db->from('sensor');
		$query = $this->db->get();
		if ($query->num_rows()>0) {
			return $query->result();
		}
	}

	function get_sensor(){
		return $this->db->query("select data_sensor as nilai from sensor order by id_sensor DESC limit 1")->result();

	}

	function ambildataperintah(){
		$this->db->select('*');
		$this->db->from('perintah');
		$this->db->where('id_perintah',1);
		$query = $this->db->get();
		if ($query->num_rows()>0) {
			return $query->result();
		}
	}

	
}

?>