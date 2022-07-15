<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Modelbuku extends CI_Model {
    
        public function tampilbuku () {

            $query = $this->db->get('tbl_book');
            return $query->result();

        }

        public function tambahbuku () {

            $data = [

                'sampul'        => $this->input->post('sampul'),
                'judul'         => $this->input->post('judul'),
                'penulis'       => $this->input->post('penulis'),
                'penerbit'      => $this->input->post('penerbit'),
                'tahun'         => $this->input->post('tahun')

            ];
            
            $this->db->insert('tbl_book', $data);

        }

        public function tarikdatabuku ($id) {

            return $this->db->get_where('tbl_book', ['id' => $id])->row_array();

        }

        public function editbuku () {

            $data = [

                'sampul'        => $this->input->post('sampul'),
                'judul'         => $this->input->post('judul'),
                'penulis'       => $this->input->post('penulis'),
                'penerbit'      => $this->input->post('penerbit'),
                'tahun'         => $this->input->post('tahun'),

            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('tbl_book', $data);

        }

        public function hapusbuku ($id) {

            $this->db->delete('tbl_book', ['id' => $id]);

        }
    
    }
    
    /* End of file Modelbuku.php */
    

?>