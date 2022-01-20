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
        $config['upload_path']          = './file/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']             = 1024; // 1mb

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('lpj')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            die;
        } else {
            $nama_file = $this->upload->data('file_name');
        }

        $data = [
            "id_himpunan" => $this->input->post('id'),
            "nama" => $this->input->post('nama_kegiatan'),
            "tanggal" => $this->input->post('tanggal'),
            "waktu" => $this->input->post('waktu'),
            "stakeholder" => $this->input->post('stakeholder'),
            "biaya" => $this->input->post('biaya'),
            "lpj" => $nama_file,
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
    public function proseseditkegiatan()
    {
        $data = [
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
    function proseseditdata($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
