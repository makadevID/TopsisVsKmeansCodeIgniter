<?php

session_start();
class cKriteria extends CI_Controller{
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('hakakses')!="1") {
			redirect('cWelcomeUser');
		}
		$this->load->helper(array('url','form'));
		$this->load->model('mKriteria');
	}

	function index(){
		$data['data_kriteria']=$this->mKriteria->mKriteriaLihat();
		$this->template->load('template','kriteria/index', $data);
	}
	
	function edit($keterangan){
		$data=array(
			'keterangan'=>$keterangan
			);
		$data['data_edit']=$this->mKriteria->mKriteriaEdit($data);
		$this->template->load('template','kriteria/vKriteriaEdit', $data);
	}

	function update_act(){
		$keterangan = $this->input->post('keterangan');
		$data=array(			
			'nil_raport'=>$this->input->post('nil_raport'),
			'tes_tulis'=>$this->input->post('tes_tulis'),
			'kepribadian_wawancara'=>$this->input->post('kepribadian_wawancara'),
			'keaktifan'=>$this->input->post('keaktifan'),
			'pekerjaan_orang_tua'=>$this->input->post('pekerjaan_orang_tua'),
			'biaya_hidup_calon_mahasiswa'=>$this->input->post('biaya_hidup_calon_mahasiswa'),
			'pekerjaan'=>$this->input->post('pekerjaan'),
			'prestasi_semasa_calon_mahasiswa'=>$this->input->post('prestasi_semasa_calon_mahasiswa'),
			'beasiswa'=>$this->input->post('beasiswa'),
			'ekstrakulikuler'=>$this->input->post('ekstrakulikuler'),
			);
		$this->mKriteria->mKriteriaUpdateAct($data,$keterangan);
		redirect(base_url().'index.php/cKriteria/index');
	}

	
}

?>