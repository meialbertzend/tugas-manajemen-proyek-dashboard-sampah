<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waste_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_waste_data() {
        $query = $this->db->get('waste'); // Asumsikan 'waste' adalah nama tabel
        return $query->result();
    }
}
