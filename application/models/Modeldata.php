<?php

/**
 * 
 */
class Modeldata extends CI_Model
{
	
	public function tampil_data()
	{
		$query = $this->db->get('mahasiswa');
		return $query->result();
	}

	public function tambah_data()
	{
		$data = [
					'nim'			=>	$this->input->post('nim'),
					'nama'			=>	$this->input->post('nama'),
					'tgllahir'		=>	$this->input->post('tgllahir'),
					'jeniskelamin'	=>	$this->input->post('jeniskelamin'),
					'alamat'		=>	$this->input->post('alamat'),
					'notelp'		=>	$this->input->post('notelp'),
					'email'			=>	$this->input->post('email'),
				];
		$this->db->insert('mahasiswa', $data);
	}

	public function tarik_data($id)
	{
		return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
	}

	public function edit_data()
	{

		$data = [
					'nim'			=>	$this->input->post('nim'),
					'nama'			=>	$this->input->post('nama'),
					'tgllahir'		=>	$this->input->post('tgllahir'),
					'jeniskelamin'	=>	$this->input->post('jeniskelamin'),
					'alamat'		=>	$this->input->post('alamat'),
					'notelp'		=>	$this->input->post('notelp'),
					'email'			=>	$this->input->post('email'),
				];

		$this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
	}

	public function hapus_data($id)
	{
		$this->db->delete('mahasiswa', ['id' => $id]);
	}
}

?>