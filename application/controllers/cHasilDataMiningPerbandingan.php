<?php
class cHasilDataMiningPerbandingan extends CI_Controller{
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('hakakses')!="1") {
			redirect('cWelcomeAdmin');
		}
		$this->load->helper(array('url','form'));
		$this->load->model('mDataMining');
		$this->load->library('template');
	}

	function index() {
 		$this->load->model('mDataMining');
		$data['data_k_means_topsis']=$this->mDataMining->topsisKmeansAdmin();
		$this->template->load('template','dataMining/indexPerbandingan', $data);
 	}
}

?>

