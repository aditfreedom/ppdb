<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('M_ppdb');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard');
		$this->load->view('template/footer');


	}

	public function registrasi()
	{
		$this->load->view('registrasi');
	}

	public function login()
	{
		$this->load->model('M_ppdb');
		$this->load->view('login');	
	}

	public function dashboard()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard');
		$this->load->view('template/footer');
	}
	
	public function kuota()
	{
		$data['kuota'] = $this->M_ppdb->tampil_data_kuota()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('kuota',$data);
		$this->load->view('template/footer');
	}

	public function tambahkuota(){
		$jenis           = $this->input->post('jenis');
		$kuota          = $this->input->post('kuota');

	   
		$data = array(
			'jenis' => $jenis,
			'kuota' => $kuota
		);
	
		$this->M_ppdb->tambahkuota($data,'kuota');
		redirect(base_url('home/kuota'));
	}

	public function hapuskuota($id){
		$id =    array ('id' => $id);
		$this->M_ppdb->hapuskuota($id,'kuota');
		redirect(base_url('home/kuota'));
	}

	public function editkuota($id){
		$id =    array ('id' => $id);
		$data['kuota'] = $this->M_ppdb->editkuota($id,'kuota')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('editkuota',$data);
		$this->load->view('template/footer');
	}

	public function updatekuota(){
		$id       = $this->input->post('id');
		$jenis       = $this->input->post('jenis');
		$kuota        = $this->input->post('kuota');
	
		$data = array(
			'jenis' => $jenis,
			'kuota' => $kuota
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->M_ppdb->updatekuota($where,$data,'kuota');
		$this->load->view('berhasil_ubah');
		$this->load->view('kuota');
	}

	public function approve_formulir()
	{
		$data['formulir'] = $this->M_ppdb->tampil_approval()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('approve_formulir',$data);
		$this->load->view('template/footer');
	}

	public function tambahuser(){
		$nama_lengkap           	= $this->input->post('nama_lengkap');
		$sekolah_asal       = $this->input->post('sekolah_asal');
		$jenis    		    = $this->input->post('jenis');
		$foto       	    = $_FILES['foto'];
		$username           = $this->input->post('username');
		$password           = $this->input->post('password');
		$status             = $this->input->post('status');
	
	
	
			$config['upload_path']          = 'asset/foto/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10000;
			$config['max_height']           = 10000;
	
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			 
			if (! $this->upload->do_upload('foto')) {
				$this->load->view('errorupload');
			}else{
				$foto=$this->upload->data('file_name');
			}
	
		
		$data = array(
			'nama_lengkap' => $nama_lengkap,
			'sekolah_asal' => $sekolah_asal,
			'nisn' => "0",
			'alamat' => "",
			'no_hp' => "",
			'bukti_tf' => "",
			'jenis' => $jenis,
			'foto' => $foto,
			'username' => $username,
			'password' => $password,
			'role' => "1",
			'approve_formulir' 	=> "Antrian",
			'approve_lulus' 	=> "Antrian",
			'approve_daftarulang' => "Antrian",



		);
	
		$this->M_ppdb->tambahuser($data,'pengguna');
		$this->load->view('status');    
		// redirect(base_url('home/registrasi'));
	}

	public function editapproval($id){
		$id =    array ('id' => $id);
		$data['approval'] = $this->M_ppdb->tampilpengguna($id,'pengguna')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('editapproval',$data);
		$this->load->view('template/footer');
	}

}
