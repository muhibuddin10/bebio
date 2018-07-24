<?php 

/**
* 
*/
class Materi_Model extends CI_Model
{
	public function updatePoin($id_materi, $poin, $bintang) 
	{
		$id_pemain = $this->session->userdata('id_pemain');
		$bintang = 	$bintang;

		$data = array(
				'poin' => $poin,
				'bintang' => $bintang,
			);

			$this->db->where('id_materi', $id_materi);
			$sql = $this->db->update('materi', $data);
	}
	
}

?>