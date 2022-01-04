<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hpm extends CI_Model {
    public function semuadata() {
        return $this->db->get('himpunan')->result_array();
    }
}