<?php

/**
 * 
 */
class Viewdata extends CI_Controller
{
	
	public function index()
	{	
		$data['title'] = 'Home Mahasiswa';
		$data['datamahasiswa'] = $this->modeldata->tampil_data();

		$this->load->view('templates/header', $data);
		$this->load->view('tampildata', $data);
		$this->load->view('templates/footer');
	}

	public function tambahdata()
	{	
		$data['title'] = 'Tambah Data';
		
		$this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tgllahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('notelp', 'Nomor Telepon', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('tambahdata');
			$this->load->view('templates/footer');
			$this->session->set_flashdata('message',
			'<div class="alert alert-danger" role="alert">
			Data Gagal Ditambahkan ! Coba Lagi !</div>');
		} else {
			$this->modeldata->tambah_data();
			$this->session->set_flashdata('message',
			'<div class="alert alert-success" role="alert">
			Data Berhasil Ditambahkan !</div>');
			redirect('viewdata');
		}
	}

	public function editdata($id)
	{	
		$data['title'] = 'Edit Data';
		$data['edit'] = $this->modeldata->tarik_data($id);

		$this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tgllahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('notelp', 'Nomor Telepon', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('editdata', $data);
			$this->load->view('templates/footer');
			$this->session->set_flashdata('message',
			'<div class="alert alert-danger" role="alert">
			Data Gagal Diubah ! Coba Lagi !</div>');
		} else {
			$this->modeldata->edit_data();
			$this->session->set_flashdata('message',
			'<div class="alert alert-success" role="alert">
			Data Berhasil Diubah !</div>');
			redirect('viewdata');
		}
	}

	public function hapusdata($id)
	{
		$this->modeldata->hapus_data($id);
		$this->session->set_flashdata('message',
		'<div class="alert alert-success" role="alert">
		Data Berhasil Dihapus !</div>');
		redirect('viewdata');
	}
}

?>