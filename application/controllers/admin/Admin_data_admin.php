<?php

/**
 * 
 */
class Admin_data_admin extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role') != 1 ) {

            $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Harap login dulu !</div>');
            redirect('auth');

        }
    }

	public function index()
    {

        $data['title'] = 'Admin - Data Admin';
		$data['dataadmin'] = $this->Modeladmin->tampil_data_admin();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar');
        $this->load->view('admin/v_admin_data_admin', $data);
        $this->load->view('templates/footer');
        
        
    }

	public function tambahdata()
	{	

		if (isset($_POST['simpan'])) {

            $upload_foto = $_FILES['foto'];

            if ($upload_foto) {
				
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '0';
                $config['upload_path'] = './uploads/img';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('foto')) {
					
					$this->upload->display_errors();

                } else {

					$data['title'] = 'Admin - Tambah Data Admin';
					$foto = $this->upload->data();

					$this->form_validation->set_rules('nama', 'Nama', 'required');
					$this->form_validation->set_rules('email', 'Email', 'required');
					$this->form_validation->set_rules('password', 'Password', 'required');
					$this->form_validation->set_rules('role', 'Role', 'required');
					$this->form_validation->set_rules($foto, 'Foto', 'required');

					if ($this->form_validation->run() == FALSE)
					{
						$this->load->view('templates/header', $data);
						$this->load->view('templates/sidebar');
						$this->load->view('templates/navbar');
						$this->load->view('admin/v_admin_data_admin');
						$this->load->view('templates/footer');
						$this->session->set_flashdata('message',
						'<div class="alert alert-danger" role="alert">
						Data Gagal Ditambahkan ! Coba Lagi !</div>');
					} else {
						$this->Modeladmin->tambah_data_admin($foto['file_name']);
						redirect('admin/Admin_data_admin');
						$this->session->set_flashdata('message',
						'<div class="alert alert-success" role="alert">
						Data Berhasil Ditambahkan !</div>');
					}

                }
            }
		}

	}

	public function hapusdata($id)
	{
		$this->Modeladmin->hapus_data_admin($id);
		$this->session->set_flashdata('message',
		'<div class="alert alert-success" role="alert">
		Data Berhasil Dihapus !</div>');
		redirect('admin/Admin_data_admin');
	}
    
}

?>