<?php
class cDataMining extends CI_Controller{
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('hakakses')!="1") {
			redirect('cWelcomeUser');
		}
		$this->load->helper(array('url','form'));
		$this->load->model('mDataMining');
		$this->load->library('template');
	}

	function index() {
		
///k-means prosses
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
		
		//mencari eksekusi time dari k-means Header
		$time = microtime();
		$time = explode(' ', $time);
		$time = $time[1] + $time[0];
		$start = $time;
		
		//K-Means proses 
	    $this->mDataMining->kMeans();

		//mencari eksekusi time dari K-means Footer
	    $time = microtime();
		$time = explode(' ', $time);
		$time = $time[1] + $time[0];
		$finish = $time;
		$total_time = round(($finish - $start), 4);
		echo "<div class='alert alert-info'>K-means Selesai dalam ".$total_time." detik</div>";

		$this->mDataMining->kMeansAccestime($total_time);
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
///////TOPSIS proses

		

	    //TOPSIS proses mencari kuadrat
	    $this->mDataMining->kuadrat_update();
	    
	    //TOPSIS proses mencari akar dan kuadrat
		$this->mDataMining->akar_kuadrat();
	    
	    //TOPSIS proses normalisasi_matriks
	    $this->mDataMining->normalisasi_matriks_update();

	    //TOPSIS proses weighted_normalized_decision_matrix
	    $this->mDataMining->weighted_normalized_decision_matrix();
	    
	    //TOPSIS proses mencari positif dan negatif
	    $this->mDataMining->positif_negatif();

	    //TOPSIS proses mencari perhitungan separasi
	    $this->mDataMining->separasi();

	    //TOPSIS proses mencara kedekatan relatif
	    $this->mDataMining->kedekatan_relatif();

	    //mencari eksekusi time dari TOPSIS Header	
		$time1 = microtime();
		$time1 = explode(' ', $time1);
		$time1 = $time1[1] + $time1[0];
		$start1 = $time1;

	    //TOPSIS proses untuk mencari peringkat
		$this->mDataMining->ranking();

		//mencari eksekusi time dari TOPSIS Footer
		$time1 = microtime();
		$time1 = explode(' ', $time1);
		$time1 = $time1[1] + $time1[0];
		$finish1 = $time1;
		$total_time1 = round(($finish1 - $start1), 4);
		echo "<div class='alert alert-info'>TOPSIS Selesai dalam ".$total_time1." detik</div>";
		$this->mDataMining->topsisAccestime($total_time1);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		

		$data['data_kriteria']=$this->mDataMining->mKriteriaLihat();
		$data['data_k_means']=$this->mDataMining->mParameterLihat();
		$data['data_kuadrat']=$this->mDataMining->mKuadratLihat();
		$data['data_akar_kuadrat']=$this->mDataMining->mAkarKuadratLihat();
		$data['data_normalisasi_matriks']=$this->mDataMining->mDataNormalisasiMatriks();
		$data['data_weighted_normalized_decision_matrix']=$this->mDataMining->mWeightedNormalizedLihat();
		$data['data_positif_negatif_lihat']=$this->mDataMining->mPositifNegatifLihat();
		$data['data_separasi']=$this->mDataMining->mPositifSeparasiLihat();
		$data['data_kedekatan_relatif']=$this->mDataMining->mKedekatanRelatifLihat();
		$data['data_ranking']=$this->mDataMining->mRankingLihat();
		
		$this->template->load('template','dataMining/index', $data);
	}

	function reset() {
		$this->mDataMining->reset();
	    redirect(base_url().'index.php/cDataMining/index');
	}
 		
}

?>

