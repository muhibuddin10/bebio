<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['halaman'] = 'login';
		$this->load->view('main', $data);
	}

	public function ValidasiLogin() 
	{
		$nama = $this->input->post('nama');
		$sandi = $this->input->post('sandi');
		$validasi = $this->pemain_model->validasi($nama, $sandi);
		$hasil = count($validasi);
		if($hasil>0){
			$infoLogin = $this->db->get_where('daftar_pemain',array('nama' => $nama, 'sandi'=>$sandi ))->row();
				$dataSesi  = array(
					'id_pemain' => $infoLogin->id_pemain,
					'nama' => $infoLogin->nama, 
					'sandi' => $infoLogin->sandi, 
					'jumlah_percobaan' => $infoLogin->jumlah_percobaan, 
					'point' => $infoLogin->jumlah_percobaan,
					'jumlah_bintang' => $infoLogin->jumlah_bintang, 
					'tambah_materi' => $infoLogin->tambah_materi,
					'tambah_peringkat' => $infoLogin->tambah_peringkat
				);
			$this->session->set_userdata($dataSesi);
			$mtr = $this->session->userdata('tambah_materi');
			$peringkat = $this->session->userdata('tambah_peringkat');
			if($mtr==1 && $peringkat==1){
				redirect('materi');
			}else{
				$this->pemain_model->tambahDataMateri();
				$this->pemain_model->tambahDataPeringkat();
				redirect('materi');
			}

		}
		else{
		      $this->session->set_flashdata('masuk_gagal', 'Gagal! Nama atau Sandi belum terdaftar!');
		      redirect('login');
			}  
	}
	
	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
