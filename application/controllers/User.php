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
        
	
            public function user(){
                $id_daftarulang            = $this->input->post('id_daftarulang');
                $id                        = $this->input->post('id');
                $tingkat                        = $this->input->post('tingkat');
                $nama_lengkap                        = $this->input->post('nama_lengkap');
                $nama_panggilan                        = $this->input->post('nama_panggilan');
                $nisn                        = $this->input->post('nisn');
                $tpt_lahir                        = $this->input->post('tpt_lahir');
                $tgl_lahir                        = $this->input->post('tgl_lahir');
                $agama                        = $this->input->post('agama');
                $suku                        = $this->input->post('suku');
                $jk                        = $this->input->post('jk');
                $goldar                        = $this->input->post('goldar');
                $anak_ke                        = $this->input->post('anak_ke');
                $dari_saudara                        = $this->input->post('dari_saudara');
                $alamat                        = $this->input->post('alamat');
                $jarak                        = $this->input->post('jarak');
                $desa                        = $this->input->post('desa');
                $kecamatan                        = $this->input->post('kecamatan');
                $kabupaten                        = $this->input->post('kabupaten');
                $provinsi                        = $this->input->post('provinsi');
                $nama_ayah                        = $this->input->post('nama_ayah');
                $tptlahir_ayah                        = $this->input->post('tptlahir_ayah');
                $tgllahir_ayah                        = $this->input->post('tgllahir_ayah');
                $pendidikan_ayah                        = $this->input->post('pendidikan_ayah');
                $pekerjaan_ayah                        = $this->input->post('pekerjaan_ayah');
                $penghasilan_ayah                        = $this->input->post('penghasilan_ayah');
                $alamat_ayah                        = $this->input->post('alamat_ayah');
                $desa_ayah                        = $this->input->post('desa_ayah');
                $kecamatan_ayah                        = $this->input->post('kecamatan_ayah');
                $kabupaten_ayah                        = $this->input->post('kabupaten_ayah');
                $provinsi_ayah                        = $this->input->post('provinsi_ayah');
                $hp_ayah                        = $this->input->post('hp_ayah');
                $nama_ibu                        = $this->input->post('nama_ibu');
                $tptlahir_ibu                        = $this->input->post('tptlahir_ibu');
                $tgllahir_ibu                        = $this->input->post('tgllahir_ibu');
                $pendidikan_ibu                        = $this->input->post('pendidikan_ibu');
                $pekerjaan_ibu                        = $this->input->post('pekerjaan_ibu');
                $penghasilan_ibu                        = $this->input->post('penghasilan_ibu');
                $alamat_ibu                        = $this->input->post('alamat_ibu');
                $desa_ibu                        = $this->input->post('desa_ibu');
                $kecamatan_ibu                        = $this->input->post('kecamatan_ibu');
                $kabupaten_ibu                        = $this->input->post('kabupaten_ibu');
                $provinsi_ibu                        = $this->input->post('provinsi_ibu');
                $hp_ibu                        = $this->input->post('hp_ibu');
                $sekolah_asal                        = $this->input->post('sekolah_asal');
                $npsn                        = $this->input->post('npsn');
                $alamat_sekolah                        = $this->input->post('alamat_sekolah');
                $kabupaten_sekolah                        = $this->input->post('kabupaten_sekolah');
                $provinsi_sekolah                        = $this->input->post('provinsi_sekolah');
                $penyakit                        = $this->input->post('penyakit');
                $olah_raga                        = $this->input->post('olah_raga');
                $seni                        = $this->input->post('seni');
                $tari                        = $this->input->post('tari');
                $lukis                        = $this->input->post('lukis');
                $drama                        = $this->input->post('drama');
                $sastra                        = $this->input->post('sastra');
                $organisasi                        = $this->input->post('organisasi');
                $prestasi                        = $this->input->post('prestasi');
                $alasan                        = $this->input->post('alasan');
                $tentang_sekolah                        = $this->input->post('tentang_sekolah');
          
               
        
                $data2 = array(
                    'id' => $id, 'tingkat' => "$tingkat", 'nama_lengkap' => "$nama_lengkap", 'nama_panggilan' => "$nama_panggilan", 'nisn' => "$nisn",
                    'tpt_lahir' => "$tpt_lahir", 'tgl_lahir' => "$tgl_lahir",'agama' => "$agama", 'suku' => "$suku", 'jk' => "$jk", 'goldar' => "$goldar",
                    'anak_ke' => "$anak_ke", 'dari_saudara' => "$dari_saudara", 'alamat' => "$alamat", 'jarak' => "$jarak", 'desa' => "$desa", 'kecamatan' => "$kecamatan",
                    'kabupaten' => "$kabupaten",'provinsi' => "$provinsi",'nama_ayah' => "$nama_ayah",'tptlahir_ayah' => "$tptlahir_ayah",'tgllahir_ayah' => "$tgllahir_ayah",
                    'pendidikan_ayah' => "$pendidikan_ayah",'pekerjaan_ayah' => "$pekerjaan_ayah", 'penghasilan_ayah' => "$penghasilan_ayah",'alamat_ayah' => "$alamat_ayah",
                    'desa_ayah' => "$desa_ayah",'kecamatan_ayah' => "$kecamatan_ayah",'kabupaten_ayah' => "$kabupaten_ayah",'provinsi_ayah' => "$provinsi_ayah",'hp_ayah' => "$hp_ayah",
                    'nama_ibu' => "$nama_ibu",'tptlahir_ibu' => "$tptlahir_ibu",'tgllahir_ibu' => "$tgllahir_ibu",
                    'pendidikan_ibu' => "$pendidikan_ibu",'pekerjaan_ibu' => "$pekerjaan_ibu", 'penghasilan_ibu' => "$penghasilan_ibu",'alamat_ibu' => "$alamat_ibu",
                    'desa_ibu' => "$desa_ibu",'kecamatan_ibu' => "$kecamatan_ibu",'kabupaten_ibu' => "$kabupaten_ibu",'provinsi_ibu' => "$provinsi_ibu",'hp_ibu' => "$hp_ibu",
                    'sekolah_asal' => "$sekolah_asal",'npsn' => "$npsn", 'alamat_sekolah' => "$alamat_sekolah", 'kabupaten_sekolah' => "$kabupaten_sekolah", 'provinsi_sekolah' => "$provinsi_sekolah",
                    'penyakit' => "$penyakit",'olah_raga' => "$olah_raga", 'seni' => "$seni",'tari' => "$tari",'lukis' => "$lukis", 'drama' => "$drama", 'sastra' => "$sastra",
                    'organisasi' => "$organisasi",'prestasi' => "$prestasi",'alasan' => "$alasan",'tentang_sekolah' => "$tentang_sekolah"
                ); 

                $where = array(
                    'id_daftarulang' => $id_daftarulang
                );
                
                $this->M_ppdb->updatedaftarulanguser($where,$data2,'daftarulang');
                redirect(base_url('user/registrasi_ulang/'.$id));    
            }
    


    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());    
    }

}
