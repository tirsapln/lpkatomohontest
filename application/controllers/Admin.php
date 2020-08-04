<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengaturan');
        $this->load->model('m_home');
        
    }
	
	public function index()
	{
        $data = array (
            'title' => 'LPKA Kelas II Tomohon',
            'title2' => '',
            'pengaturan'    => $this->m_pengaturan->detail(),
            'isi'   => 'admin/v_dashboard',
        );
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    

   

    public function kalapas()
    {
        $this->form_validation->set_rules('nama_kalapas', 'Nama Kalapas', 'required');
        

        if($this->form_validation->run() == TRUE)
        {
            $config['upload_path'] = './pengaturan/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = 8000;
            $this->upload->initialize($config);
                if(!$this->upload->do_upload('foto_kalapas'))
                {
                    
                    
                    $data = array (
                        'title' => 'LPKA Kelas II Tomohon',
                        'title2' => 'Kepala LPKA',
                        'error'     => $this->upload->display_errors(),
                        'pengaturan'    => $this->m_pengaturan->detail(),
                        'isi'   => 'admin/v_kalapas',
                    );
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']   = 'gd2';
                    $config['source_image']    = './pengaturan/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    // menghapus foto lama
                        $pengaturan= $this->m_pengaturan->detail($id_kalapas);
                        if ($pengaturan->foto_kalapas != "")
                        {
                            unlink('./pengaturan/'.$pengaturan->foto_kalapas);
                        }
                    // end hapus foto

                    $data = array (
                        'id_kalapas'                 => 1,
                        'nama_kalapas'              => $this->input->post('nama_kalapas'),
                        'nip_kalapas'               => $this->input->post('nip_kalapas'),
                        'pangkat'                   => $this->input->post('pangkat'),
                        'ttl_kalapas'               => $this->input->post('ttl_kalapas'),
                        'agama'                => $this->input->post('agama'),
                        'pendidikan'                => $this->input->post('pendidikan'),
                        'riwayat_pekerjaan'                   => $this->input->post('riwayat_pekerjaan'),
                        'foto_kalapas'               => $upload_data['uploads']['file_name']

                    );

                    $this->m_pengaturan->edit_kalapas($data);
                    $this->session->set_flashdata('pesan', 'Berhasil Di Edit !!');
                    redirect('admin/kalapas');
                }

                //edit tanpa gambar

                $data = array (
                    'id_kalapas'                 => 1,
                    'nama_kalapas'              => $this->input->post('nama_kalapas'),
                    'nip_kalapas'               => $this->input->post('nip_kalapas'),
                    'pangkat'                   => $this->input->post('pangkat'),
                    'ttl_kalapas'               => $this->input->post('ttl_kalapas'),
                    'agama'                     => $this->input->post('agama'),
                    'pendidikan'                => $this->input->post('pendidikan'),
                    'riwayat_pekerjaan'         => $this->input->post('riwayat_pekerjaan'),
                    

                );

                $this->m_pengaturan->edit_kalapas($data);
                $this->session->set_flashdata('pesan', 'Berhasil Di Edit !!');
                redirect('admin/kalapas');
        }

        $data = array (
            'title' => 'LPKA Kelas II Tomohon',
            'title2' => 'Kepala LPKA',
            'error'     => $this->upload->display_errors(),
            'pengaturan'    => $this->m_pengaturan->detail(),
            'isi'   => 'admin/v_kalapas',
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);

    }

    public function profil()
    {
        
        $this->form_validation->set_rules('sejarah_singkat', 'Sejarah Singkat', 'required');
        

        if($this->form_validation->run() == TRUE)
        {
            $config['upload_path'] = './pengaturan/struktur/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = 8000;
            $this->upload->initialize($config);
                if(!$this->upload->do_upload('struktur_organisasi'))
                {
                    
                    $data = array (
                        'title' => 'LPKA Kelas II Tomohon',
                        'title2' => 'Profil',
                        'error'     => $this->upload->display_errors(),
                        'profil'    => $this->m_pengaturan->detail_profil(),
                        'isi'   => 'admin/v_profil',
                    );
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']   = 'gd2';
                    $config['source_image']    = './pengaturan/struktur/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    // menghapus foto lama
                        $profil= $this->m_pengaturan->detail($id_kalapas);
                        if ($profil->struktur_organisasi != "")
                        {
                            unlink('./pengaturan/struktur/'.$profil->struktur_organisasi);
                        }
                    // end hapus foto

                    $data = array (
                        'id_profil'                 => 1,
                        'sejarah_singkat'              => $this->input->post('sejarah_singkat'),
                        'tugas_lpka'               => $this->input->post('tugas_lpka'),
                        'fungsi_lpka'                   => $this->input->post('fungsi_lpka'),
                        'visi'               => $this->input->post('visi'),
                        'misi'                => $this->input->post('misi'),
                        
                        'struktur_organisasi'               => $upload_data['uploads']['file_name']

                    );

                    $this->m_pengaturan->edit_profil($data);
                    $this->session->set_flashdata('pesan', 'Berhasil Di Edit !!');
                    redirect('admin/profil');
                }

                //edit tanpa gambar

                $data = array (
                    'id_profil'                 => 1,
                        'sejarah_singkat'              => $this->input->post('sejarah_singkat'),
                        'tugas_lpka'               => $this->input->post('tugas_lpka'),
                        'fungsi_lpka'                   => $this->input->post('fungsi_lpka'),
                        'visi'               => $this->input->post('visi'),
                        'misi'                => $this->input->post('misi'),
                        
                        

                );

                $this->m_pengaturan->edit_profil($data);
                $this->session->set_flashdata('pesan', 'Berhasil Di Edit !!');
                redirect('admin/profil');
        }

        $data = array (
            'title' => 'LPKA Kelas II Tomohon',
            'title2' => 'Profil',
            'profil'    => $this->m_pengaturan->detail_profil(),
            'isi'   => 'admin/v_profil',
        );
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);

    }
    
    

} 