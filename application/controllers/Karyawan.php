<?php

class Karyawan extends CI_Controller{
    public function index()
    {
        $data['karyawan'] = $this->m_karyawan->show_data()->
            result();

        $this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('karyawan', $data);
		$this->load->view('template/footer');
    }

    public function add_action() {
        $nama = $this->input->post('nama');
        $nik = $this->input->post('nik');
        $alamat = $this->input->post('alamat');
        $divisi = $this->input->post('divisi');

        $data = array(
            'nama' => $nama,
            'nik' => $nik,
            'alamat' => $alamat,
            'divisi' => $divisi,
        );

        $this->m_karyawan->input_data($data, 'tb_karyawan');
        redirect('karyawan/index');
    }

    public function delete($id) {
        $where = array ('id' => $id);
        $this->m_karyawan->delete_data($where, 'tb_karyawan');
        redirect('karyawan/index');
    }

    public function edit($id){
        $where = array('id'=>$id);
        $data['karyawan'] = $this->m_karyawan->edit_data($where, 'tb_karyawan')->result();

        $this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('template/footer');
    }

    public function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nik = $this->input->post('nik');
        $alamat = $this->input->post('alamat');
        $divisi = $this->input->post('divisi');

        $data = array(
            'nama' => $nama,
            'nik' => $nik,
            'alamat' => $alamat,
            'divisi' => $divisi,
        );

        $where = array(
            'id' => $id
        );

        $this->m_karyawan->update_data($where, $data, 'tb_karyawan');
        redirect('karyawan/index');
    }
}