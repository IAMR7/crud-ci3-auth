<?php

/**
 * 
 */
class Admin extends CI_Controller
{
	
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role') != 1 ) {
            
            redirect('auth');

        }
    }
    
    public function index()
    {

        $data['title'] = 'Admin - Dashboard';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar');
        $this->load->view('admin/v_admin');
        $this->load->view('templates/footer');
        
        
    }
    
}

?>