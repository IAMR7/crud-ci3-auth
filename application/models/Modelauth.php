<?php

/**
 * 
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Modelauth extends CI_Model {

    public function cek_login() {

        $email = set_value('email');
        $password = md5(set_value('password'));
        $hasil = $this->db->where('email', $email)->where('password', $password)->limit(1)->get('tbl_user');

        if($hasil->num_rows() > 0 ) {

            return $hasil->row();

        } else {

            return array();

        }

    }

}

/* End of file Modelauth.php */


?>