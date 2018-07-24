<?php 

/**
* 
*/
class Pemain_Model extends CI_Model
{
	public function validasi($nama, $sandi)
	{	
		$sql = "SELECT nama FROM daftar_pemain WHERE nama = '$nama' AND sandi = '$sandi'";
		$query = $this->db->query($sql, array($nama));
		return $query->row_array();
	}

	public function tambah() 
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'sandi' => $this->input->post('sandi'),
		);

		$sql = $this->db->insert('daftar_pemain', $data);

		if($sql === true) {
			return true; 
		} else {
			return false;
		}
	} // /create function

	public function tambahDataMateri() 
	{
		$id_pemain = $this->session->userdata('id_pemain');

		for ($i=1; $i < 9; $i++) { 
			$data1 = array(
						'materi' => $i,
						'id_pemain' => $id_pemain,
						'poin'=> 0,
						'bintang' => 0,
					);
			$sql = $this->db->insert('materi', $data1);
		}

			$data = array(
				'tambah_materi' => 1
			);

			$this->db->where('id_pemain', $id_pemain);
			$sql = $this->db->update('daftar_pemain', $data);
		
	} // /create function

	public function tambahDataPeringkat() 
	{
		$id_pemain = $this->session->userdata('id_pemain');
			$data1 = array(
						'emas'=> 0,
						'perak' => 0,
						'perunggu' => 0,
						'selesai' => 0,
						'id_pemain' => $id_pemain,
					);
			$sql = $this->db->insert('daftar_peringkat', $data1);
			$data = array(
				'tambah_peringkat' => 1
			);
			$this->db->where('id_pemain', $id_pemain);
			$sql = $this->db->update('daftar_pemain', $data);
	} 

	public function updatePoin($poinTambah) 
	{
		$id_pemain = $this->session->userdata('id_pemain');
		$data = array(
				'poin' => $poinTambah,
			);
			$this->db->where('id_pemain', $id_pemain);
			$sql = $this->db->update('daftar_pemain', $data);
	}

	public function updatePerunggu() 
	{
		$id_pemain = $this->session->userdata('id_pemain');
		$data = array(
				'perunggu' => 1,
			);
			$this->db->where('id_pemain', $id_pemain);
			$sql = $this->db->update('daftar_peringkat', $data);
	}

	public function updatePerak() 
	{
		$id_pemain = $this->session->userdata('id_pemain');
		$data = array(
				'perak' => 1,
			);
			$this->db->where('id_pemain', $id_pemain);
			$sql = $this->db->update('daftar_peringkat', $data);
	}

	public function updateEmas() 
	{
		$id_pemain = $this->session->userdata('id_pemain');
		$data = array(
				'emas' => 1,
			);
			$this->db->where('id_pemain', $id_pemain);
			$sql = $this->db->update('daftar_peringkat', $data);
	}

	public function updateSelesai() 
	{
		$id_pemain = $this->session->userdata('id_pemain');
		$data = array(
				'selesai' => 1,
			);
			$this->db->where('id_pemain', $id_pemain);
			$sql = $this->db->update('daftar_peringkat', $data);
	}

	public function updateJumPercobaan() 
	{
		$id_pemain = $this->session->userdata('id_pemain');
		$dataJumPercobaan = $this->db->get_where('daftar_pemain',array('id_pemain'=>$id_pemain ))->row();
		$jumPercobaan = $dataJumPercobaan->jumlah_percobaan;
		$newJumPercobaan = $jumPercobaan+=1;
		$data = array(
				'jumlah_percobaan' => $newJumPercobaan,
			);
			$this->db->where('id_pemain', $id_pemain);
			$sql = $this->db->update('daftar_pemain', $data);
	}
	
}