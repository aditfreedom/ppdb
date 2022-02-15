<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Hal extends CI_Controller {

    function __construct(){
        parent::__construct();
        $datauser = $this->session->userdata('login'); 
		if (!empty($datauser)) {
			redirect(base_url('home'));
		}
    }

    public function login()
	{
		$this->load->model('M_ppdb');
		$this->load->view('login');	
	}

    public function login_admin()
	{
		$this->load->model('M_ppdb');
		$this->load->view('login-lama');	
	}



    public function login_aksi(){
        $username = $this->input->post('no_wa',true);
        $password = $this->input->post('tgllahir',true);
 
        $this->form_validation->set_rules('no_wa','Username','required');
        $this->form_validation->set_rules('tgllahir','Password','required');
 
        if($this->form_validation->run() != FALSE){
             $where = array(
                 'no_wa' => $username,
                 'tgllahir' => $password,
             );
 
             $ceklogin = $this->M_ppdb->cek_login($where)->num_rows();
             $cekloginid = $this->M_ppdb->cek_login($where)->result();
             if ($ceklogin > 0) {
                 foreach ($cekloginid as $cek) {
                     $id = $cek->id;
                     $nama_lengkap = $cek->nama_lengkap;
                     $nisn = $cek->nisn;
                     $no_wa = $cek->no_wa;
                     $tgllahir = $cek->tgllahir;
                     $role = $cek->role;
                     $approve_formulir = $cek->approve_formulir;
                     $approve_lulus = $cek->approve_lulus;
                     $username = $cek->username;
                     $password = $cek->password;
                    }
 
                     
                     $sess_data =  array(
                         'username' => $username,
                         'password' => $password,
                         'id' => $id,
                         'nama_lengkap' => $nama_lengkap,
                         'nisn' => $nisn,
                         'no_wa' => $no_wa,
                         'tgllahir' => $tgllahir,
                         'no_hp' => $no_hp,
                         'role' => $role,
                         'approve_formulir' => $approve_formulir,
                         'approve_lulus' => $approve_lulus,
                         'login' => 'Berhasil'              
                        );
 
                //  redirect(base_url('home'));

                 if ($sess_data['role'] == 0){
                    $this->session->set_userdata($sess_data); 
                     redirect(base_url('home')); 
                 }

                 else if ($sess_data['role'] == 1){
                    $this->session->set_userdata($sess_data); 
                    redirect(base_url('user')); 
                 }
                 else{
                    $this->load->view('gagallogin');
                }
                 
             }else{
                 $this->load->view('error');
             }
 
        }else{
         $this->load->view('error');
 
        }
     }

     public function login_admin_aksi(){
        $username = $this->input->post('username',true);
        $password = $this->input->post('password',true);
 
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
 
        if($this->form_validation->run() != FALSE){
             $where = array(
                 'username' => $username,
                 'password' => $password,
             );
 
             $ceklogin = $this->M_ppdb->cek_login($where)->num_rows();
             $cekloginid = $this->M_ppdb->cek_login($where)->result();
             if ($ceklogin > 0) {
                 foreach ($cekloginid as $cek) {
                     $id = $cek->id;
                     $nama_lengkap = $cek->nama_lengkap;
                     $nisn = $cek->nisn;
                     $no_wa = $cek->no_wa;
                     $tgllahir = $cek->tgllahir;
                     $role = $cek->role;
                     $approve_formulir = $cek->approve_formulir;
                     $approve_lulus = $cek->approve_lulus;
                     $username = $cek->username;
                     $password = $cek->password;
                    }
 
                     
                     $sess_data =  array(
                         'username' => $username,
                         'password' => $password,
                         'id' => $id,
                         'nama_lengkap' => $nama_lengkap,
                         'nisn' => $nisn,
                         'no_wa' => $no_wa,
                         'tgllahir' => $tgllahir,
                         'role' => $role,
                         'approve_formulir' => $approve_formulir,
                         'approve_lulus' => $approve_lulus,
                         'login' => 'Berhasil'              
                        );
 
                //  redirect(base_url('home'));

                 if ($sess_data['role'] == 0){
                    $this->session->set_userdata($sess_data); 
                     redirect(base_url('home')); 
                 }
                 else{
                    $this->load->view('gagallogin_admin');
                }
                 
             }else{
                 $this->load->view('error');
             }
 
        }else{
         $this->load->view('error');
 
        }
     }

     public function registrasi()
	{
		$this->load->view('registrasi');
	}

    public function tambahuser(){
		
		$data = array(
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'sekolah_asal' => $this->input->post('sekolah_asal'),
			'nisn' => "0",
			'alamat' => "",
			'no_hp' => "",
			'bukti_tf' => "",
			'jenis' => $this->input->post('jenis'),
			'foto' => "",
            'bukti_tf' => "",
            'tptlahir' => $this->input->post('tptlahir'),
            'tgllahir' => $this->input->post('tgllahir'),
            'namaayah' => "",
            'namaibu' => "",
            'no_wa' => $this->input->post('no_wa'),
            'akte' => "",
			'username' => "",
			'password' => "",
			'role' => "1",
			'approve_formulir' 	=> "Antrian",
			'approve_lulus' 	=> "Antrian",
			'approve_daftarulang' => "Antrian",



		);

        $no_wa = $this->input->post('no_wa');
        $tgllahir = $this->input->post('tgllahir');


		$hitungusername= $this->M_ppdb->tampildatapengguna1($no_wa,$tgllahir);

		if ($hitungusername >=1) {
			$this->load->view('username_gagal');    
		}else{
			$this->M_ppdb->tambahuser($data,'pengguna');
			$this->load->view('status');    
			// redirect(base_url('home/registrasi'));
		}
		

	}

}
