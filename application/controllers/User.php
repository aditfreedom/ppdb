<?php

defined('BASEPATH') or exit('No direct script access allowed');


class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $datauser = $this->session->userdata('login');
        if (empty($datauser)) {
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
        $sess_data = $this->session->userdata();
        $plain_id = $this->session->userdata('id');
        $id_data =    array('id' => $plain_id);
        $sess_data['user'] = $this->M_ppdb->tampilpengguna($id_data, 'pengguna')->result();
        $sess_data['subtitle']="Home";
        $sess_data['subtitles']="-";
        $this->load->view('template/header');
        $this->load->view('template/sidebaruser', $sess_data, );
        $this->load->view('homeuser');
        $this->load->view('template/footer');
    }

    public function isi_formulir()
    {
        $plain_id = $this->session->userdata('id');
        $sess_data = $this->session->userdata();
        $sess_data['subtitle'] = "Isi Formulir";
        $sess_data['subtitles']="-";
        $id_data =    array('id' => $plain_id);
        $sess_data['user'] = $this->M_ppdb->tampilpengguna($id_data, 'pengguna')->result();
        $data['isi_formulir'] = $this->M_ppdb->tampilpengguna($id_data, 'pengguna')->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebaruser', $sess_data);
        $this->load->view('isi_formulir', $data);
        $this->load->view('template/footer');
    }

    public function updateformulir()
    {
        $id                = htmlspecialchars($this->input->post('id'));
        $nama              = htmlspecialchars($this->input->post('nama'));
        $tptlahir          = htmlspecialchars($this->input->post('tptlahir'));
        $tgllahir          = htmlspecialchars($this->input->post('tgllahir'));
        $jenis             = htmlspecialchars($this->input->post('jenis'));
        $pindah_kelas      = htmlspecialchars($this->input->post('pindah_kelas'));
        $nisn              = htmlspecialchars($this->input->post('nisn'));
        $alamat            = htmlspecialchars($this->input->post('alamat'));
        $sekolah_asal      = htmlspecialchars($this->input->post('sekolah_asal'));
        $namaayah          = htmlspecialchars($this->input->post('namaayah'));
        $namaibu           = htmlspecialchars($this->input->post('namaibu'));
        $no_wa             = htmlspecialchars($this->input->post('no_wa'));
        $akte              = htmlspecialchars($this->input->post('akte'));
        $akte_baru         = htmlspecialchars($_FILES['akte_baru']['name']);
        $no_hp             = htmlspecialchars($this->input->post('no_hp'));
        $foto              = htmlspecialchars($this->input->post('foto'));
        $foto_baru         = htmlspecialchars($this->input->post('foto_baru'));
        $bukti_tf          = htmlspecialchars($this->input->post('bukti_tf'));
        $bukti_tfbaru      = htmlspecialchars($_FILES['buktitf_baru']['name']);
        $username          = htmlspecialchars($this->input->post('username'));
        $password          = htmlspecialchars($this->input->post('password'));
        $role              = htmlspecialchars($this->input->post('role'));
        $approve_formulir       = htmlspecialchars($this->input->post('approve_formulir'));
        $approve_lulus          = htmlspecialchars($this->input->post('approve_lulus'));
        $approve_daftarulang    = htmlspecialchars($this->input->post('approve_daftarulang'));


        ///upload bukti transfer
        $config['upload_path']          = 'asset/buktitf/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png|JPG|JPEG';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (! $this->upload->do_upload('buktitf_baru')) {
            $this->load->view('gagalformulir');
        } else {
            $bukti_tfbaru=$this->upload->data('file_name');
        }

        if ($bukti_tfbaru == null) {
            $bukti_tfbaru = $bukti_tf;
        }


        ///upload akte
        $config2['upload_path']          = 'asset/akte/';
        $config2['allowed_types']        = 'gif|jpg|jpeg|png|JPG|JPEG';
        $config2['max_size']             = 0;
        $config2['max_width']            = 0;
        $config2['max_height']           = 0;

        $this->load->library('upload', $config2);
        $this->upload->initialize($config2);

        if (! $this->upload->do_upload('akte_baru')) {
            $this->load->view('gagalformulir');
        } else {
            $akte_baru=$this->upload->data('file_name');
        }

        if ($akte_baru == null) {
            $akte_baru = $akte;
        }


        ///upload foto
        $config3['upload_path']          = 'asset/foto/';
        $config3['allowed_types']        = 'gif|jpg|jpeg|png|JPG|JPEG';
        $config3['max_size']             = 0;
        $config3['max_width']            = 0;
        $config3['max_height']           = 0;

        $this->load->library('upload', $config3);
        $this->upload->initialize($config3);

        if (! $this->upload->do_upload('foto_baru')) {
            $this->load->view('gagalformulir');
        } else {
            $foto_baru=$this->upload->data('file_name');
        }

        if ($foto_baru == null) {
            $foto_baru = $foto;
        }


        $data = array(
            'nama_lengkap' => $nama,
            'tptlahir' => $tptlahir,
            'tgllahir' => $tgllahir,
            'namaayah' => $namaayah,
            'namaibu' => $namaibu,
            'no_wa' => $no_wa,
            'akte' => $akte_baru,
            'jenis' => $jenis,
            'pindah_kelas' => $pindah_kelas,
            'nisn' => $nisn,
            'alamat' =>$alamat,
            'sekolah_asal' =>$sekolah_asal,
            'no_hp' =>$no_hp,
            'foto' =>$foto_baru,
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
        $this->M_ppdb->updateformuliruser($where, $data);
        $this->load->view('berhasil_update_biodata_formulir');
    }

    public function cetak_kartu()
    {
        $plain_id = $this->session->userdata('id');
        $sess_data = $this->session->userdata();
        $sess_data['subtitle'] = "Cetak Resi";
        $sess_data['subtitles']="-";
        $id =    array('id' => $plain_id);
        $sess_data['user'] = $this->M_ppdb->tampilpengguna($id, 'pengguna')->result();
        $data['cetak_kartu'] = $this->M_ppdb->tampilpengguna($id, 'pengguna')->result();
        $data2 = $this->M_ppdb->tampilpengguna($id, 'pengguna')->result();

        foreach ($data2 as $dataku) {
            $dataku22=$dataku->approve_formulir;
        }

        if ($dataku22=="Diterima") {
            $this->load->view('template/header');
            $this->load->view('template/sidebaruser', $sess_data);
            $this->load->view('cetak_kartu', $data);
            $this->load->view('template/footer');
        } else {
            $this->load->view('template/header');
            $this->load->view('template/sidebaruser', $sess_data);
            $this->load->view('cetak_kartu_pending', $data);
            $this->load->view('template/footer');
        }
    }

        public function cetak_resi()
        {
            $id = $this->session->userdata('id');
            $sess_data = $this->session->userdata();
            $data['cetak_resi'] = $this->M_ppdb->cetak_resi($id)->result();
            $data_user = $this->M_ppdb->cetak_resi($id)->result();

            foreach ($data_user as $data2) {
                $nama=$data2->nama_lengkap;
            }

            // $this->load->view('cetak_resi',$data);
            $this->load->library('dompdf_gen');
            $this->load->view('cetak_resi', $data);
            $paper_size = 'A4';
            $orientation = 'portrait';
            $html = $this->output->get_output();
            $this->dompdf->set_paper($paper_size, $orientation);
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $this->dompdf->stream("Resi Pendaftaran PPDB (".$nama.").pdf", array('Attachment' =>0));
        }

        public function registrasi_ulang()
        {
            $plain_id = $this->session->userdata('id');
            $sess_data = $this->session->userdata();
            $sess_data['subtitle']="Daftar Ulang";
            $sess_data['subtitles']="Registrasi Ulang";
            $id =    array('id' => $plain_id);
            // $data['registrasi_ulang'] = $this->M_ppdb->tampilpengguna($id,'pengguna')->result();
            $sess_data['user'] = $this->M_ppdb->tampilpengguna($id, 'pengguna')->result();
            $data['registrasi_ulang'] = $this->M_ppdb->editdaftarulang($id, 'daftarulang')->result();
            $data2 = $this->M_ppdb->tampilpengguna($id, 'pengguna')->result();

            foreach ($data2 as $dataku) {
                $dataku22=$dataku->approve_lulus;
                $dataku23=$dataku->approve_formulir;
            }



            if ($dataku22=="Lulus") {
                $this->load->view('template/header');
                $this->load->view('template/sidebaruser', $sess_data);
                $this->load->view('registrasi_ulang', $data);
                $this->load->view('template/footer');
            } elseif ($dataku22=="Antrian") {
                $this->load->view('template/header');
                $this->load->view('template/sidebaruser', $sess_data);
                $this->load->view('keputusan_lulus');
                $this->load->view('template/footer');
            } else {
                $this->load->view('template/header');
                $this->load->view('template/sidebaruser', $sess_data);
                $this->load->view('tidak_lulus');
                $this->load->view('template/footer');
            }
        }


            public function updatelulususer()
            {
                $id_daftarulang                         = htmlspecialchars($this->input->post('id_daftarulang'));
                $id                                     = htmlspecialchars($this->input->post('id'));
                $tingkat                                = htmlspecialchars($this->input->post('tingkat'));
                $nama_lengkap                           = htmlspecialchars($this->input->post('nama_lengkap'));
                $nama_panggilan                         = htmlspecialchars($this->input->post('nama_panggilan'));
                $nisn                                   = htmlspecialchars($this->input->post('nisn'));
                $nik_siswa                              = htmlspecialchars($this->input->post('nik_siswa'));
                $tpt_lahir                              = htmlspecialchars($this->input->post('tpt_lahir'));
                $tgl_lahir                              = htmlspecialchars($this->input->post('tgl_lahir'));
                $agama                                  = htmlspecialchars($this->input->post('agama'));
                $suku                                   = htmlspecialchars($this->input->post('suku'));
                $jk                                     = htmlspecialchars($this->input->post('jk'));
                $goldar                                 = htmlspecialchars($this->input->post('goldar'));
                $anak_ke                                = htmlspecialchars($this->input->post('anak_ke'));
                $dari_saudara                           = htmlspecialchars($this->input->post('dari_saudara'));
                $alamat                                 = htmlspecialchars($this->input->post('alamat'));
                $jarak                                  = htmlspecialchars($this->input->post('jarak'));
                $desa                                   = htmlspecialchars($this->input->post('desa'));
                $kecamatan                              = htmlspecialchars($this->input->post('kecamatan'));
                $kabupaten                              = htmlspecialchars($this->input->post('kabupaten'));
                $provinsi                               = htmlspecialchars($this->input->post('provinsi'));
                $nama_ayah                              = htmlspecialchars($this->input->post('nama_ayah'));
                $nik_ayah                               = htmlspecialchars($this->input->post('nik_ayah'));
                $tptlahir_ayah                          = htmlspecialchars($this->input->post('tptlahir_ayah'));
                $tgllahir_ayah                          = htmlspecialchars($this->input->post('tgllahir_ayah'));
                $pendidikan_ayah                        = htmlspecialchars($this->input->post('pendidikan_ayah'));
                $pekerjaan_ayah                         = htmlspecialchars($this->input->post('pekerjaan_ayah'));
                $penghasilan_ayah                       = htmlspecialchars($this->input->post('penghasilan_ayah'));
                $alamat_ayah                            = htmlspecialchars($this->input->post('alamat_ayah'));
                $desa_ayah                              = htmlspecialchars($this->input->post('desa_ayah'));
                $kecamatan_ayah                         = htmlspecialchars($this->input->post('kecamatan_ayah'));
                $kabupaten_ayah                         = htmlspecialchars($this->input->post('kabupaten_ayah'));
                $provinsi_ayah                          = htmlspecialchars($this->input->post('provinsi_ayah'));
                $hp_ayah                                = htmlspecialchars($this->input->post('hp_ayah'));
                $nama_ibu                               = htmlspecialchars($this->input->post('nama_ibu'));
                $nik_ibu                                = htmlspecialchars($this->input->post('nik_ibu'));
                $tptlahir_ibu                           = htmlspecialchars($this->input->post('tptlahir_ibu'));
                $tgllahir_ibu                           = htmlspecialchars($this->input->post('tgllahir_ibu'));
                $pendidikan_ibu                         = htmlspecialchars($this->input->post('pendidikan_ibu'));
                $pekerjaan_ibu                          = htmlspecialchars($this->input->post('pekerjaan_ibu'));
                $penghasilan_ibu                        = htmlspecialchars($this->input->post('penghasilan_ibu'));
                $alamat_ibu                             = htmlspecialchars($this->input->post('alamat_ibu'));
                $desa_ibu                               = htmlspecialchars($this->input->post('desa_ibu'));
                $kecamatan_ibu                          = htmlspecialchars($this->input->post('kecamatan_ibu'));
                $kabupaten_ibu                          = htmlspecialchars($this->input->post('kabupaten_ibu'));
                $provinsi_ibu                           = htmlspecialchars($this->input->post('provinsi_ibu'));
                $hp_ibu                                 = htmlspecialchars($this->input->post('hp_ibu'));
                $sekolah_asal                           = htmlspecialchars($this->input->post('sekolah_asal'));
                $npsn                                   = htmlspecialchars($this->input->post('npsn'));
                $alamat_sekolah                         = htmlspecialchars($this->input->post('alamat_sekolah'));
                $kabupaten_sekolah                      = htmlspecialchars($this->input->post('kabupaten_sekolah'));
                $provinsi_sekolah                       = htmlspecialchars($this->input->post('provinsi_sekolah'));
                $penyakit                               = htmlspecialchars($this->input->post('penyakit'));
                $olah_raga                              = htmlspecialchars($this->input->post('olah_raga'));
                $seni                                   = htmlspecialchars($this->input->post('seni'));
                $tari                                   = htmlspecialchars($this->input->post('tari'));
                $lukis                                  = htmlspecialchars($this->input->post('lukis'));
                $drama                                  = htmlspecialchars($this->input->post('drama'));
                $sastra                                 = htmlspecialchars($this->input->post('sastra'));
                $organisasi                             = htmlspecialchars($this->input->post('organisasi'));
                $prestasi                               = htmlspecialchars($this->input->post('prestasi'));
                $alasan                                 = htmlspecialchars($this->input->post('alasan'));
                $tentang_sekolah                        = htmlspecialchars($this->input->post('tentang_sekolah'));



                $data2 = array(
                    'id' => $id, 'tingkat' => "$tingkat", 'nama_lengkap' => "$nama_lengkap", 'nama_panggilan' => "$nama_panggilan", 'nisn' => "$nisn", 'nik' => "$nik_siswa",
                    'tpt_lahir' => "$tpt_lahir", 'tgl_lahir' => "$tgl_lahir",'agama' => "$agama", 'suku' => "$suku", 'jk' => "$jk", 'goldar' => "$goldar",
                    'anak_ke' => "$anak_ke", 'dari_saudara' => "$dari_saudara", 'alamat' => "$alamat", 'jarak' => "$jarak", 'desa' => "$desa", 'kecamatan' => "$kecamatan",
                    'kabupaten' => "$kabupaten",'provinsi' => "$provinsi",'nama_ayah' => "$nama_ayah", 'nik_ayah' => "$nik_ayah", 'tptlahir_ayah' => "$tptlahir_ayah",'tgllahir_ayah' => "$tgllahir_ayah",
                    'pendidikan_ayah' => "$pendidikan_ayah",'pekerjaan_ayah' => "$pekerjaan_ayah", 'penghasilan_ayah' => "$penghasilan_ayah",'alamat_ayah' => "$alamat_ayah",
                    'desa_ayah' => "$desa_ayah",'kecamatan_ayah' => "$kecamatan_ayah",'kabupaten_ayah' => "$kabupaten_ayah",'provinsi_ayah' => "$provinsi_ayah",'hp_ayah' => "$hp_ayah",
                    'nama_ibu' => "$nama_ibu", 'nik_ibu' => "$nik_ibu", 'tptlahir_ibu' => "$tptlahir_ibu",'tgllahir_ibu' => "$tgllahir_ibu",
                    'pendidikan_ibu' => "$pendidikan_ibu",'pekerjaan_ibu' => "$pekerjaan_ibu", 'penghasilan_ibu' => "$penghasilan_ibu",'alamat_ibu' => "$alamat_ibu",
                    'desa_ibu' => "$desa_ibu",'kecamatan_ibu' => "$kecamatan_ibu",'kabupaten_ibu' => "$kabupaten_ibu",'provinsi_ibu' => "$provinsi_ibu",'hp_ibu' => "$hp_ibu",
                    'sekolah_asal' => "$sekolah_asal",'npsn' => "$npsn", 'alamat_sekolah' => "$alamat_sekolah", 'kabupaten_sekolah' => "$kabupaten_sekolah", 'provinsi_sekolah' => "$provinsi_sekolah",
                    'penyakit' => "$penyakit",'olah_raga' => "$olah_raga", 'seni' => "$seni",'tari' => "$tari",'lukis' => "$lukis", 'drama' => "$drama", 'sastra' => "$sastra",
                    'organisasi' => "$organisasi",'prestasi' => "$prestasi",'alasan' => "$alasan",'tentang_sekolah' => "$tentang_sekolah"
                );

                $where = array(
                    'id_daftarulang' => $id_daftarulang
                );

                $this->M_ppdb->updatedaftarulanguser($where, $data2, 'daftarulang');
                $this->load->view('berhasil_update_biodata_formulir');
            }

            public function cetakdaftarulang()
            {
                $plain_id = $this->session->userdata('id');
                $sess_data = $this->session->userdata();
                $sess_data['subtitle']="Cetak Berkas";
                $sess_data['subtitles']="Registrasi Ulang";
                $id =    array('id' => $plain_id);
                $sess_data['user'] = $this->M_ppdb->tampilpengguna($id, 'pengguna')->result();
                $data['cetakdaftarulang'] = $this->M_ppdb->editdaftarulang($id, 'daftarulang')->result();


                $data2 = $this->M_ppdb->tampilpengguna($id, 'pengguna')->result();

                foreach ($data2 as $dataku) {
                    $dataku22=$dataku->approve_lulus;
                }



                if ($dataku22=="Lulus") {
                    $this->load->view('template/header');
                    $this->load->view('template/sidebaruser', $sess_data);
                    $this->load->view('cetakdaftarulang', $data);
                    $this->load->view('template/footer');
                } elseif ($dataku22=="Antrian") {
                    $this->load->view('template/header');
                    $this->load->view('template/sidebaruser', $sess_data);
                    $this->load->view('keputusan_cetak');
                    $this->load->view('template/footer');
                } else {
                    $this->load->view('template/header');
                    $this->load->view('template/sidebaruser', $sess_data);
                    $this->load->view('keputusan_cetak');
                    $this->load->view('template/footer');
                }
            }



            public function cetakformulirdaftarulanguser()
            {
                //local function untuk tanggal indo
                function tanggal_indo($tanggal)
                {
                    $tgl = explode("-", $tanggal);
                    $bln["01"]="Januari";
                    $bln["02"]="Februari";
                    $bln["03"]="Maret";
                    $bln["04"]="April";
                    $bln["05"]="Mei";
                    $bln["06"]="Juni";
                    $bln["07"]="Juli";
                    $bln["08"]="Agustus";
                    $bln["09"]="September";
                    $bln["10"]="Oktober";
                    $bln["11"]="November";
                    $bln["12"]="Desember";
                    if ($tgl[0]=="0000") {
                        return $tanggal;
                    } else {
                        return $tgl[2]." ".$bln[$tgl[1]]." ".$tgl[0];
                    }
                }
                // membaca data dari form
                $nama_lengkap    = $this->input->post('nama_lengkap');
                $nama_panggilan  = $this->input->post('nama_panggilan');
                $tingkat		 = $this->input->post('tingkat');
                $nisn	         = $this->input->post('nisn');
                $goldar	         = $this->input->post('goldar');
                $anak_ke         = $this->input->post('anak_ke');
                $dari_saudara    = $this->input->post('dari_saudara');
                $jarak	         = $this->input->post('jarak');
                $tpt_lahir	     = $this->input->post('tpt_lahir');
                $tgl_lahir       = tanggal_indo($this->input->post('tgl_lahir'));
                $agama	         = $this->input->post('agama');
                $suku	         = $this->input->post('suku');
                $jk		         = $this->input->post('jk');
                $alamat	         = $this->input->post('alamat');
                $desa	         = $this->input->post('desa');
                $kabupaten       = $this->input->post('kabupaten');
                $provinsi        = $this->input->post('provinsi');
                $nama_ayah	     = $this->input->post('nama_ayah');
                $pendidikan_ayah	= $this->input->post('pendidikan_ayah');
                $penghasilan_ayah	= $this->input->post('penghasilan_ayah');
                $hp_ayah	        = $this->input->post('hp_ayah');
                $tptlahir_ayah      = $this->input->post('tptlahir_ayah');
                $tgllahir_ayah      = tanggal_indo($this->input->post('tgllahir_ayah'));
                $pekerjaan_ayah     = $this->input->post('pekerjaan_ayah');
                $alamatayah        = $this->input->post('alamat_ayah');
                $desa_ayah          = $this->input->post('desa_ayah');
                $kabupaten_ayah     = $this->input->post('kabupaten_ayah');
                $provinsi_ayah      = $this->input->post('provinsi_ayah');
                $nama_ibu	     = $this->input->post('nama_ibu');
                $pendidikan_ibu	= $this->input->post('pendidikan_ibu');
                $penghasilan_ibu	= $this->input->post('penghasilan_ibu');
                $hp_ibu	        = $this->input->post('hp_ibu');
                $tptlahir_ibu      = $this->input->post('tptlahir_ibu');
                $tgllahir_ibu      = tanggal_indo($this->input->post('tgllahir_ibu'));
                $pekerjaan_ibu     = $this->input->post('pekerjaan_ibu');
                $alamat_ibu        = $this->input->post('alamat_ibu');
                $desa_ibu          = $this->input->post('desa_ibu');
                $kabupaten_ibu     = $this->input->post('kabupaten_ibu');
                $provinsi_ibu      = $this->input->post('provinsi_ibu');
                $sekolah_asal	   = $this->input->post('sekolah_asal');
                $npsn		       = $this->input->post('npsn');
                $almt_sekolah    = $this->input->post('alamat_sekolah');
                $kabupaten_sekolah		= $this->input->post('kabupaten_sekolah');
                $provinsi_sekolah		= $this->input->post('provinsi_sekolah');
                $penyakit	         = $this->input->post('penyakit');
                $olah_raga	         = $this->input->post('olah_raga');
                $seni	         = $this->input->post('seni');
                $tari	         = $this->input->post('tari');
                $lukis	         = $this->input->post('lukis');
                $drama	         = $this->input->post('drama');
                $sastra	         = $this->input->post('sastra');
                $organisasi	         = $this->input->post('organisasi');
                $prestasi	         = $this->input->post('prestasi');
                $alasan	         = $this->input->post('alasan');
                $tentang_sekolah	         = $this->input->post('tentang_sekolah');




                // memanggil dan membaca template dokumen yang telah kita buat
                $document = file_get_contents("formulir_pendaftaran_ulang.rtf");

                // isi dokumen dinyatakan dalam bentuk string
                $document = str_replace("#NAMA_LENGKAP", $nama_lengkap, $document);
                $document = str_replace("#NAMA_PANGGILAN", $nama_panggilan, $document);
                $document = str_replace("#TINGKAT", $tingkat, $document);
                $document = str_replace("#NISN", $nisn, $document);
                $document = str_replace("#GOLDAR", $goldar, $document);
                $document = str_replace("#ANAK_KE", $anak_ke, $document);
                $document = str_replace("#DARI_SAUDARA", $dari_saudara, $document);
                $document = str_replace("#JARAK", $jarak, $document);
                $document = str_replace("#TPTLAHIR", $tpt_lahir, $document);
                $document = str_replace("#TGLLAHIR", $tgl_lahir, $document);
                $document = str_replace("#AGAMA", $agama, $document);
                $document = str_replace("#SUKU", $suku, $document);
                $document = str_replace("#JK", $jk, $document);
                $document = str_replace("#ALAMAT", $alamat, $document);
                $document = str_replace("#DESA", $desa, $document);
                $document = str_replace("#KABUPATEN", $kabupaten, $document);
                $document = str_replace("#PROVINSI", $provinsi, $document);
                $document = str_replace("#NAMA_AYAH", $nama_ayah, $document);
                $document = str_replace("#PENDIDIKAN_AYAH", $pendidikan_ayah, $document);
                $document = str_replace("#PENGHASILAN_AYAH", $penghasilan_ayah, $document);
                $document = str_replace("#NOTEL", $hp_ayah, $document);
                $document = str_replace("#TPT_AYAH", $tptlahir_ayah, $document);
                $document = str_replace("#TGL_AYAH", $tgllahir_ayah, $document);
                $document = str_replace("#PEKERJAAN", $pekerjaan_ayah, $document);
                $document = str_replace("#TPTTINGGAL_AYAH", $alamatayah, $document);
                $document = str_replace("#KEL", $desa_ayah, $document);
                $document = str_replace("#KAB", $kabupaten_ayah, $document);
                $document = str_replace("#KAU", $provinsi_ayah, $document);


                $document = str_replace("#MOTHER", $nama_ibu, $document);
                $document = str_replace("#KUG", $pendidikan_ibu, $document);
                $document = str_replace("#KEK", $penghasilan_ibu, $document);
                $document = str_replace("#HP", $hp_ibu, $document);
                $document = str_replace("#KUH", $tptlahir_ibu, $document);
                $document = str_replace("#KUK", $tgllahir_ibu, $document);
                $document = str_replace("#KUB", $pekerjaan_ibu, $document);
                $document = str_replace("#KEH", $alamat_ibu, $document);
                $document = str_replace("#KEF", $desa_ibu, $document);
                $document = str_replace("#KAF", $kabupaten_ibu, $document);
                $document = str_replace("#KAG", $provinsi_ibu, $document);
                $document = str_replace("#HH", $sekolah_asal, $document);
                $document = str_replace("#HK", $npsn, $document);
                $document = str_replace("#HN", $almt_sekolah, $document);
                $document = str_replace("#HJ", $kabupaten_sekolah, $document);
                $document = str_replace("#HY", $provinsi_sekolah, $document);
                $document = str_replace("#PENYAKIT", $penyakit, $document);
                $document = str_replace("#OLAH_RAGA", $olah_raga, $document);
                $document = str_replace("#SENI", $seni, $document);
                $document = str_replace("#TARI", $tari, $document);
                $document = str_replace("#LUKIS", $lukis, $document);
                $document = str_replace("#DRAMA", $drama, $document);
                $document = str_replace("#SASTRA", $sastra, $document);
                $document = str_replace("#ORGANISASI", $organisasi, $document);
                $document = str_replace("#PRESTASI", $prestasi, $document);
                $document = str_replace("#ALASAN", $alasan, $document);
                $document = str_replace("#TENTANG_SEKOLAH", $tentang_sekolah, $document);







                // header untuk membuka file output RTF dengan MS. Word

                header("Content-type: application/msword");
                header("Content-disposition: inline; filename=formulir_pendaftaran_ulang.doc");
                header("Content-length: ".strlen($document));
                echo $document;
            }

            public function cetaksuratpernyataanuser()
            {
                //local function untuk tanggal indo
                function tanggal_indo($tanggal)
                {
                    $tgl = explode("-", $tanggal);
                    $bln["01"]="Januari";
                    $bln["02"]="Februari";
                    $bln["03"]="Maret";
                    $bln["04"]="April";
                    $bln["05"]="Mei";
                    $bln["06"]="Juni";
                    $bln["07"]="Juli";
                    $bln["08"]="Agustus";
                    $bln["09"]="September";
                    $bln["10"]="Oktober";
                    $bln["11"]="November";
                    $bln["12"]="Desember";
                    if ($tgl[0]=="0000") {
                        return $tanggal;
                    } else {
                        return $tgl[2]." ".$bln[$tgl[1]]." ".$tgl[0];
                    }
                }
                // membaca data dari form
                $nama_lengkap    = $this->input->post('nama_lengkap');
                $tpt_lahir	     = $this->input->post('tpt_lahir');
                $tgl_lahir       = tanggal_indo($this->input->post('tgl_lahir'));
                $alamat	         = $this->input->post('alamat');
                $desa	         = $this->input->post('desa');
                $kabupaten       = $this->input->post('kabupaten');
                $provinsi        = $this->input->post('provinsi');

                // memanggil dan membaca template dokumen yang telah kita buat
                $document = file_get_contents("surat_pernyataan.rtf");

                // isi dokumen dinyatakan dalam bentuk string
                $document = str_replace("#NAMA_LENGKAP", $nama_lengkap, $document);
                $document = str_replace("#TPTLAHIR", $tpt_lahir, $document);
                $document = str_replace("#TGLLAHIR", $tgl_lahir, $document);
                $document = str_replace("#ALAMAT", $alamat, $document);
                $document = str_replace("#DESA", $desa, $document);
                $document = str_replace("#KABUPATEN", $kabupaten, $document);
                $document = str_replace("#PROVINSI", $provinsi, $document);

                // header untuk membuka file output RTF dengan MS. Word
                header("Content-type: application/msword");
                header("Content-disposition: inline; filename=surat_pernyataan.doc");
                header("Content-length: ".strlen($document));
                echo $document;
            }

public function cetakpaktaintegritasuser()
{
    //local function untuk tanggal indo
    function tanggal_indo($tanggal)
    {
        $tgl = explode("-", $tanggal);
        $bln["01"]="Januari";
        $bln["02"]="Februari";
        $bln["03"]="Maret";
        $bln["04"]="April";
        $bln["05"]="Mei";
        $bln["06"]="Juni";
        $bln["07"]="Juli";
        $bln["08"]="Agustus";
        $bln["09"]="September";
        $bln["10"]="Oktober";
        $bln["11"]="November";
        $bln["12"]="Desember";
        if ($tgl[0]=="0000") {
            return $tanggal;
        } else {
            return $tgl[2]." ".$bln[$tgl[1]]." ".$tgl[0];
        }
    }
    // membaca data dari form
    $nama_lengkap    = $this->input->post('nama_lengkap');
    $nama_panggilan  = $this->input->post('nama_panggilan');
    $tingkat		 = $this->input->post('tingkat');
    $nisn	         = $this->input->post('nisn');
    $goldar	         = $this->input->post('goldar');
    $anak_ke         = $this->input->post('anak_ke');
    $dari_saudara    = $this->input->post('dari_saudara');
    $jarak	         = $this->input->post('jarak');
    $tpt_lahir	     = $this->input->post('tpt_lahir');
    $tgl_lahir       = tanggal_indo($this->input->post('tgl_lahir'));
    $agama	         = $this->input->post('agama');
    $suku	         = $this->input->post('suku');
    $jk		         = $this->input->post('jk');
    $alamat	         = $this->input->post('alamat');
    $desa	         = $this->input->post('desa');
    $kabupaten       = $this->input->post('kabupaten');
    $provinsi        = $this->input->post('provinsi');
    $nama_ayah	     = $this->input->post('nama_ayah');
    $pendidikan_ayah	= $this->input->post('pendidikan_ayah');
    $penghasilan_ayah	= $this->input->post('penghasilan_ayah');
    $hp_ayah	        = $this->input->post('hp_ayah');
    $tptlahir_ayah      = $this->input->post('tptlahir_ayah');
    $tgllahir_ayah      = tanggal_indo($this->input->post('tgllahir_ayah'));
    $pekerjaan_ayah     = $this->input->post('pekerjaan_ayah');
    $alamatayah        = $this->input->post('alamat_ayah');
    $desa_ayah          = $this->input->post('desa_ayah');
    $kabupaten_ayah     = $this->input->post('kabupaten_ayah');
    $provinsi_ayah      = $this->input->post('provinsi_ayah');
    $nama_ibu	     = $this->input->post('nama_ibu');
    $pendidikan_ibu	= $this->input->post('pendidikan_ibu');
    $penghasilan_ibu	= $this->input->post('penghasilan_ibu');
    $hp_ibu	        = $this->input->post('hp_ibu');
    $tptlahir_ibu      = $this->input->post('tptlahir_ibu');
    $tgllahir_ibu      = tanggal_indo($this->input->post('tgllahir_ibu'));
    $pekerjaan_ibu     = $this->input->post('pekerjaan_ibu');
    $alamat_ibu        = $this->input->post('alamat_ibu');
    $desa_ibu          = $this->input->post('desa_ibu');
    $kabupaten_ibu     = $this->input->post('kabupaten_ibu');
    $provinsi_ibu      = $this->input->post('provinsi_ibu');
    $sekolah_asal	   = $this->input->post('sekolah_asal');
    $npsn		       = $this->input->post('npsn');
    $almt_sekolah    = $this->input->post('alamat_sekolah');
    $kabupaten_sekolah		= $this->input->post('kabupaten_sekolah');
    $provinsi_sekolah		= $this->input->post('provinsi_sekolah');
    $penyakit	         = $this->input->post('penyakit');
    $olah_raga	         = $this->input->post('olah_raga');
    $seni	         = $this->input->post('seni');
    $tari	         = $this->input->post('tari');
    $lukis	         = $this->input->post('lukis');
    $drama	         = $this->input->post('drama');
    $sastra	         = $this->input->post('sastra');
    $organisasi	         = $this->input->post('organisasi');
    $prestasi	         = $this->input->post('prestasi');
    $alasan	         = $this->input->post('alasan');
    $tentang_sekolah	         = $this->input->post('tentang_sekolah');




    // memanggil dan membaca template dokumen yang telah kita buat
    $document = file_get_contents("pakta_integritas.rtf");

    // isi dokumen dinyatakan dalam bentuk string
    $document = str_replace("#NAMA_LENGKAP", $nama_lengkap, $document);
    $document = str_replace("#NAMA_PANGGILAN", $nama_panggilan, $document);
    $document = str_replace("#TINGKAT", $tingkat, $document);
    $document = str_replace("#NISN", $nisn, $document);
    $document = str_replace("#GOLDAR", $goldar, $document);
    $document = str_replace("#ANAK_KE", $anak_ke, $document);
    $document = str_replace("#DARI_SAUDARA", $dari_saudara, $document);
    $document = str_replace("#JARAK", $jarak, $document);
    $document = str_replace("#TPTLAHIR", $tpt_lahir, $document);
    $document = str_replace("#TGLLAHIR", $tgl_lahir, $document);
    $document = str_replace("#AGAMA", $agama, $document);
    $document = str_replace("#SUKU", $suku, $document);
    $document = str_replace("#JK", $jk, $document);
    $document = str_replace("#ALAMAT", $alamat, $document);
    $document = str_replace("#DESA", $desa, $document);
    $document = str_replace("#KABUPATEN", $kabupaten, $document);
    $document = str_replace("#PROVINSI", $provinsi, $document);
    $document = str_replace("#NAMA_AYAH", $nama_ayah, $document);
    $document = str_replace("#PENDIDIKAN_AYAH", $pendidikan_ayah, $document);
    $document = str_replace("#PENGHASILAN_AYAH", $penghasilan_ayah, $document);
    $document = str_replace("#NOTEL", $hp_ayah, $document);
    $document = str_replace("#TPT_AYAH", $tptlahir_ayah, $document);
    $document = str_replace("#TGL_AYAH", $tgllahir_ayah, $document);
    $document = str_replace("#PEKERJAAN", $pekerjaan_ayah, $document);
    $document = str_replace("#TPTTINGGAL_AYAH", $alamatayah, $document);
    $document = str_replace("#KEL", $desa_ayah, $document);
    $document = str_replace("#KAB", $kabupaten_ayah, $document);
    $document = str_replace("#KAU", $provinsi_ayah, $document);


    $document = str_replace("#ORTUIBU", $nama_ibu, $document);
    $document = str_replace("#KUG", $pendidikan_ibu, $document);
    $document = str_replace("#KEK", $penghasilan_ibu, $document);
    $document = str_replace("#HP", $hp_ibu, $document);
    $document = str_replace("#KUH", $tptlahir_ibu, $document);
    $document = str_replace("#KUK", $tgllahir_ibu, $document);
    $document = str_replace("#KUB", $pekerjaan_ibu, $document);
    $document = str_replace("#KEH", $alamat_ibu, $document);
    $document = str_replace("#KEF", $desa_ibu, $document);
    $document = str_replace("#KAF", $kabupaten_ibu, $document);
    $document = str_replace("#KAG", $provinsi_ibu, $document);
    $document = str_replace("#HH", $sekolah_asal, $document);
    $document = str_replace("#HK", $npsn, $document);
    $document = str_replace("#HN", $almt_sekolah, $document);
    $document = str_replace("#HJ", $kabupaten_sekolah, $document);
    $document = str_replace("#HY", $provinsi_sekolah, $document);
    $document = str_replace("#PENYAKIT", $penyakit, $document);
    $document = str_replace("#OLAH_RAGA", $olah_raga, $document);
    $document = str_replace("#SENI", $seni, $document);
    $document = str_replace("#TARI", $tari, $document);
    $document = str_replace("#LUKIS", $lukis, $document);
    $document = str_replace("#DRAMA", $drama, $document);
    $document = str_replace("#SASTRA", $sastra, $document);
    $document = str_replace("#ORGANISASI", $organisasi, $document);
    $document = str_replace("#PRESTASI", $prestasi, $document);
    $document = str_replace("#ALASAN", $alasan, $document);
    $document = str_replace("#TENTANG_SEKOLAH", $tentang_sekolah, $document);







    // header untuk membuka file output RTF dengan MS. Word

    header("Content-type: application/msword");
    header("Content-disposition: inline; filename=pakta_integritas.doc");
    header("Content-length: ".strlen($document));
    echo $document;
}


    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('hal/login'));
    }
}
