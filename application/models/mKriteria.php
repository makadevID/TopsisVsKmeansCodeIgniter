<?php
class mKriteria extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function mKriteriaLihat(){
		$lihat = $this->db->get('kriteria');
		return $lihat->result();
 	}

	function mKriteriaEdit($data){
		$this->db->where($data);
		$edit = $this->db->get('kriteria');
		return $edit->result();
	}

	function mKriteriaUpdateAct($data,$keterangan){
		$this->db->where('keterangan', $keterangan);
		$this->db->update('kriteria',$data);
	}
	
}
 
?>