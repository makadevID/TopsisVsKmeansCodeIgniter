<?php
class cParameter extends CI_Controller{
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('hakakses')!="1") {
			redirect('cWelcomeUser');
		}
		$this->load->helper(array('url','form'));
		$this->load->model('mParameter');
		$this->load->library('template');
	}

	function index(){
		$data['data_parameter']=$this->mParameter->mParameterLihat();
		$this->template->load('template','parameter/index', $data);
	}

	function tambah(){
		$data['rs_calon_mahasiswa'] = $this->mParameter->mCalonMahasiswaLihat();
		$this->template->load('template','parameter/vParameterTambah', $data);
	}

	function tambah_act(){
		$data=array(
			'no_pendaftaran'=>$this->input->post('no_pendaftaran'),
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
		$this->mParameter->mParameterTambahAct($data);
		$this->mParameter->kuadrat_insert($data);	
		$this->mParameter->normalisasi_matriks_insert($data);
		$this->mParameter->weighted_normalized_decision_matrixs_insert($data);
		$this->mParameter->separasi($data);
		$this->mParameter->kedekatan_relatif($data);
		$this->mParameter->ranking($data);
		$this->mParameter->loginCalonMahasiswa($data);
		redirect(base_url().'index.php/cParameter/index');
	}

	function edit($id_cluster){
		$data=array(
			'id_cluster'=>$id_cluster
			);
		$data['data_edit']=$this->mParameter->mParameterEdit($data);
		$this->template->load('template','Parameter/vParameterEdit', $data);
	}

	function update_act(){
		$id_cluster = $this->input->post('id_cluster');
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
		$this->mParameter->mParameterUpdateAct($data,$id_cluster);
		redirect(base_url().'index.php/cParameter/index');
	}

	function hapus($id_cluster){
		$data=array(
			'id_cluster' => $id_cluster
			);
		$this->mParameter->mParameterHapus($data);
		redirect(base_url().'index.php/cParameter/index');
	}

}
 
?>