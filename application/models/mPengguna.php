<?php
class mPengguna extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function mPenggunaLihat($username){
		if ($username=="admin") {
			$lihat = $this->db->get('user');
		} else {
			$this->db->select('*');
	        $this->db->from('user');
	        $this->db->where('user.username', $username);
	        $lihat = $this->db->get();
	    }
 		return $lihat->result();
	}
		

 	function mPenggunaTambahAct() {
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$hakakses = $this->input->post('hakakses');
		
			$data = array (
				'username'=> $username,
				'password'=> $password,
				'hakakses'=> $hakakses,
			);
			
		$this->db->insert('user', $data);
		$tambah = $this->db->get('user');
		return $tambah->result();
	}

	function mPenggunaEdit($data){
		$this->db->where($data);
		$edit = $this->db->get('user');
		return $edit->result();
	}

	function mPenggunaUpdateAct($data,$username){
		$this->db->where('username', $username);
		$password = md5($this->input->post('password'));
		$hakakses = $this->input->post('hakakses');
		
			$data = array (
				'password'=> $password,
				'hakakses'=> $hakakses,
			);
		$this->db->update('user',$data);
	}
	
	function mPenggunaHapus($data){
		$this->db->delete('user',$data);
	}
	
	public function cek_user($data) {
			$query = $this->db->get_where('user', $data);
			return $query;
	}

}
 
?>