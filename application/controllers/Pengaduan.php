<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengaduan');
        
    }

    public function wbs()
	{
        $data = array (
            'title' => 'LPKA Tomohon',
            'title2' => 'Whistle Blowing System',
            'wbs' => $this->m_pengaduan->list_wbs(),
            'isi'   => 'admin/v_wbs'
        );
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    
    public function delete_wbs($id_wbs)
    {
     $data = array(
         'id_wbs' => $id_wbs,
         
        );

    $this->m_pengaduan->delete_wbs($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');
    redirect('pengaduan/wbs');
    }
 

    public function upg()
	{
        $data = array (
            'title' => 'LPKA Tomohon',
            'title2' => 'Unit Pengendali Gratifikasi',
            'upg' => $this->m_pengaduan->list_upg(),
            'isi'   => 'admin/v_upg'
        );
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    
    public function delete_upg($id_gratifikasi)
    {
     $data = array(
         'id_gratifikasi' => $id_gratifikasi,
         
        );

    $this->m_pengaduan->delete_upg($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');
    redirect('pengaduan/upg');
    }

    public function kotakpengaduan()
	{
        $data = array (
            'title' => 'LPKA Tomohon',
            'title2' => 'Kotak Pengaduan',
            'kotakpengaduan' => $this->m_pengaduan->list_kotakpengaduan(),
            'isi'   => 'admin/v_kotakpengaduan'
        );
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    
    public function delete_kotakpengaduan($id_pengaduan)
    {
     $data = array(
         'id_pengaduan' => $id_pengaduan,
         
        );

    $this->m_pengaduan->delete_kotakpengaduan($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');
    redirect('pengaduan/kotakpengaduan');
    }

}