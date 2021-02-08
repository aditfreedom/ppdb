<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Hal extends CI_Controller {

    function __construct(){
        parent::__construct();
		if (!empty($this->session->userdata('login'))) {
			redirect(base_url());
		}
    }

    public function login()
	{
		$this->load->model('M_ppdb');
		$this->load->view('login');	
	}


    public function login_aksi(){
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
                     $no_hp = $cek->no_hp;
                     $role = $cek->role;
                     $username = $cek->username;
                     $password = $cek->password;
                    }
 
                     
                     $sess_data =  array(
                         'username' => $username,
                         'password' => $password,
                         'id' => $id,
                         'nama_lengkap' => $nama_lengkap,
                         'nisn' => $nisn,
                         'no_hp' => $no_hp,
                         'role' => $role,
                         'login' => 'Berhasil'              
                        );
 
                 $this->session->set_userdata($sess_data); 
                 redirect(base_url('home'));
                //  if ($sess_data['username']=="admin"){
                //      redirect(base_url('dashboard')); 
                //  }elseif (($sess_data['username']!="admin")&&($sess_data['status']=="Diterima")){
                //      redirect(base_url('dashboardrumahmakan')); 
                //  }elseif($sess_data['status']=="Suspend"){
                //      $this->load->view('suspend');
                //  }elseif($sess_data['status']=="Ditolak"){
                //      $this->load->view('ditolak');
                //  }
                //  else{
                //      $this->load->view('status');
                //  }
                 
             }else{
                 $this->load->view('error');
             }
 
        }else{
         $this->load->view('error');
 
        }
     }

}
