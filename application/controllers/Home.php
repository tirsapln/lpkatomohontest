<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }

	public function index()
	{
        $data = array (
            'title' => 'Home',
            'berita_home'       => $this->m_home->berita_home(),
            'galleri' => $this->m_home->galleri_home(),
            'kalapas' => $this->m_home->kalapas(),
            'profil' => $this->m_home->profil(),
            'isi'   => 'v_home',
            'slider' => $this->m_home->slider(),
        );
		$this->load->view('layout/v_wrapper_home', $data, FALSE);
    }

    public function profil()
	{
        $data = array (
            'title' => 'Profil',
            
            'isi'   => 'v_profil',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function edukpas()
	{
        $data = array (
            'title' => 'e-Dukasi Pas',
            'informasi'            => $this->m_home->layanan(),
            'isi'   => 'v_edukpas',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }
    
    public function download()
	{
        $data = array (
            'title' => 'Download',
            'download' => $this->m_home->download(),
            'isi'   => 'v_download',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function sejarah_singkat()
	{
        $data = array (
            'title' => 'Sejarah',
            'profil' => $this->m_home->profil(),
            'isi'   => 'v_sejarah_singkat',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function visi_dan_misi()
	{
        $data = array (
            'title' => 'Visi & Misi',
            'profil' => $this->m_home->profil(),
            'isi'   => 'v_visi_dan_misi',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function kepala_lpka()
	{
        $data = array (
            'title' => 'Kepala LPKA',
            'kalapas' => $this->m_home->kalapas(),
            'isi'   => 'v_kepala_lpka',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function struktur_organisasi()
	{
        $data = array (
            'title' => 'Struktur Organisasi',
            'profil' => $this->m_home->profil(),
            'isi'   => 'v_struktur_organisasi',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function tugas_dan_fungsi()
	{
        $data = array (
            'title' => 'Tugas dan Fungsi',
            'profil' => $this->m_home->profil(),
            'isi'   => 'v_tugas_dan_fungsi',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }
    
    
    public function pegawai()
	{
        $data = array (
            'title' => 'Pegawai',
            'pegawai' => $this->m_home->pegawai(),
            'isi'   => 'v_pegawai',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function detail_berita($slug_berita)
	{
        $data = array (
            'title' => 'Detail Berita',
            'berita' => $this->m_home->detail_berita($slug_berita),
            'berita_terbaru'    => $this->m_home->berita_terbaru(),
            'isi'   => 'v_detail_berita',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function detail_layanan($slug_layanan)
	{
        $data = array (
            'title' => 'Detail Layanan',
            'layanan' => $this->m_home->detail_layanan($slug_layanan),
            'isi'   => 'v_detail_layanan',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }
    

    public function berita()
	{
        $this->load->library('pagination');
        $config['base_url'] = base_url('home/berita');
        $config['total_rows'] = count($this->m_home->total_berita());
        $config['per_page'] = 8;
        $config['uri_segmen'] = 3;

        $limit= $config['per_page'];
        $start= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;

        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class="pagination_container d-flex flex-row align-items-center justify-content-start text-center"> <ul class="pagination_list">';
        $config['num_tag-open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"> <a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['full_tag_close'] = '</ul></div>';
        //-------- 

        $this->pagination->initialize($config);

        $data = array (
            'paginasi'          => $this->pagination->create_links(),
            'berita_terbaru'    => $this->m_home->berita_terbaru(),
            'berita_home'       => $this->m_home->berita_home(),
            'title'             => 'Berita',
            'berita'            => $this->m_home->berita($limit,$start),
            'isi'               => 'v_berita'
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function layanan()
	{
        

        $data = array (
            
            
            'title'             => 'Layanan',
            'informasi'            => $this->m_home->layanan(),
            'isi'               => 'v_edukpas'
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function galleri()
	{
        $data = array (
            'title' => 'Gallery',
            'galleri' => $this->m_home->galleri(),
            'isi'   => 'v_galleri',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function detail_galleri($id_gallery)
	{
        $data = array (
            'title' => 'Detail Galleri',
            'nama_galleri' => $this->m_home->nama_galleri($id_gallery),
            'detail_galleri' => $this->m_home->detail_galleri($id_gallery),
            'isi'   => 'v_detail_galleri',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }
    

    //-------------------WBS
    public function wbs()
	{
        $data = array (
            'title' => 'WBS',
            
            'isi'   => 'v_wbs',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }

    
    public function wbs_add()
	{
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        
        

        if($this->form_validation->run() == FALSE){
            $data = array (
                'title' => 'WBS',
                'isi'   => 'v_wbs',
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }
        else{


        $data = array(
         'nama' => $this ->input->post('nama'),
         'email' => $this ->input->post('email'),
         'laporan_wbs' => $this ->input->post('laporan_wbs'),
         'tanggal' => date('Y-m-d')
        );

    $this->m_home->wbs_add($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Dikirim !!!');
    redirect('home/edukpas');
        }
    }

    //--------------UPG
    public function upg()
	{
        $data = array (
            'title' => 'WBS',
            
            'isi'   => 'v_upg',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }

    
    public function upg_add()
	{
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        
        

        if($this->form_validation->run() == FALSE){
            $data = array (
                'title' => 'UPG',
                'isi'   => 'v_upg',
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }
        else{


        $data = array(
         'nama' => $this ->input->post('nama'),
         'email' => $this ->input->post('email'),
         'laporan_gratifikasi' => $this ->input->post('laporan_gratifikasi'),
         'tanggal' => date('Y-m-d')
        );

    $this->m_home->upg_add($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Dikirim !!!');
    redirect('home/edukpas');
        }
    }

    // Kotak Pengaduan
    public function pengaduan()
	{
        $data = array (
            'title' => 'WBS',
            
            'isi'   => 'v_pengaduan',
        );
		$this->load->view('layout/v_wrapper', $data, FALSE);
    }

    
    public function pengaduan_add()
	{
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        
        

        if($this->form_validation->run() == FALSE){
            $data = array (
                'title' => 'Kotak Pengaduan',
                'isi'   => 'v_pengaduan',
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }
        else{


        $data = array(
         'nama' => $this ->input->post('nama'),
         'email' => $this ->input->post('email'),
         'desk_pengaduan' => $this ->input->post('desk_pengaduan'),
         'tanggal' => date('Y-m-d')
        );

    $this->m_home->pengaduan_add($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Dikirim !!!');
    redirect('home/edukpas');
        }
    }

} 