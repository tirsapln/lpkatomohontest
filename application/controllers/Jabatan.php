<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_jabatan');
    }
	public function index()
	{
        $data = array (
            'title' => 'LPKA Tomohon',
            'title2' => 'Jabatan',
            'jabatan' => $this->m_jabatan->lists(),
            'isi'   => 'admin/v_jabatan',
        );
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
    
    public function add()
    {
     $data = array(
         'nama_jabatan' => $this ->input->post('nama_jabatan')
        );

    $this->m_jabatan->add($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
    redirect('jabatan');
    }

    public function edit($id_jabatan)
    {
     $data = array(
         'id_jabatan' => $id_jabatan,
         'nama_jabatan' => $this ->input->post('nama_jabatan')
        );

    $this->m_jabatan->edit($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Ubah !!!');
    redirect('jabatan');
    }

    public function delete($id_jabatan)
    {
     $data = array(
         'id_jabatan' => $id_jabatan,
         
        );

    $this->m_jabatan->delete($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');
    redirect('jabatan');
    }

}