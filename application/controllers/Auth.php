<?php

/**
 * 
 */
class Auth extends CI_Controller
{
    
    
    public function index()
    {
        
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('v_auth');

        } else {

            $auth = $this->Modelauth->cek_login();

            if($auth == FALSE) {

                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Login Gagal!</strong> Email atau password anda salah. Coba lagi.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('Auth');
                

            } else {
                
                $this->session->set_userdata('id', $auth->id);
                $this->session->set_userdata('email', $auth->email);
                $this->session->set_userdata('password', $auth->password);
                $this->session->set_userdata('nama', $auth->nama);
                $this->session->set_userdata('foto_user', $auth->foto_user);
                $this->session->set_userdata('role', $auth->role);

                $this->session->set_userdata($auth);

                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Login Berhasil!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin');
                

            }
            

        }
        
        
        
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect(base_url());

    }

    
}

?>