<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MateriSatu extends CI_Controller {

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
		$this->pemain_model->updateJumPercobaan();
		$data['halaman'] = 'materiSatu_view';
		$this->load->view('main', $data);
	}

	public function cekPoin($poin){
		$materi = 1;
		if ($poin>=40 && $poin<80) {
			$bintang = 1;
		}elseif ($poin>=80 && $poin<120) {
			$bintang = 2;
		}elseif ($poin==120) {
			$bintang = 3;
		}else{$bintang = 0;}

		$id_pemain = $this->session->userdata('id_pemain');
		$infoMateri = $this->db->get_where('materi',array('materi' => $materi, 'id_pemain'=>$id_pemain ))->row();
		$dataPredikat = $this->predikat_model->infoPredikat();
		$id_materi = $infoMateri->id_materi;
		if ($poin > $infoMateri->poin) {
			$this->materi_model->updatePoin($id_materi, $poin, $bintang);
			$poinUpdate=$poin-$infoMateri->poin;
			$poinTambah = $dataPredikat->poin+$poinUpdate;
			$this->pemain_model->updatePoin($poinTambah);
		}

		if ($bintang==1) {
			$this->session->set_flashdata('poin', $poin);
			redirect('bintangSatu');
		}elseif ($bintang==2) {
			$this->session->set_flashdata('poin', $poin);
			redirect('bintangDua');
		}elseif ($bintang==3) {
			$this->session->set_flashdata('poin', $poin);
			redirect('bintangTiga');
		}else{redirect("/materi");}
		
	}     

}
