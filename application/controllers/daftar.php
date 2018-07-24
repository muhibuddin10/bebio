<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

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
		$data['halaman'] = 'daftar';
		$this->load->view('main', $data);
	}

	public function tambah() 
	{
		$nama = $this->input->post('nama');
		$sandi = $this->input->post('sandi');
		$validasi = $this->pemain_model->validasi($nama, $sandi);
		$hasil = count($validasi);
		if($hasil>0){
		    $this->session->set_flashdata('daftar_gagal', 'Pendaftaran Gagal, Silahkan daftar ulang!');
		    redirect('login');
		}
		else{
			  $tambahPemain = $this->pemain_model->tambah(); 
		      $this->session->set_flashdata('daftar_berhasil', 'Pendaftaran Berhasil, Silahkan Masuk!');
		      redirect('login');
			}  
	}
}
