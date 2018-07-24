<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPredikat extends CI_Controller {

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
		$data['halaman'] = 'daftarPredikat';
		$this->load->view('main', $data);
	}

	  public function daftarPredikat() 
  {
  	$no = 0;
    $result = array('data' => array());

    $data = $this->predikat_model->daftar_predikat();
    foreach ($data as $key => $value) {
      $no++;

      if($value['emas']==1){
      	$emas = '<img src="gambar/pialaTabel/emas.png">';
      }else{
      	$emas = '<h4>-</h4>';
      }

      if($value['perak']==1){
      	$perak = '<img src="gambar/pialaTabel/perak.png">';
      }else{
      	$perak = '<h4>-</h4>';
      }

      if($value['perunggu']==1){
      	$perunggu = '<img src="gambar/pialaTabel/perunggu.png">';
      }else{
      	$perunggu = '<h4>-</h4>';
      }

      if($value['selesai']==1){
      	$selesai = '<img src="gambar/pialaTabel/selesai.png">';
      }else{
      	$selesai = '<h5>-</h5>';
      }

      $result['data'][$key] = array(
        $no,
        $value['nama'],
        $value['poin'],
        $perunggu,
        $perak,
        $emas,
        $selesai,
      ); 
    } // /foreach

    echo json_encode($result);
  }

}
