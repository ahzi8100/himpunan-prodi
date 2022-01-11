<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['himpunan'] = $this->hpm->semuadata();
        $this->load->view('himpunan/header');
        $this->load->view('himpunan/index', $data);
        $this->load->view('himpunan/tabel', $data);
        $this->load->view('himpunan/footer');
    }
    public function tambah_kegiatan()
    {
        $data['himpunan'] = $this->hpm->semuadata();
        $this->load->view('tambah/header');
        $this->load->view('himpunan/index');
        $this->load->view('tambah/add');
    }
    public function proses_tambah_kegiatan()
    {
        $this->hpm->proses_tambah_kegiatan();
        redirect('Home');
    }
    public function deletekegiatan($id_himpunan)
    {
        $this->hpm->deletekegiatan($id_himpunan);
        redirect('Home');
    }
    public function edit_kegiatan($id_himpunan)
    {
        $data['himpunan'] = $this->hpm->ambil_id_himpunan($id_himpunan);
        $this->load->view('tambah/header');
        $this->load->view('himpunan/index');
        $this->load->view('edit/edit', $data);
    }
    public function proseseditkegiatan($id_himpunan = null)
    {
        $this->hpm->proses_edit_kegiatan($id_himpunan);
        redirect('Home');
    }
    public function proses_edit_kegiatan()
    {
        $id_himpunan = $this->input->post('id_himpunan');
        $nama = $this->input->post('nama');
        $tanggal = $this->input->post('tanggal');
        $waktu = $this->input->post('waktu');
        $stakeholder = $this->input->post('stakeholder');
        $biaya = $this->input->post('biaya');
        $lpj = $this->input->post('lpj');
        $status = $this->input->post('status');

        $data = array(
            'id_himpunan' => $id_himpunan,
            'nama' => $nama,
            'tanggal' => $tanggal,
            'waktu' => $waktu,
            'stakeholder' => $stakeholder,
            'biaya' => $biaya,
            'lpj' => $lpj,
            'status' => $status,
        );

        $where = array(
            'id_himpunan' => $id_himpunan
        );

        $this->hpm->proseseditdata($where, $data, 'himpunan');
        redirect('home');
    }
}
