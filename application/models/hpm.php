<?php
defined('BASEPATH') or exit('No direct script access allowed');

class hpm extends CI_Model
{
    public function semuadata()
    {
        return $this->db->get('himpunan')->result_array();
    }
    public function proses_tambah_kegiatan()
    {
        $data = [
            "id_himpunan" => $this->input->post('id'),
            "nama" => $this->input->post('nama_kegiatan'),
            "tanggal" => $this->input->post('tanggal'),
            "waktu" => $this->input->post('waktu'),
            "stakeholder" => $this->input->post('stakeholder'),
            "biaya" => $this->input->post('biaya'),
            "lpj" => $this->input->post('lpj'),
            "status" => $this->input->post('status'),

        ];
        $this->db->insert('himpunan', $data);
    }
    public function deletekegiatan($id_himpunan)
    {
        $this->db->where('id_himpunan', $id_himpunan);
        $this->db->delete('himpunan');
    }
    public function ambil_id_himpunan($id_himpunan)
    {
        return $this->db->get_where('himpunan', ['id_himpunan' => $id_himpunan])->row_array();
    }
    public function proseseditkegiatan() {
        $data=[
            "id_himpunan" => $this->input->post('id_himpunan'),
            "nama" => $this->input->post('nama'),
            "tanggal" => $this->input->post('tanggal'),
            "waktu" => $this->input->post('waktu'),
            "stakeholder" => $this->input->post('stakeholder'),
            "biaya" => $this->input->post('biaya'),
            "lpj" => $this->input->post('lpj'),
            "status" => $this->input->post('status'),
        ];

        $this->db->where('id_himpunan', $this->input->post('id_himpunan'));
        $this->db->update('himpunan', $data);
    }
}
