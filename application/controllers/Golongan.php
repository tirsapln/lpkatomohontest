<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golongan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_golongan');
    }
	public function index()
	{
        $data = array (
            'title' => 'LPKA Tomohon',
            'title2' => 'Pangkat/Golongan',
            'golongan' => $this->m_golongan->lists(),
            'isi'   => 'admin/v_golongan',
        );
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
    
    public function add()
    {
     $data = array(
         'nama_golongan' => $this ->input->post('nama_golongan')
        );

    $this->m_golongan->add($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
    redirect('golongan');
    }

    public function edit($id_golongan)
    {
     $data = array(
         'id_golongan' => $id_golongan,
         'nama_golongan' => $this ->input->post('nama_golongan')
        );

    $this->m_golongan->edit($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Ubah !!!');
    redirect('golongan');
    }

    public function delete($id_golongan)
    {
     $data = array(
         'id_golongan' => $id_golongan,
         
        );

    $this->m_golongan->delete($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');
    redirect('golongan');
    }

}