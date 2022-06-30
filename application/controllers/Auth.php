<?php

/**
 * 
 */
class Auth extends CI_Controller
{
	
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role') == 1 ) {
            
            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Anda Berhasil Login</div>');

        }
    }
    
    
    public function index()
    {
        
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE){

            $this->load->view('v_auth');
            

        } else {


            $auth = $this->Modelauth->cek_login();

            if ($auth == FALSE) {
                    
                $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Username atau password salah</div>');
                redirect('auth');

            } else {

                
                $this->session->set_userdata('id_admin', $auth->id_admin);
                $this->session->set_userdata('email', $auth->email);
                $this->session->set_userdata('nama', $auth->nama);
                $this->session->set_userdata('role',$auth->role);
                $this->session->set_userdata('foto', $auth->foto);
                
                $this->session->set_userdata($auth);

                $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Anda Berhasil Login</div>');

                redirect('admin/admin');

            }
            

        }
        
        
        
    }

    
}

?>