<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

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
		$dataPredikat = $this->predikat_model->infoPredikat();
		$totalPoin = $dataPredikat->poin;
		$emasValue = $dataPredikat->emas;
		$perakValue = $dataPredikat->perak;
		$perungguValue = $dataPredikat->perunggu;
		$selesaiValue = $dataPredikat->selesai;

		if ($totalPoin >= 300 && $totalPoin < 600 && $perungguValue==0) {
			$this->pemain_model->updatePerunggu();
			redirect("/pialaPerunggu");
		}elseif ($totalPoin >= 600 && $totalPoin < 900 && $perakValue==0) {
			$this->pemain_model->updatePerak();
			redirect("/pialaPerak");
		}elseif ($totalPoin >= 900 && $totalPoin < 960 && $emasValue==0) {
			$this->pemain_model->updateEmas();
			redirect("/pialaEmas");
		}elseif ($totalPoin>950 && $selesaiValue==0) {
			$this->pemain_model->updateSelesai();
			redirect("/pialaSelesai");
		}else {
			$id_pemain = $this->session->userdata('id_pemain');
		$infoPeringkat = $this->db->get_where('daftar_peringkat',array('id_pemain' => $id_pemain))->row();
		$materiSatu = $this->db->get_where('materi',array('materi' =>1,'id_pemain' => $id_pemain))->row();
		$materiDua = $this->db->get_where('materi',array('materi' =>2,'id_pemain' => $id_pemain))->row();
		$materiTiga = $this->db->get_where('materi',array('materi' =>3,'id_pemain' => $id_pemain))->row();
		$materiEmpat = $this->db->get_where('materi',array('materi' =>4,'id_pemain' => $id_pemain))->row();
		$materiLima = $this->db->get_where('materi',array('materi' =>5,'id_pemain' => $id_pemain))->row();
		$materiEnam = $this->db->get_where('materi',array('materi' =>6,'id_pemain' => $id_pemain))->row();
		$materiTujuh = $this->db->get_where('materi',array('materi' =>7,'id_pemain' => $id_pemain))->row();
		$materiDelapan = $this->db->get_where('materi',array('materi' =>8,'id_pemain' => $id_pemain))->row();

			$data = array(
								'id_peringkat' => $infoPeringkat->id_peringkat,
								'emas' => $infoPeringkat->emas,
								'perak' => $infoPeringkat->perak,
								'perunggu' => $infoPeringkat->perunggu,
								'selesai' => $infoPeringkat->selesai,

								'poinM1' => $materiSatu->poin,
								'bintangM1' => $materiSatu->bintang,
								'poinM2' => $materiDua->poin,
								'bintangM2' => $materiDua->bintang,
								'poinM3' => $materiTiga->poin,
								'bintangM3' => $materiTiga->bintang,
								'poinM4' => $materiEmpat->poin,
								'bintangM4' => $materiEmpat->bintang,
								'poinM5' => $materiLima->poin,
								'bintangM5' => $materiLima->bintang,
								'poinM6' => $materiEnam->poin,
								'bintangM6' => $materiEnam->bintang,
								'poinM7' => $materiTujuh->poin,
								'bintangM7' => $materiTujuh->bintang,
								'poinM8' => $materiDelapan->poin,
								'bintangM8' => $materiDelapan->bintang,
								'totalJumlahPoin' => $dataPredikat->poin,
								'halaman' => 'materi'
						 );

		$this->load->view('main', $data);
		}
	}

}
