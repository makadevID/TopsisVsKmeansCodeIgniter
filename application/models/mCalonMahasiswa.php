<?php
class mCalonMahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function mCalonMahasiswaLihat(){
		$lihat = $this->db->get('calon_mahasiswa');
		return $lihat->result();
 	}

	function mCalonMahasiswaTambahAct() {
		$no_pendaftaran = $this->input->post('no_pendaftaran');
		$nama_calon_mahasiswa = $this->input->post('nama_calon_mahasiswa');
		$alamat_calon_mahasiswa = $this->input->post('alamat_calon_mahasiswa');
		$no_telepon_calon_mahasiswa = $this->input->post('no_telepon_calon_mahasiswa');
		$jenis_kelamin_calon_mahasiswa = $this->input->post('jenis_kelamin_calon_mahasiswa');
			$data = array (
				'no_pendaftaran'=> $no_pendaftaran,
				'nama_calon_mahasiswa'=> $nama_calon_mahasiswa,
				'alamat_calon_mahasiswa'=> $alamat_calon_mahasiswa,
				'no_telepon_calon_mahasiswa'=> $no_telepon_calon_mahasiswa,
				'jenis_kelamin_calon_mahasiswa'=> $jenis_kelamin_calon_mahasiswa,
			);
		
		$this->db->insert('calon_mahasiswa', $data);
		$tambah = $this->db->get('calon_mahasiswa');
		return $tambah->result();
	}

	function mCalonMahasiswaEdit($data){
		$this->db->where($data);
		$edit = $this->db->get('calon_mahasiswa');
		return $edit->result();
	}

	function mCalonMahasiswaUpdateAct($data,$no_pendaftaran){
		$this->db->where('no_pendaftaran', $no_pendaftaran);
		$this->db->update('calon_mahasiswa',$data);
	}
	
	function mCalonMahasiswaHapus($data){
		$this->db->delete('calon_mahasiswa',$data);
	}


}
 
?>