<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

    private $view = "backend/v_user/";
    //memanggil control Usser/index dalam keadaan refresh
    private $redirect = "User";

    public function __construct()
    { 
        parent::__construct();
        //control User menghubungkan model M_user
        $this->load->model('M_user');
    }

    function index(){
        //memanggil model M_user dengan function GetAll
        $read = $this->M_user->GetAll();
        $data = array(
        //'read' variabel yang akan dipanggil pada view read.php
        'read'=> $read
        );
        /*
        dengan $this->view artinya memanggil private $view="backend/v_pegawai/" dilanjutkan dengan 'read' untuk memanggil read.php
        */
        $this->load->view($this->view.'read', $data);
    }

    public function create(){
        //untuk create tidak memangil model, langsung ke view dengan data baru
        $data = array(
        'create' => ''
        );
        $this->load->view($this->view.'create', $data);
    }

    public function save(){ 
        $data = array( 
        'id_user'=> $this->input->post('id_user'),
        'nm_user'=> $this->input->post('nm_user') ,
        'email_user'=> $this->input->post('email_user'),
        'peran_user'=> $this->input->post('peran_user'),
        'nasabah'=> $this->input->post('nasabah'),
        'password'=> md5($this->input->post('password')),
        );
        $this->M_user->save($data);
        
        //dengan $this->redirect artinya memanggil private $redirect = "Pegawai" 
        redirect($this->redirect,'refresh');
    }

    public function edit(){
        /*
        segment 1 adalah control, segment 2 adalah function,
        segment 2 adalah PK,
        data yang akan ditambilkan hanya yang dipilih saja
        sesuai PK yang dipilih 
        */
        $kd = $this->uri->segment(3);
        $data = array(
            //'edit' variabel yang akan dipanggil pada view edit.php
            'edit' => $this->M_user->edit($kd)
         ); 
        $this->load->view($this->view.'edit', $data); 
    }

    public function update(){
         $kd = $this->uri->segment(3); 
         $data = array(
            /*
            'nm_user' =nama yang diambil dari fild pada tabel
            $this->input->post('nm_user') =nama yang diambil dari form
            */
            'id_user'=> $this->input->post('id_user'),
            'nm_user'=> $this->input->post('nm_user') ,
            'email_user'=> $this->input->post('email_user'),
            'peran_user'=> $this->input->post('peran_user'),
            'nasabah'=> $this->input->post('nasabah'),
            'password'=> md5($this->input->post('password')),
         ); 
        $this->M_user->update($kd,$data);
        redirect($this->redirect,'refresh');
    }

    public function delete(){
        $kd = $this->uri->segment(3);
            $data = array(
            //data akan dihapus sesuai uri->segment(3) yang dipilih
            'id_user' => $kd 
            ); 
        $this->M_user->delete($data);
        redirect($this->redirect,'refresh');
    
    }
}