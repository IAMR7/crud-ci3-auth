<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
        if($this->session->userdata('role') != 1) {

            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Akses Ditolak!</strong> Anda tidak berhak mengakses.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('Auth');

        }
    }
    

    public function index()
    {
        $data['title'] = 'Admin - Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar');
        $this->load->view('v_admin');
        $this->load->view('templates/footer');
        
    }

}

/* End of file Admin.php */


?>