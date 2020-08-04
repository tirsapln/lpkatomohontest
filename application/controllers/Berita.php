<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_berita');
        
    }

    
	public function index()
	{
        $data = array (
            'title' => 'LPKA Kelas II Tomohon',
            'title2' => 'Data Berita',
            'berita' => $this->m_berita->lists(),
            'isi'   => 'admin/berita/v_list',
        );
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required', array('required'=>'%s Harus Diisi'));
        

        if($this->form_validation->run() == TRUE)
        {
            $config['upload_path'] = './foto_berita/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = 8000;
            $this->upload->initialize($config);
                if(!$this->upload->do_upload('foto_berita'))
                {
                    
                    $data = array (
                        'title'     => 'LPKA Kelas II Tomohon',
                        'title2'    => 'Tambah Berita',
                        'error'     => $this->upload->display_errors(),
                        'isi'       => 'admin/berita/v_add'
                    ); 
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']   = 'gd2';
                    $config['source_image']    = './foto_berita/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array (
                        'judul_berita'              => $this->input->post('judul_berita'),
                        'slug_berita'               => url_title($this->input->post('judul_berita'),'dash', TRUE),
                        'isi_berita'                => $this->input->post('isi_berita'),
                        'tanggal_berita'            => date('Y-m-d'),
                        'id_user'                   => $this->session->userdata('id_user'),
                        'foto_berita'               => $upload_data['uploads']['file_name']

                    );

                    $this->m_berita->add($data);
                    $this->session->set_flashdata('pesan', 'Berita Berhasil Di Posting !!');
                    redirect('berita');
                }
        }

        $data = array (
            'title' => 'LPKA Kelas II Tomohon',
            'title2' => 'Tambah Berita',
            'jabatan' => $this->m_jabatan->lists(),
            'golongan' => $this->m_golongan->lists(), 
            'isi'   => 'admin/berita/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);

    }

    public function edit($id_berita)
    {
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required', array('required'=>'%s Harus Diisi'));
        

        if($this->form_validation->run() == TRUE)
        {
            $config['upload_path'] = './foto_berita/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = 8000;
            $this->upload->initialize($config);
                if(!$this->upload->do_upload('foto_berita'))
                {
                    
                    $data = array (
                        'title'     => 'LPKA Kelas II Tomohon',
                        'title2'    => 'Edit Berita',
                        'error'     => $this->upload->display_errors(),
                        'berita'    => $this->m_berita->detail($id_berita),
                        'isi'       => 'admin/berita/v_edit'
                    ); 
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']   = 'gd2';
                    $config['source_image']    = './foto_berita/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    // menghapus foto lama
                        $berita= $this->m_berita->detail($id_berita);
                        if ($berita->foto_berita != "")
                        {
                            unlink('./foto_berita/'.$berita->foto_berita);
                        }
                    // end hapus foto

                    $data = array (
                        'id_berita'                 => $id_berita,
                        'judul_berita'              => $this->input->post('judul_berita'),
                        'slug_berita'               => url_title($this->input->post('judul_berita'),'dash', TRUE),
                        'isi_berita'                => $this->input->post('isi_berita'),
                        'tanggal_berita'            => date('Y-m-d'),
                        'id_user'                   => $this->session->userdata('id_user'),
                        'foto_berita'               => $upload_data['uploads']['file_name']

                    );

                    $this->m_berita->edit($data);
                    $this->session->set_flashdata('pesan', 'Berita Berhasil Di Edit !!');
                    redirect('berita');
                }

                //edit tanpa gambar

                $data = array (
                    'id_berita'                 => $id_berita,
                    'judul_berita'              => $this->input->post('judul_berita'),
                    'slug_berita'               => url_title($this->input->post('judul_berita'),'dash', TRUE),
                    'isi_berita'                => $this->input->post('isi_berita'),
                    'tanggal_berita'            => date('Y-m-d'),-
                    'id_user'                   => $this->session->userdata('id_user'),

                );

                $this->m_berita->edit($data);
                $this->session->set_flashdata('pesan', 'Berita Berhasil Di Edit !!');
                redirect('berita');
        }

        $data = array (
            'title' => 'LPKA Kelas II Tomohon',
            'title2' => 'Edit Berita',
            'berita'    => $this->m_berita->detail($id_berita),
            
            'isi'   => 'admin/berita/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);

    }

    public function delete($id_berita)
    {
        // menghapus foto lama
        $berita= $this->m_berita->detail($id_berita);
        if ($berita->foto_berita != "")
        {
            unlink('./foto_berita/'.$berita->foto_berita);
        }
        // end hapus foto

        $data = array ('id_berita' => $id_berita);
        $this->m_berita->delete($data);
        $this->session->set_flashdata('pesan', 'Berita Berhasil Di Hapus !!');
        redirect('berita');

         
    }

}