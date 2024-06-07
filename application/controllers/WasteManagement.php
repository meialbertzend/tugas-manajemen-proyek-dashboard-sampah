<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WasteManagement extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Memuat model, library, dll yang diperlukan
        $this->load->model('Waste_model');
    }

    public function index() {
        // Mengambil data dari model
        $data['waste_data'] = $this->Waste_model->get_waste_data();
        
        // Memuat view dan meneruskan data
        $this->load->view('waste_dashboard', $data);
    }
}
