<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
	{
        $data['himpunan'] = $this->hpm->semuadata();
        $this->load->view('himpunan/header');
		$this->load->view('himpunan/index', $data);
        $this->load->view('himpunan/tabel');
        $this->load->view('himpunan/footer');
        $this->load->helper('url');
	}
    public function tambah_kegiatan () 
    {
        $data['himpunan'] = $this->hpm->semuadata();
        $this->load->view('himpunan/header');
		$this->load->view('himpunan/index');
        $this->load->view('tambah/add');
        $this->load->helper('url');
    }
}