<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
		$this->template->load('template','welcome_message');
	}

	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('mPengguna'); // load model mPengguna
		$hasil = $this->mPengguna->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['username'] = $sess->username;
				$sess_data['password'] = $sess->password;
				$sess_data['hakakses'] = $sess->hakakses;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('hakakses')=='1') {
				redirect('cWelcomeAdmin');
			}
			elseif ($this->session->userdata('hakakses')=='0') {
				redirect('cWelcomeUser');
			}		
		} else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}
	
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('hakakses');
		session_destroy();
		redirect('welcome');
	}

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */