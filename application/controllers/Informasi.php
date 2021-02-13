<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Informasi extends CI_Controller {

    public function index()
	{
		$this->load->view('info_landscape');
		$this->load->view('informasi');


	}

	public function kelulusan()
	{
		$data['kelulusan'] = $this->M_ppdb->tampilinfolulus()->result();
		$this->load->view('kelulusan',$data);


	}

}

?>