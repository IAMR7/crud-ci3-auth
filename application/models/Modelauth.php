<?php

/**
 * 
 */
class Modelauth extends CI_Model
{
	public function cek_login()
    {
        $email = set_value('email');
        $password = md5(set_value('password'));
        $result = $this->db->where('email', $email)->where('password', $password)->limit(1)->get('tbl_admin');

        if ($result->num_rows() > 0) {

            return $result->row();

        } else {
            
            return array();
        }
    }
	
}

?>