<?php

/**
 * 
 */
class Admin_data_mahasiswa extends CI_Controller
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

        $data['title'] = 'Admin - Data Mahasiswa';
		$data['datamahasiswa'] = $this->Modeladmin->tampil_data_mahasiswa();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar');
        $this->load->view('admin/v_admin_data_mahasiswa', $data);
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

					$data['title'] = 'Admin - Tambah Data Mahasiswa';
					$foto = $this->upload->data();

					$this->form_validation->set_rules('nama', 'Nama', 'required');
					$this->form_validation->set_rules('tgllahir', 'Tanggal Lahir', 'required');
					$this->form_validation->set_rules('alamat', 'Alamat', 'required');
					$this->form_validation->set_rules('notelp', 'Nomor Telepon', 'required');
					$this->form_validation->set_rules('email', 'Email', 'required');
					$this->form_validation->set_rules($foto, 'Foto', 'required');

					if ($this->form_validation->run() == FALSE)
					{
						$this->load->view('templates/header', $data);
						$this->load->view('templates/sidebar');
						$this->load->view('templates/navbar');
						$this->load->view('admin/v_admin_tambah_mahasiswa');
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

	public function editdata($id)
	{	
		$data['title'] = 'Edit Data';
		$data['edit'] = $this->Modeladmin->tarik_data_mahasiswa($id);
		// var_dump($data['edit']);

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tgllahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('notelp', 'Nomor Telepon', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		// $this->form_validation->set_rules('foto', 'Foto', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header', $data);
        	$this->load->view('templates/sidebar');
        	$this->load->view('templates/navbar');
        	$this->load->view('admin/v_admin_edit_mahasiswa', $data);
        	$this->load->view('templates/footer');
			$this->session->set_flashdata('message',
			'<div class="alert alert-danger" role="alert">
			Data Gagal Diubah ! Coba Lagi !</div>');

		} else {
			$this->Modeladmin->edit_data_mahasiswa();
			$this->session->set_flashdata('message',
			'<div class="alert alert-success" role="alert">
			Data Berhasil Diubah !</div>');
			redirect('admin/admin_data_mahasiswa');
		}
	}

	public function hapusdata($id)
	{
		$this->Modeladmin->hapus_data_mahasiswa($id);
		$this->session->set_flashdata('message',
		'<div class="alert alert-success" role="alert">
		Data Berhasil Dihapus !</div>');
		redirect('admin/Admin_data_mahasiswa');
	}
    
}

?>