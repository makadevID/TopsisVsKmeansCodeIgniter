<?php
class mDataMining extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function mParameterLihat(){
		$this->db->select('*');
		$this->db->from('cluster');
		$this->db->join('calon_mahasiswa', 'cluster.no_pendaftaran = calon_mahasiswa.no_pendaftaran' );
		$this->db->order_by('cluster.id_cluster', 'asc');
		$query = $this->db->get();
		return $query->result();
 	}

 	function mKuadratLihat(){
		$this->db->select('*');
		$this->db->from('kuadrat');
		$this->db->join('calon_mahasiswa', 'kuadrat.no_pendaftaran = calon_mahasiswa.no_pendaftaran' );
		$this->db->order_by('kuadrat.id_cluster', 'asc');
		$lihat = $this->db->get();
		return $lihat->result();
 	}

 	function mAkarKuadratLihat(){
		$this->db->select('*');
		$this->db->from('jumlah_kuadrat');
		$lihat = $this->db->get();
		return $lihat->result();
 	}

 	function mParameterUpdateAct($data,$id_cluster){
		$this->db->where('id_cluster', $id_cluster);
		$this->db->update('cluster',$data);
	}

	function kMeans() {
		//cek jml calon mahasiswa
		$queryz = $this->db->query("SELECT COUNT(*) FROM cluster") or 0;
		$jmlcalon = $queryz->result();
		if ($jmlcalon >= 1) {
		    if ($jmlcalon >= 2) {
		        //hitung(1, 1);
		        $id = 1;
		        $versi = 1;
		        if ($jmlcalon >= 3) {
		            //$hasil = hitung(1, 2);
		            $id = 1;
		        	$versi = 2;
		            $urutan = 2;
		            while (($id == false) && ($versi == false) && ($urutan <= $jmlcalon)) {
		                $id = $urutan;
		        		$versi = 2;
		                $urutan++;
		            }
		        }
		    }
		}
	

		$datano1 = 0;
	    $datano2 = 0;
	    $C1a = 0;
	    $C2a = 0;
	    $C1b = 0;
	    $C2b = 0;
	    $C1c = 0;
	    $C2c = 0;
	    $C1d = 0;
	    $C2d = 0;
	    $C1e = 0;
	    $C2e = 0;
	    $C1f = 0;
	    $C2f = 0;
	    $C1g = 0;
	    $C2g = 0;
	    $C1h = 0;
	    $C2h = 0;
	    $C1i = 0;
	    $C2i = 0;
	    $C1j = 0;
	    $C2j = 0;
	    $query1 = $this->db->query('SELECT * FROM cluster');
	    $no = 1;
	    foreach ($query1->result() as $data1) {
	        if ($no == 1 || $no == $id) {
	            if ($no == 1) {
	              $datano1 = $data1->id_cluster;
	            } else if ($no == $id) {
	              $datano2 = $data1->id_cluster;
	            }
	            $C1a += $data1->nil_raport;
	            $C1b += $data1->tes_tulis;
	            $C1c += $data1->kepribadian_wawancara;
	            $C1d += $data1->keaktifan;
	            $C1e += $data1->pekerjaan_orang_tua;
	            $C1f += $data1->biaya_hidup_calon_mahasiswa;
	            $C1g += $data1->pekerjaan;
	            $C1h += $data1->prestasi_semasa_calon_mahasiswa;
	            $C1i += $data1->beasiswa;
	            $C1j += $data1->ekstrakulikuler;
	        }
	        $no++;
	    }
	    if ($id > 1) {
	        $C1a = $C1a / 2;
	        $C1b = $C1b / 2;
	        $C1c = $C1c / 2;
	        $C1d = $C1d / 2;
	        $C1e = $C1e / 2;
	        $C1f = $C1f / 2;
	        $C1g = $C1g / 2;
	        $C1h = $C1h / 2;
	        $C1i = $C1i / 2;
	        $C1j = $C1j / 2;
	    }
	    if ($versi == 1) {
	        $queryjmldata2 = $this->db->query('SELECT * FROM cluster LIMIT 1,1') or 0;
	        $result = $queryjmldata2->row_array();
			$jmldata2 = $result['COUNT(*)'];
	    } else {
	        $queryjmldata2 = $this->db->query('SELECT COUNT(*) FROM cluster WHERE id_cluster!=' . $datano1 . ' AND id_cluster!=' . $datano2) or 0;
	        $result = $queryjmldata2->row_array();
			$jmldata2 = $result['COUNT(*)'];
	    }
	    if ($jmldata2 > 0) {
	        if ($versi == 1) {
	            $query2 = $this->db->query('SELECT * FROM cluster LIMIT 1,1');

	        } else {
	            $query2 = $this->db->query('SELECT * FROM cluster WHERE id_cluster!=' . $datano1 . ' AND id_cluster!=' . $datano2)or 0;
	        }
	        foreach ($query2->result() as $data2) {
	    	    $C2a += $data2->nil_raport;
	            $C2b += $data2->tes_tulis;
	            $C2c += $data2->kepribadian_wawancara;
	            $C2d += $data2->keaktifan;
	            $C2e += $data2->pekerjaan_orang_tua;
	            $C2f += $data2->biaya_hidup_calon_mahasiswa;
	            $C2g += $data2->pekerjaan;
	            $C2h += $data2->prestasi_semasa_calon_mahasiswa;
	        	$C2i += $data2->beasiswa;
	            $C2j += $data2->ekstrakulikuler;
	        }

	       $C2a = $C2a / $jmldata2;
	       $C2b = $C2b / $jmldata2;
	       $C2c = $C2c / $jmldata2;
	       $C2d = $C2d / $jmldata2;
	       $C2e = $C2e / $jmldata2;
	       $C2f = $C2f / $jmldata2;
	       $C2g = $C2g / $jmldata2;
	       $C2h = $C2h / $jmldata2;
	       $C2i = $C2i / $jmldata2;
	       $C2j = $C2j / $jmldata2;
	    }

		//metode k-means
	    //hitung jarak data dengan centroid euclidean
	    $query = $this->db->query('SELECT * FROM cluster ORDER BY no_pendaftaran ASC');
	    foreach ($query->result() as $data) {
	        //jarak dengan cluster1
	        $Dc1 = sqrt(pow(($data->nil_raport) - $C1a, 2) + pow(($data->tes_tulis) - $C1b, 2) + pow(($data->kepribadian_wawancara) - $C1c, 2) + pow(($data->keaktifan) - $C1d, 2) + pow(($data->pekerjaan_orang_tua) - $C1e, 2) + pow(($data->biaya_hidup_calon_mahasiswa) - $C1f, 2) + pow(($data->pekerjaan) - $C1g, 2) + pow(($data->prestasi_semasa_calon_mahasiswa) - $C1h, 2) + pow(($data->beasiswa) - $C1i, 2)  + pow(($data->ekstrakulikuler) - $C1j, 2));
	        //jarak dengan cluster2
	        $Dc2 = sqrt(pow(($data->nil_raport) - $C2a, 2) + pow(($data->tes_tulis) - $C2b, 2) + pow(($data->kepribadian_wawancara) - $C2c, 2) + pow(($data->keaktifan) - $C2d, 2) + pow(($data->pekerjaan_orang_tua) - $C2e, 2) + pow(($data->biaya_hidup_calon_mahasiswa) - $C2f, 2) + pow(($data->pekerjaan) - $C2g, 2) + pow(($data->prestasi_semasa_calon_mahasiswa) - $C2h, 2) + pow(($data->beasiswa) - $C2i, 2)  + pow(($data->ekstrakulikuler) - $C2j, 2));
	        
	        if ($Dc1 < $Dc2) {
		    	$proseskelompok = $this->db->query('UPDATE cluster SET kelompok=1 WHERE id_cluster=' . $data->id_cluster);
	    	} else {
	    		$proseskelompok = $this->db->query('UPDATE cluster SET kelompok=2 WHERE id_cluster=' . $data->id_cluster);
	    	}
            
            $prosesupdate = $this->db->query('UPDATE cluster SET Dc1=' . $Dc1 . ', Dc2=' . $Dc2 . ' WHERE id_cluster=' . $data->id_cluster);
	        
	    }
	}

	function kMeansAccestime($total_time) {
		$query = $this->db->query("UPDATE cluster SET kMeansAccesTime = '$total_time'");
	}  

	function mKriteriaLihat() {
		$this->db->select('*');
		$this->db->from('kriteria');
		$lihat = $this->db->get();
		return $lihat->result();
	}

	function kuadrat_update() {
		$data = $this->db->query("SELECT * FROM cluster");
		foreach ($data->result() as $matriks){

    		$nm1 = $matriks->nil_raport * $matriks->nil_raport;
    		$nm2 = $matriks->tes_tulis * $matriks->tes_tulis;
    		$nm3 = $matriks->kepribadian_wawancara * $matriks->kepribadian_wawancara;
    		$nm4 = $matriks->keaktifan * $matriks->keaktifan;
    		$nm5 = $matriks->pekerjaan_orang_tua * $matriks->pekerjaan_orang_tua;
    		$nm6 = $matriks->biaya_hidup_calon_mahasiswa * $matriks->biaya_hidup_calon_mahasiswa;
    		$nm7 = $matriks->pekerjaan * $matriks->pekerjaan;
    		$nm8 = $matriks->prestasi_semasa_calon_mahasiswa * $matriks->prestasi_semasa_calon_mahasiswa;
    		$nm9 = $matriks->beasiswa * $matriks->beasiswa;
    		$nm10 = $matriks->ekstrakulikuler * $matriks->ekstrakulikuler;
    		
    		$query = $this->db->query("UPDATE kuadrat SET 		nil_raport 		= '$nm1',
																tes_tulis	= '$nm2',
																kepribadian_wawancara	= '$nm3',
																keaktifan	= '$nm4',
																pekerjaan_orang_tua	= '$nm5',
																biaya_hidup_calon_mahasiswa	= '$nm6',
																pekerjaan	= '$nm7',
																prestasi_semasa_calon_mahasiswa	= '$nm8',
																beasiswa	= '$nm9',
																ekstrakulikuler	= '$nm10'
															WHERE no_pendaftaran = '$matriks->no_pendaftaran'");
    	}


	}

	function akar_kuadrat(){
    	$sum1 	= $this->db->query("SELECT SUM(nil_raport) sum FROM kuadrat");
		$sum1a  = $sum1->row_array();
		
		$sum2 	= $this->db->query("SELECT SUM(tes_tulis) sum FROM kuadrat");
		$sum2a  = $sum2->row_array();

		$sum3 	= $this->db->query("SELECT SUM(kepribadian_wawancara) sum FROM kuadrat");
		$sum3a  = $sum3->row_array();

		$sum4 	= $this->db->query("SELECT SUM(keaktifan) sum FROM kuadrat");
		$sum4a  = $sum4->row_array();

		$sum5 	= $this->db->query("SELECT SUM(pekerjaan_orang_tua) sum FROM kuadrat");
		$sum5a  = $sum5->row_array();

		$sum6 	= $this->db->query("SELECT SUM(biaya_hidup_calon_mahasiswa) sum FROM kuadrat");
		$sum6a  = $sum6->row_array();

    	$sum7 	= $this->db->query("SELECT SUM(pekerjaan) sum FROM kuadrat");
		$sum7a  = $sum7->row_array();

		$sum8 	= $this->db->query("SELECT SUM(prestasi_semasa_calon_mahasiswa) sum FROM kuadrat");
		$sum8a  = $sum8->row_array();

		$sum9 	= $this->db->query("SELECT SUM(beasiswa) sum FROM kuadrat");
		$sum9a  = $sum9->row_array();

		$sum10 	= $this->db->query("SELECT SUM(ekstrakulikuler) sum FROM kuadrat");
		$sum10a = $sum10->row_array();

		$akar1 = sqrt($sum1a['sum']);
		$akar2 = sqrt($sum2a['sum']);
		$akar3 = sqrt($sum3a['sum']);
		$akar4 = sqrt($sum4a['sum']);
		$akar5 = sqrt($sum5a['sum']);
		$akar6 = sqrt($sum6a['sum']);
		$akar7 = sqrt($sum7a['sum']);
		$akar8 = sqrt($sum8a['sum']);
		$akar9 = sqrt($sum9a['sum']);
		$akar10= sqrt($sum10a['sum']);
		
		$this->db->query("UPDATE jumlah_kuadrat SET 	nil_raport  = '$sum1a[sum]',
														tes_tulis  = '$sum2a[sum]',
														kepribadian_wawancara =	 '$sum3a[sum]',
														keaktifan	= '$sum4a[sum]',
														pekerjaan_orang_tua	  =	 '$sum5a[sum]',
														biaya_hidup_calon_mahasiswa	 = '$sum6a[sum]',
														pekerjaan =	 '$sum7a[sum]',
														prestasi_semasa_calon_mahasiswa	 = '$sum8a[sum]',
														beasiswa =	 '$sum9a[sum]',
														ekstrakulikuler	  =	 '$sum10a[sum]'
												WHERE jenis_nilai = 'JUMLAH KUADRAT'");

		$this->db->query("UPDATE jumlah_kuadrat SET 	nil_raport 	= '$akar1',
														tes_tulis	= '$akar2',
														kepribadian_wawancara	= '$akar3',
														keaktifan	= '$akar4',
														pekerjaan_orang_tua	= '$akar5',
														biaya_hidup_calon_mahasiswa	= '$akar6',
														pekerjaan	= '$akar7',
														prestasi_semasa_calon_mahasiswa	= '$akar8',
														beasiswa	= '$akar9',
														ekstrakulikuler	= '$akar10'
												WHERE jenis_nilai = 'AKAR KUADRAT'");
    }

	function normalisasi_matriks_update(){

    	$nilaiaka = $this->db->query("SELECT * FROM jumlah_kuadrat WHERE jenis_nilai = 'AKAR KUADRAT'");
    	$nilaiakar = $nilaiaka->row_array();
		
    	$data = $this->db->query("SELECT * FROM cluster");
		foreach ($data->result() as $matriks){

    		$nm1 = $matriks->nil_raport / $nilaiakar['nil_raport'];
    		$nm2 = $matriks->tes_tulis / $nilaiakar['tes_tulis'];
    		$nm3 = $matriks->kepribadian_wawancara / $nilaiakar['kepribadian_wawancara'];
    		$nm4 = $matriks->keaktifan / $nilaiakar['keaktifan'];
    		$nm5 = $matriks->pekerjaan_orang_tua / $nilaiakar['pekerjaan_orang_tua'];
    		$nm6 = $matriks->biaya_hidup_calon_mahasiswa / $nilaiakar['biaya_hidup_calon_mahasiswa'];
    		$nm7 = $matriks->pekerjaan / $nilaiakar['pekerjaan'];
    		$nm8 = $matriks->prestasi_semasa_calon_mahasiswa / $nilaiakar['prestasi_semasa_calon_mahasiswa'];
    		$nm9 = $matriks->beasiswa / $nilaiakar['beasiswa'];
    		$nm10 = $matriks->ekstrakulikuler / $nilaiakar['ekstrakulikuler'];
    		
    		$query = $this->db->query("UPDATE normalisasi_matriks SET 		nil_raport 		= '$nm1',
																tes_tulis	= '$nm2',
																kepribadian_wawancara	= '$nm3',
																keaktifan	= '$nm4',
																pekerjaan_orang_tua	= '$nm5',
																biaya_hidup_calon_mahasiswa	= '$nm6',
																pekerjaan	= '$nm7',
																prestasi_semasa_calon_mahasiswa	= '$nm8',
																beasiswa	= '$nm9',
																ekstrakulikuler	= '$nm10'
															WHERE no_pendaftaran = '$matriks->no_pendaftaran'");
    		
    	}
    }

    function mDataNormalisasiMatriks() {
    	$this->db->select('*');
		$this->db->from('normalisasi_matriks');
		$this->db->join('calon_mahasiswa', 'normalisasi_matriks.no_pendaftaran = calon_mahasiswa.no_pendaftaran' );
		$this->db->order_by('normalisasi_matriks.id_cluster', 'asc');
		$lihat = $this->db->get();
		return $lihat->result();

    }

    function weighted_normalized_decision_matrix() {
    	$bobot = $this->db->query("SELECT * FROM kriteria");
    	$kriteria = $bobot->row_array();
		
    	$data1 = $this->db->query("SELECT * FROM normalisasi_matriks");
		foreach ($data1->result() as $wndm){

    		$wn1 = $wndm->nil_raport * $kriteria['nil_raport'];
    		$wn2 = $wndm->tes_tulis * $kriteria['tes_tulis'];
    		$wn3 = $wndm->kepribadian_wawancara * $kriteria['kepribadian_wawancara'];
    		$wn4 = $wndm->keaktifan * $kriteria['keaktifan'];
    		$wn5 = $wndm->pekerjaan_orang_tua * $kriteria['pekerjaan_orang_tua'];
    		$wn6 = $wndm->biaya_hidup_calon_mahasiswa * $kriteria['biaya_hidup_calon_mahasiswa'];
    		$wn7 = $wndm->pekerjaan * $kriteria['pekerjaan'];
    		$wn8 = $wndm->prestasi_semasa_calon_mahasiswa * $kriteria['prestasi_semasa_calon_mahasiswa'];
    		$wn9 = $wndm->beasiswa * $kriteria['beasiswa'];
    		$wn10 = $wndm->ekstrakulikuler * $kriteria['ekstrakulikuler'];
    		
    		$query1 = $this->db->query("UPDATE weighted_normalized_decision_matrix SET nil_raport = '$wn1',
																tes_tulis	= '$wn2',
																kepribadian_wawancara	= '$wn3',
																keaktifan	= '$wn4',
																pekerjaan_orang_tua	= '$wn5',
																biaya_hidup_calon_mahasiswa	= '$wn6',
																pekerjaan	= '$wn7',
																prestasi_semasa_calon_mahasiswa	= '$wn8',
																beasiswa	= '$wn9',
																ekstrakulikuler	= '$wn10'
															WHERE no_pendaftaran = '$wndm->no_pendaftaran'");
		    	
		    }
		}

	function mWeightedNormalizedLihat() {
		$this->db->select('*');
		$this->db->from('weighted_normalized_decision_matrix');
		$this->db->join('calon_mahasiswa', 'weighted_normalized_decision_matrix.no_pendaftaran = calon_mahasiswa.no_pendaftaran' );
		$this->db->order_by('weighted_normalized_decision_matrix.id_cluster', 'asc');
		$lihat = $this->db->get();
		return $lihat->result();
	}

	function mPositifNegatifLihat() {
		$this->db->select('*');
		$this->db->from('positif_negatif');
		$lihat = $this->db->get();
		return $lihat->result();
	}
	
	function positif_negatif(){
    	//pencarian nilai positif
    	$plus1 	= $this->db->query("SELECT MAX(nil_raport) max FROM weighted_normalized_decision_matrix");
		$Positif1a  = $plus1->row_array();
		
		$plus2 	= $this->db->query("SELECT MAX(tes_tulis) max FROM weighted_normalized_decision_matrix");
		$Positif2a  = $plus2->row_array();

		$plus3 	= $this->db->query("SELECT MAX(kepribadian_wawancara) max FROM weighted_normalized_decision_matrix");
		$Positif3a  = $plus3->row_array();

		$plus4 	= $this->db->query("SELECT MAX(keaktifan) max FROM weighted_normalized_decision_matrix");
		$Positif4a  = $plus4->row_array();

		$plus5 	= $this->db->query("SELECT MAX(pekerjaan_orang_tua) max FROM weighted_normalized_decision_matrix");
		$Positif5a  = $plus5->row_array();

		$plus6 	= $this->db->query("SELECT MAX(biaya_hidup_calon_mahasiswa) max FROM weighted_normalized_decision_matrix");
		$Positif6a  = $plus6->row_array();

    	$plus7 	= $this->db->query("SELECT MAX(pekerjaan) max FROM weighted_normalized_decision_matrix");
		$Positif7a  = $plus7->row_array();

		$plus8 	= $this->db->query("SELECT MAX(prestasi_semasa_calon_mahasiswa) max FROM weighted_normalized_decision_matrix");
		$Positif8a  = $plus8->row_array();

		$plus9 	= $this->db->query("SELECT MAX(beasiswa) max FROM weighted_normalized_decision_matrix");
		$Positif9a  = $plus9->row_array();

		$plus10	= $this->db->query("SELECT MAX(ekstrakulikuler) max FROM weighted_normalized_decision_matrix");
		$Positif10a = $plus10->row_array();

		//pencarian nilai negatif
		$min1 	= $this->db->query("SELECT MIN(nil_raport) min FROM weighted_normalized_decision_matrix");
		$negatif1a  = $min1->row_array();
		
		$min2 	= $this->db->query("SELECT MIN(tes_tulis) min FROM weighted_normalized_decision_matrix");
		$negatif2a  = $min2->row_array();

		$min3 	= $this->db->query("SELECT MIN(kepribadian_wawancara) min FROM weighted_normalized_decision_matrix");
		$negatif3a  = $min3->row_array();

		$min4 	= $this->db->query("SELECT MIN(keaktifan) min FROM weighted_normalized_decision_matrix");
		$negatif4a  = $min4->row_array();

		$min5 	= $this->db->query("SELECT MIN(pekerjaan_orang_tua) min FROM weighted_normalized_decision_matrix");
		$negatif5a  = $min5->row_array();

		$min6 	= $this->db->query("SELECT MIN(biaya_hidup_calon_mahasiswa) min FROM weighted_normalized_decision_matrix");
		$negatif6a  = $min6->row_array();

    	$min7 	= $this->db->query("SELECT MIN(pekerjaan) min FROM weighted_normalized_decision_matrix");
		$negatif7a  = $min7->row_array();

		$min8 	= $this->db->query("SELECT MIN(prestasi_semasa_calon_mahasiswa) min FROM weighted_normalized_decision_matrix");
		$negatif8a  = $min8->row_array();

		$min9 	= $this->db->query("SELECT MIN(beasiswa) min FROM weighted_normalized_decision_matrix");
		$negatif9a  = $min9->row_array();

		$min10	= $this->db->query("SELECT MIN(ekstrakulikuler) min FROM weighted_normalized_decision_matrix");
		$negatif10a = $min10->row_array();


		$this->db->query("UPDATE positif_negatif SET 	nil_raport  = '$Positif1a[max]',
														tes_tulis  = '$Positif2a[max]',
														kepribadian_wawancara =	 '$Positif3a[max]',
														keaktifan	= '$Positif4a[max]',
														pekerjaan_orang_tua	  =	 '$Positif5a[max]',
														biaya_hidup_calon_mahasiswa	 = '$Positif6a[max]',
														pekerjaan =	 '$Positif7a[max]',
														prestasi_semasa_calon_mahasiswa	 = '$Positif8a[max]',
														beasiswa =	 '$Positif9a[max]',
														ekstrakulikuler	  =	 '$Positif10a[max]'
												WHERE jenis_nilai = 'MAX POSITIF'");

		$this->db->query("UPDATE positif_negatif SET 	nil_raport  = '$negatif1a[min]',
														tes_tulis  = '$negatif2a[min]',
														kepribadian_wawancara =	 '$negatif3a[min]',
														keaktifan	= '$negatif4a[min]',
														pekerjaan_orang_tua	  =	 '$negatif5a[min]',
														biaya_hidup_calon_mahasiswa	 = '$negatif6a[min]',
														pekerjaan =	 '$negatif7a[min]',
														prestasi_semasa_calon_mahasiswa	 = '$negatif8a[min]',
														beasiswa =	 '$negatif9a[min]',
														ekstrakulikuler	  =	 '$negatif10a[min]'
												WHERE jenis_nilai = 'MIN NEGATIF'");
    }

    function separasi(){

    	$pos = $this->db->query("SELECT * FROM positif_negatif WHERE jenis_nilai = 'MAX POSITIF'");
    	$np =  $pos->row_array();

    	$neg = $this->db->query("SELECT * FROM positif_negatif WHERE jenis_nilai = 'MIN NEGATIF'");
    	$nn =  $neg->row_array();

    	$sep = $this->db->get('weighted_normalized_decision_matrix');
    	foreach ($sep->result() as $sp){
    		
    		
 	   		$spt1 = ($sp->nil_raport - $np['nil_raport']) * ($sp->nil_raport  - $np['nil_raport']);
    		$spt2 = ($sp->tes_tulis - $np['tes_tulis']) * ($sp->tes_tulis - $np['tes_tulis']);
    		$spt3 = ($sp->kepribadian_wawancara - $np['kepribadian_wawancara']) * ($sp->kepribadian_wawancara  - $np['kepribadian_wawancara']);
    		$spt4 = ($sp->keaktifan - $np['keaktifan']) * ($sp->keaktifan - $np['keaktifan']);
    		$spt5 = ($sp->pekerjaan_orang_tua - $np['pekerjaan_orang_tua']) * ($sp->pekerjaan_orang_tua  - $np['pekerjaan_orang_tua']);
    		$spt6 = ($sp->biaya_hidup_calon_mahasiswa - $np['biaya_hidup_calon_mahasiswa']) * ($sp->biaya_hidup_calon_mahasiswa - $np['biaya_hidup_calon_mahasiswa']);
    		$spt7 = ($sp->pekerjaan - $np['pekerjaan']) * ($sp->pekerjaan  - $np['pekerjaan']);
    		$spt8 = ($sp->prestasi_semasa_calon_mahasiswa - $np['prestasi_semasa_calon_mahasiswa']) * ($sp->prestasi_semasa_calon_mahasiswa - $np['prestasi_semasa_calon_mahasiswa']);
    		$spt9 = ($sp->beasiswa - $np['beasiswa']) * ($sp->beasiswa  - $np['beasiswa']);
    		$spt10 = ($sp->ekstrakulikuler - $np['ekstrakulikuler']) * ($sp->ekstrakulikuler - $np['ekstrakulikuler']);
    		
    		$spt = sqrt($spt1 + $spt2 + $spt3 + $spt4 + $spt5 + $spt6);

    		$sne1 = ($sp->nil_raport - $nn['nil_raport']) * ($sp->nil_raport  - $nn['nil_raport']);
    		$sne2 = ($sp->tes_tulis - $nn['tes_tulis']) * ($sp->tes_tulis - $nn['tes_tulis']);
    		$sne3 = ($sp->kepribadian_wawancara - $nn['kepribadian_wawancara']) * ($sp->kepribadian_wawancara  - $nn['kepribadian_wawancara']);
    		$sne4 = ($sp->keaktifan - $nn['keaktifan']) * ($sp->keaktifan - $nn['keaktifan']);
    		$sne5 = ($sp->pekerjaan_orang_tua - $nn['pekerjaan_orang_tua']) * ($sp->pekerjaan_orang_tua  - $nn['pekerjaan_orang_tua']);
    		$sne6 = ($sp->biaya_hidup_calon_mahasiswa - $nn['biaya_hidup_calon_mahasiswa']) * ($sp->biaya_hidup_calon_mahasiswa - $nn['biaya_hidup_calon_mahasiswa']);
    		$sne7 = ($sp->pekerjaan - $nn['pekerjaan']) * ($sp->pekerjaan  - $nn['pekerjaan']);
    		$sne8 = ($sp->prestasi_semasa_calon_mahasiswa - $nn['prestasi_semasa_calon_mahasiswa']) * ($sp->prestasi_semasa_calon_mahasiswa - $nn['prestasi_semasa_calon_mahasiswa']);
    		$sne9 = ($sp->beasiswa - $nn['beasiswa']) * ($sp->beasiswa  - $nn['beasiswa']);
    		$sne10 = ($sp->ekstrakulikuler - $nn['ekstrakulikuler']) * ($sp->ekstrakulikuler - $nn['ekstrakulikuler']);

    		$sn = sqrt($sne1 + $sne2 + $sne3 + $sne4 + $sne5 + $sne6);

    		$this->db->query("UPDATE separasi SET 	ideal_positif	= '$spt',
													ideal_negatif	= '$sn'
												WHERE no_pendaftaran = '$sp->no_pendaftaran'");
    	
    	}
    	
    }

    function mPositifSeparasiLihat(){
    	$this->db->select('*');
		$this->db->from('separasi');
		$this->db->join('calon_mahasiswa', 'separasi.no_pendaftaran = calon_mahasiswa.no_pendaftaran' );
		$this->db->order_by('separasi.id_cluster', 'asc');
		$lihat = $this->db->get();
		return $lihat->result();
    }

    function kedekatan_relatif(){

    	$relatif = $this->db->query("SELECT * FROM separasi");

    	foreach ($relatif->result() as $kedekatan){
    		
    		$hasil = $kedekatan->ideal_negatif / ($kedekatan->ideal_positif + $kedekatan->ideal_negatif);

    		$this->db->query("UPDATE kedekatan_relatif SET 	dekat_relatif	= '$hasil'
														WHERE no_pendaftaran = '$kedekatan->no_pendaftaran'");
    	}
    }

    function mKedekatanRelatifLihat(){
    	$this->db->select('*');
		$this->db->from('kedekatan_relatif');
		$this->db->join('calon_mahasiswa', 'kedekatan_relatif.no_pendaftaran = calon_mahasiswa.no_pendaftaran' );
		$this->db->order_by('kedekatan_relatif.id_cluster', 'asc');
		$lihat = $this->db->get();
		return $lihat->result();
    }

    function ranking(){
    	$rank = $this->db->query("SELECT * FROM kedekatan_relatif ORDER BY dekat_relatif DESC");
    	$posisi = 1;

    	foreach ($rank->result() as $peringkat){
    		
    		$this->db->query("UPDATE rangking SET 	nilai		= '$peringkat->dekat_relatif',
												ranking	= '$posisi'
											WHERE no_pendaftaran = '$peringkat->no_pendaftaran'");
    		$posisi++;
    	}
    }

    function topsisAccestime($total_time1) {
    	$query = $this->db->query("UPDATE rangking SET topsisAccesTime = '$total_time1'");
    }
    
    function mRankingLihat(){
    	$this->db->select('*');
		$this->db->from('rangking');
		$this->db->join('calon_mahasiswa', 'rangking.no_pendaftaran = calon_mahasiswa.no_pendaftaran' );
		$this->db->order_by('rangking.ranking', 'asc');
		$lihat = $this->db->get();
		return $lihat->result();
    }

    function reset() {
    	$this->db->query('DELETE FROM cluster');
    	$this->db->query('DELETE FROM kedekatan_relatif');
    	$this->db->query('DELETE FROM kuadrat');
    	$this->db->query('DELETE FROM normalisasi_matriks');
    	$this->db->query('DELETE FROM rangking');
    	$this->db->query('DELETE FROM separasi');
    	$this->db->query('DELETE FROM weighted_normalized_decision_matrix');
    	
    	$this->db->query("UPDATE jumlah_kuadrat SET nil_raport='0',
    												tes_tulis='0',
    												kepribadian_wawancara='0',
    												keaktifan='0',
    												pekerjaan_orang_tua='0',
    												biaya_hidup_calon_mahasiswa='0',
    												pekerjaan='0',
    												prestasi_semasa_calon_mahasiswa='0',
    												beasiswa='0',
    												ekstrakulikuler='0'
    												");
    	$this->db->query("UPDATE positif_negatif SET nil_raport='0',
    												tes_tulis='0',
    												kepribadian_wawancara='0',
    												keaktifan='0',
    												pekerjaan_orang_tua='0',
    												biaya_hidup_calon_mahasiswa='0',
    												pekerjaan='0',
    												prestasi_semasa_calon_mahasiswa='0',
    												beasiswa='0',
    												ekstrakulikuler='0'
    												");
    	

    }

    function topsisUser($username) {
    	$this->db->select('*');
		$this->db->from('cluster');
		$this->db->join('calon_mahasiswa', 'cluster.no_pendaftaran = calon_mahasiswa.no_pendaftaran' );
		$this->db->where('cluster.no_pendaftaran', $username);
		$lihatTopsisUser = $this->db->get();
		return $lihatTopsisUser->result();
    }    

    function kMeansUser($username) {
    	$this->db->select('*');
		$this->db->from('rangking');
		$this->db->join('calon_mahasiswa', 'rangking.no_pendaftaran = calon_mahasiswa.no_pendaftaran' );
		$this->db->order_by('rangking.ranking', 'asc');
    	$this->db->where('rangking.no_pendaftaran', $username);
		$lihatKMeansUser = $this->db->get();
    	return $lihatKMeansUser->result();
    }

    function topsisKmeansAdmin() {
    	$this->db->select('*');
		$this->db->from('cluster');
		$this->db->join('calon_mahasiswa', 'cluster.no_pendaftaran = calon_mahasiswa.no_pendaftaran' );
		$this->db->join('rangking', 'rangking.no_pendaftaran = calon_mahasiswa.no_pendaftaran' );
		$lihatTopsisKMeansUser = $this->db->get();
		return $lihatTopsisKMeansUser->result();
    }    
}

?>