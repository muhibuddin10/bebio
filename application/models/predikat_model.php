<?php 

/**
* 
*/
class Predikat_Model extends CI_Model
{
	public function daftar_predikat() 
	{
		$sql = "SELECT *
				FROM daftar_peringkat
				INNER JOIN daftar_pemain
				ON daftar_peringkat.id_pemain=daftar_pemain.id_pemain
				ORDER BY daftar_pemain.poin DESC;";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function infoPredikat() 
	{
		$id_pemain = $this->session->userdata('id_pemain');
		$sql = "SELECT *
				FROM daftar_peringkat
				INNER JOIN daftar_pemain
				ON daftar_peringkat.id_pemain=daftar_pemain.id_pemain
				WHERE daftar_peringkat.id_pemain =$id_pemain;";
		$query = $this->db->query($sql);
		return $query->row();
	}
	
}