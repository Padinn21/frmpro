<?php

class Hello extends CI_Controller {
    public function index () {
        $this->load->model('m_ktr');
        $data['karyawan']= $this->m_ktr->get_data();

        $this->load->view('v_kry', $data);
    }
}

?>