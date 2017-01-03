<?php

session_start();
class cCalonMahasiswa extends CI_Controller{
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('hakakses')!="1") {
			redirect('cWelcomeUser');
		}
		$this->load->helper(array('url','form'));
		$this->load->model('mCalonMahasiswa');
	}

	function index(){
		$data['data_calon_mahasiswa']=$this->mCalonMahasiswa->mCalonMahasiswaLihat();
		$this->template->load('template','calonMahasiswa/index', $data);
	}
	
	function tambah(){
		$this->template->load('template','calonMahasiswa/vCalonMahasiswaTambah');
	}

	function tambah_act(){
		$data=array(
			'no_pendaftaran' => $this->input->post('no_pendaftaran'),
			'nama_calon_mahasiswa' => $this->input->post('nama_calon_mahasiswa'),
			'alamat_calon_mahasiswa' => $this->input->post('alamat_calon_mahasiswa'),
			'no_telepon_calon_mahasiswa' => $this->input->post('no_telepon_calon_mahasiswa'),
			'jenis_kelamin_calon_mahasiswa' => $this->input->post('jenis_kelamin_calon_mahasiswa')
			);
		$this->mCalonMahasiswa->mCalonMahasiswaTambahAct($data);	
		redirect(base_url().'index.php/cCalonMahasiswa/index');
	}

	function edit($no_pendaftaran){
		$data=array(
			'no_pendaftaran'=>$no_pendaftaran
			);
		$data['data_edit']=$this->mCalonMahasiswa->mCalonMahasiswaEdit($data);
		$this->template->load('template','calonMahasiswa/vCalonMahasiswaEdit', $data);
	}

	function update_act(){
		$no_pendaftaran = $this->input->post('no_pendaftaran');
		$data=array(			
			'nama_calon_mahasiswa'=>$this->input->post('nama_calon_mahasiswa'),
			'alamat_calon_mahasiswa'=>$this->input->post('alamat_calon_mahasiswa'),
			'no_telepon_calon_mahasiswa' => $this->input->post('no_telepon_calon_mahasiswa'),
			'jenis_kelamin_calon_mahasiswa' => $this->input->post('jenis_kelamin_calon_mahasiswa')
			);
		$this->mCalonMahasiswa->mCalonMahasiswaUpdateAct($data,$no_pendaftaran);
		redirect(base_url().'index.php/cCalonMahasiswa/index');
	}

	function hapus($no_pendaftaran){
		$data=array(
			'no_pendaftaran' => $no_pendaftaran
			);
		$this->mCalonMahasiswa->mCalonMahasiswaHapus($data);
		redirect(base_url().'index.php/cCalonMahasiswa/index');
	}
}

?>