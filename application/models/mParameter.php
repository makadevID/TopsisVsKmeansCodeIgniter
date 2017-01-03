<?php
class mParameter extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function mParameterLihat(){
		$this->db->select('*');
		$this->db->from('cluster');
		$this->db->join('calon_mahasiswa', 'cluster.no_pendaftaran = calon_mahasiswa.no_pendaftaran' );
		$this->db->order_by('cluster.id_cluster', 'asc');
		$lihat = $this->db->get();
		return $lihat->result();
 	}

	function mParameterEdit($data){
		$this->db->where($data);
		$this->db->select('*');
		$this->db->from('cluster');
		$this->db->join('calon_mahasiswa', 'cluster.no_pendaftaran = calon_mahasiswa.no_pendaftaran' );
		$edit = $this->db->get();
		return $edit->result();
	}

	function mParameterUpdateAct($data,$id_cluster){
		$this->db->where('id_cluster', $id_cluster);
		$this->db->update('cluster',$data);
	}
	
	function mParameterHapus($data){
		$this->db->delete('cluster',$data);
	}
	
	function mCalonMahasiswaLihat(){
		$lihat = $this->db->get('calon_mahasiswa');
		return $lihat->result();
 	}

 	function mParameterTambahAct() {
		$no_pendaftaran = $this->input->post('no_pendaftaran');
		$nil_raport = $this->input->post('nil_raport');
		$tes_tulis = $this->input->post('tes_tulis');
		$kepribadian_wawancara = $this->input->post('kepribadian_wawancara');
		$keaktifan = $this->input->post('keaktifan');
		$pekerjaan_orang_tua = $this->input->post('pekerjaan_orang_tua');
		$biaya_hidup_calon_mahasiswa = $this->input->post('biaya_hidup_calon_mahasiswa');
		$pekerjaan = $this->input->post('pekerjaan');
		$prestasi_semasa_calon_mahasiswa = $this->input->post('prestasi_semasa_calon_mahasiswa');
		$beasiswa = $this->input->post('beasiswa');
		$ekstrakulikuler = $this->input->post('ekstrakulikuler');
		
			$data = array (
				'no_pendaftaran' => $no_pendaftaran,
				'nil_raport'=> $nil_raport,
				'tes_tulis'=> $tes_tulis,
				'kepribadian_wawancara' => $kepribadian_wawancara,
				'keaktifan' => $keaktifan,
				'pekerjaan_orang_tua' => $pekerjaan_orang_tua,
				'biaya_hidup_calon_mahasiswa' => $biaya_hidup_calon_mahasiswa,
				'pekerjaan' => $pekerjaan,
				'prestasi_semasa_calon_mahasiswa' => $prestasi_semasa_calon_mahasiswa,
				'beasiswa' => $beasiswa,
				'ekstrakulikuler' => $ekstrakulikuler,
			);

			
		$this->db->insert('cluster', $data);
		
		$tambah = $this->db->get('cluster');

		return $tambah->result();
	}

	function kuadrat_insert() {
		$no_pendaftaran = $this->input->post('no_pendaftaran');
		$nil_raport = $this->input->post('nil_raport');
		$tes_tulis = $this->input->post('tes_tulis');
		$kepribadian_wawancara = $this->input->post('kepribadian_wawancara');
		$keaktifan = $this->input->post('keaktifan');
		$pekerjaan_orang_tua = $this->input->post('pekerjaan_orang_tua');
		$biaya_hidup_calon_mahasiswa = $this->input->post('biaya_hidup_calon_mahasiswa');
		$pekerjaan = $this->input->post('pekerjaan');
		$prestasi_semasa_calon_mahasiswa = $this->input->post('prestasi_semasa_calon_mahasiswa');
		$beasiswa = $this->input->post('beasiswa');
		$ekstrakulikuler = $this->input->post('ekstrakulikuler');

			$dataKuadrat = array (
				'no_pendaftaran' => $no_pendaftaran,
				'nil_raport'=> 0,
				'tes_tulis'=> 0,
				'kepribadian_wawancara' => 0,
				'keaktifan' => 0,
				'pekerjaan_orang_tua' => 0,
				'biaya_hidup_calon_mahasiswa' => 0,
				'pekerjaan' => 0,
				'prestasi_semasa_calon_mahasiswa' => 0,
				'beasiswa' => 0,
				'ekstrakulikuler' => 0,
			);

		$this->db->insert('kuadrat', $dataKuadrat);
		
	}

	function normalisasi_matriks_insert() {
    	$data = array (
				'no_pendaftaran' => $this->input->post('no_pendaftaran'),
				'nil_raport'=> 0,
				'tes_tulis'=> 0,
				'kepribadian_wawancara' => 0,
				'keaktifan' => 0,
				'pekerjaan_orang_tua' => 0,
				'biaya_hidup_calon_mahasiswa' => 0,
				'pekerjaan' => 0,
				'prestasi_semasa_calon_mahasiswa' => 0,
				'beasiswa' => 0,
				'ekstrakulikuler' => 0,
			);
			
		$this->db->insert('normalisasi_matriks', $data);
		
	}

	function weighted_normalized_decision_matrixs_insert() {
    	$data = array (
				'no_pendaftaran' => $this->input->post('no_pendaftaran'),
				'nil_raport'=> 0,
				'tes_tulis'=> 0,
				'kepribadian_wawancara' => 0,
				'keaktifan' => 0,
				'pekerjaan_orang_tua' => 0,
				'biaya_hidup_calon_mahasiswa' => 0,
				'pekerjaan' => 0,
				'prestasi_semasa_calon_mahasiswa' => 0,
				'beasiswa' => 0,
				'ekstrakulikuler' => 0,
			);
			
		$this->db->insert('weighted_normalized_decision_matrix', $data);
		
	}

	function separasi() {
		$data = array (
				'no_pendaftaran' => $this->input->post('no_pendaftaran'),
				
			);
		$this->db->insert('separasi', $data);	
	}

	function kedekatan_relatif() {
		$data = array (
				'no_pendaftaran' => $this->input->post('no_pendaftaran'),
				
			);
		$this->db->insert('kedekatan_relatif', $data);	
	}

	function ranking() {
		$data = array (
				'no_pendaftaran' => $this->input->post('no_pendaftaran'),
				
			);
		$this->db->insert('rangking', $data);	
	}

	function loginCalonMahasiswa() {
		$data = array (
				'username' => $this->input->post('no_pendaftaran'),
				'password' => md5('1234'),
			);
		$this->db->insert('user', $data);	
	}

}
 
?>