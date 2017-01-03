<?php
class cHasilDataMining extends CI_Controller{
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('hakakses')!="0") {
			redirect('cWelcomeUser');
		}
		$this->load->helper(array('url','form'));
		$this->load->model('mDataMining');
		$this->load->library('template');
	}

	function index() {
 		$data['username'] = $this->session->userdata('username');
		$this->load->model('mDataMining');
		$data['data_k_means']=$this->mDataMining->topsisUser($data['username']);
		$data['data_ranking']=$this->mDataMining->kMeansUser($data['username']);
		$this->template->load('template','dataMining/indexUser', $data);
 	}

}

?>

