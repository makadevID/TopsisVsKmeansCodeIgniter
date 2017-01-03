<?php
class cPengguna extends CI_Controller{
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('hakakses')=="") {
			redirect('cWelcomeUser');
		}
		$this->load->helper(array('url','form'));
		$this->load->model('mPengguna');
		$this->load->library('template');
	}

	function index(){
		$data['username'] = $this->session->userdata('username');
		$this->load->model('mPengguna');
		$data['data_pengguna']=$this->mPengguna->mPenggunaLihat($data['username']);
		$this->template->load('template','pengguna/index', $data);
	}

	function tambah(){
		$this->template->load('template','pengguna/vPenggunaTambah');

	}

	function tambah_act(){
		$data=array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'hakakses' => $this->input->post('hakakses')			
			);
		$this->mPengguna->mPenggunaTambahAct($data);	
		$this->mPengguna->mPenggunaTambahActParameter($data);
		redirect(base_url().'index.php/cPengguna/index');
	}

	function edit($username){
		$data=array(
			'username'=>$username
			);
		$data['data_edit']=$this->mPengguna->mPenggunaEdit($data);
		$this->template->load('template','pengguna/vPenggunaEdit', $data);
	}

	function update_act(){
		$username = $this->input->post('username');
		$data=array(			
			'password'=>$this->input->post('password'),
			'hakakses'=>$this->input->post('hakakses'),
			);
		$this->mPengguna->mPenggunaUpdateAct($data,$username);
		redirect(base_url().'index.php/cPengguna/index');
	}

	function hapus($username){
		$data=array(
			'username' => $username
			);
		$this->mPengguna->mPenggunaHapus($data);
		redirect(base_url().'index.php/cPengguna/index');
	}

}
 
?>