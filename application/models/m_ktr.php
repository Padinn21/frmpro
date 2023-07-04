<?php

class M_ktr extends CI_Model {
    public function get_data () 
    {
        return $this->db->get('tb_karyawan')->result_array();
    }
}