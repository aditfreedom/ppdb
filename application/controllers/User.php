<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller {

    function __construct(){
        parent::__construct();
		if (empty($this->session->userdata('login'))) {
			redirect(base_url());
		}
    }

    // public function login()
	// {
	// 	$this->load->model('M_ppdb');
	// 	$this->load->view('login');	
	// }


    public function index()
	{
		$this->load->model('M_ppdb');
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebaruser',$sess_data);
		$this->load->view('homeuser');
		$this->load->view('template/footer');


	}

    public function isi_formulir($id){
		$sess_data = $this->session->userdata();
		$id =    array ('id' => $id);
		$data['isi_formulir'] = $this->M_ppdb->tampilpengguna($id,'pengguna')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebaruser',$sess_data);
		$this->load->view('isi_formulir',$data);
		$this->load->view('template/footer');
	}

    public function updateformulir(){
        $id                = $this->input->post('id');
        $nama              = $this->input->post('nama');
        $jenis             = $this->input->post('jenis');
        $nisn              = $this->input->post('nisn');
        $alamat            = $this->input->post('alamat');
        $sekolah_asal      = $this->input->post('sekolah_asal');
        $no_hp             = $this->input->post('no_hp');
        $foto             = $this->input->post('foto');
        $bukti_tf          = $this->input->post('bukti_tf');
        $bukti_tfbaru      = $_FILES['buktitf_baru']['name'];
        $username          = $this->input->post('username');
        $password          = $this->input->post('password');
        $role              = $this->input->post('role');
        $approve_formulir       = $this->input->post('approve_formulir');
        $approve_lulus          = $this->input->post('approve_lulus');
        $approve_daftarulang    = $this->input->post('approve_daftarulang');

    
        $config['upload_path']          = 'asset/buktitf/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;
    
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
         
        if (! $this->upload->do_upload('buktitf_baru')) {
            $this->load->view('errorformulir');
        }else{
            $bukti_tfbaru=$this->upload->data('file_name');
        }
    
        if ($bukti_tfbaru == null) {
            $bukti_tfbaru = $bukti_tf;
        }
    
        $data = array(
            'nama_lengkap' => $nama,
            'jenis' => $jenis,
            'nisn' => $nisn,
            'alamat' =>$alamat,
            'sekolah_asal' =>$sekolah_asal,
            'no_hp' =>$no_hp,
            'foto' =>$foto,
            'alamat' =>$alamat,
            'bukti_tf' =>$bukti_tfbaru,
            'username' =>$username,
            'password' =>$password,
            'role' =>$role,
            'approve_formulir' =>$approve_formulir,
            'approve_lulus' =>$approve_lulus,
            'approve_daftarulang' =>$approve_daftarulang
        );
    
        $where = array(
            'id' => $id
        );
        $this->M_ppdb->updateformuliruser($where,$data,'pengguna');
        redirect(base_url('user/isi_formulir/'.$id));    


    }

    public function cetak_kartu($id){
		$sess_data = $this->session->userdata();
		$id =    array ('id' => $id);
		$data['cetak_kartu'] = $this->M_ppdb->tampilpengguna($id,'pengguna')->result();   
		$data2 = $this->M_ppdb->tampilpengguna($id,'pengguna')->result();   

        foreach($data2 as $dataku){
            $dataku22=$dataku->approve_formulir;
        }

             if($dataku22=="Diterima"){
                $this->load->view('template/header');
                $this->load->view('template/sidebaruser',$sess_data);
                $this->load->view('cetak_kartu',$data);
                $this->load->view('template/footer');
             }else{
                $this->load->view('template/header');
                $this->load->view('template/sidebaruser',$sess_data);
                $this->load->view('cetak_kartu_pending',$data);
                $this->load->view('template/footer');
             }
        }

        public function registrasi_ulang($id){
            $sess_data = $this->session->userdata();
            $id =    array ('id' => $id);
            // $data['registrasi_ulang'] = $this->M_ppdb->tampilpengguna($id,'pengguna')->result(); 
            $data['registrasi_ulang'] = $this->M_ppdb->editdaftarulang($id,'daftarulang')->result();  
            $data2 = $this->M_ppdb->tampilpengguna($id,'pengguna')->result();   
    
            foreach($data2 as $dataku){
                $dataku22=$dataku->approve_lulus;
                $dataku23=$dataku->approve_formulir;
            }


    
                 if($dataku22=="Lulus"){
                    $this->load->view('template/header');
                    $this->load->view('template/sidebaruser',$sess_data);
                    $this->load->view('registrasi_ulang',$data);
                    $this->load->view('template/footer');
                 }elseif ($dataku22=="Antrian") {
                    $this->load->view('template/header');
                    $this->load->view('template/sidebaruser',$sess_data);
                    $this->load->view('keputusan_lulus');
                    $this->load->view('template/footer');
                }
                 else{
                    $this->load->view('template/header');
                    $this->load->view('template/sidebaruser',$sess_data);
                    $this->load->view('tidak_lulus');
                    $this->load->view('template/footer');
                 }
            }
        
	

    


    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());    
    }

}
