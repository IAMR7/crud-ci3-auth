<?php

/**
 * 
 */
class Modeladmin extends CI_Model
{

	// AWALAN MODEL DATA ADMIN
	
	public function tampil_data_admin()
	{
		$query = $this->db->get('tbl_admin');
		return $query->result();
	}

	public function tarik_data_admin($id)
	{
		return $this->db->get_where('tbl_admin', ['id' => $id])->row_array();
	}

	public function tambah_data_admin($photo)
	{
		$data = [
					'nama'			=>	$this->input->post('nama'),
					'email'			=>	$this->input->post('email'),
					'password'		=>	md5($this->input->post('password')),
					'role'			=>	$this->input->post('role'),
					'foto'			=>	$photo
				];

		$this->db->insert('tbl_admin', $data);
	}

	public function edit_data_admin($photo)
	{

		$data = [
					'nama'			=>	$this->input->post('nama'),
					'email'			=>	$this->input->post('email'),
					'role'			=>	$this->input->post('role'),
					'foto'			=>	$photo,
				];

		$this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_admin', $data);
	}

	public function hapus_data_admin($id)
	{
		$this->db->delete('tbl_admin', ['id' => $id]);
	}

	//AKHIRAN MODEL DATA ADMIN

	//AWALAN MODEL DATA MAHASISWA

	public function tampil_data_mahasiswa()
	{
		$query = $this->db->get('tbl_mahasiswa');
		return $query->result();
	}

	public function tarik_data_mahasiswa($id)
	{
		return $this->db->get_where('tbl_mahasiswa', ['id' => $id])->row_array();
	}

	public function tambah_data_mahasiswa($photo)
	{
		$data = [
					'nama'			=>	$this->input->post('nama'),
					'tgllahir'		=>	$this->input->post('tgllahir'),
					'alamat'		=>	$this->input->post('alamat'),
					'notelp'		=>	$this->input->post('notelp'),
					'email'			=>	$this->input->post('email'),
					'foto'			=>	$photo,
				];
		$this->db->insert('tbl_mahasiswa', $data);
	}

	

	public function edit_data_mahasiswa()
	{

		$data = [
					'nama'			=>	$this->input->post('nama'),
					'tgllahir'		=>	$this->input->post('tgllahir'),
					'alamat'		=>	$this->input->post('alamat'),
					'notelp'		=>	$this->input->post('notelp'),
					'email'			=>	$this->input->post('email'),
					// 'foto'			=>	$this->input->post('foto'),
				];

		$this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_mahasiswa', $data);
	}

	public function hapus_data_mahasiswa($id)
	{
		$this->db->delete('tbl_mahasiswa', ['id' => $id]);
	}

	//AKHIRAN MODEL DATA MAHASISWA
}

?>