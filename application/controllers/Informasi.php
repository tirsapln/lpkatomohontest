<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_informasi');
        
    }

    
	public function index()
	{
        $data = array (
            'title' => 'LPKA Kelas II Tomohon',
            'title2' => 'Layanan Informasi Pemasyarakatan',
            'informasi' => $this->m_informasi->lists(),
            'isi'   => 'admin/informasi/v_list',
        );
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_layanan', 'Nama Layanan', 'required');
        

        if($this->form_validation->run() == TRUE)
        {
            $config['upload_path'] = './foto_informasi/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = 8000;
            $this->upload->initialize($config);
                if(!$this->upload->do_upload('foto_layanan'))
                {
                    
                    $data = array (
                        'title'     => 'LPKA Kelas II Tomohon',
                        'title2'    => 'Laynan Informasi Pemasyarakatan',
                        'error'     => $this->upload->display_errors(),
                        'isi'       => 'admin/informasi/v_add'
                    ); 
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']   = 'gd2';
                    $config['source_image']    = './foto_informasi/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array (
                        'nama_layanan'              => $this->input->post('nama_layanan'),
                        'desk_layanan'              => $this->input->post('desk_layanan'),
                        
                    'slug_layanan' => url_title($this->input->post('nama_layanan'),'dash', TRUE),
                        'foto_layanan'               => $upload_data['uploads']['file_name']

                    );

                    $this->m_informasi->add($data);
                    $this->session->set_flashdata('pesan', 'Informasi Berhasil Di Posting !!');
                    redirect('informasi');
                }
        }

        $data = array (
            'title' => 'LPKA Kelas II Tomohon',
            'title2' => 'Layanan Informasi Pemasyarakatan',
            
            'isi'   => 'admin/informasi/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);

    }

    public function edit($id_layanan)
    {
        $this->form_validation->set_rules('nama_layanan', 'Nama Layanan', 'required');
       

        if($this->form_validation->run() == TRUE)
        {
            $config['upload_path'] = './foto_informasi/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = 8000;
            $this->upload->initialize($config);
                if(!$this->upload->do_upload('foto_layanan'))
                {
                    
                    $data = array (
                        'title'     => 'LPKA Kelas II Tomohon',
                        'title2'    => 'Edit Informasi',
                        'error'     => $this->upload->display_errors(),
                        'informasi'    => $this->m_informasi->detail($id_layanan),
                        'isi'       => 'admin/informasi/v_edit'
                    ); 
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']   = 'gd2';
                    $config['source_image']    = './foto_informasi/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    // menghapus foto lama
                        $informasi= $this->m_informasi->detail($id_informasi);
                        if ($informasi->foto_layanan != "")
                        {
                            unlink('./foto_informasi/'.$informasi->foto_layanan);
                        }
                    // end hapus foto

                    $data = array (
                        'id_layanan'                 => $id_layanan,
                        'nama_layanan'              => $this->input->post('nama_layanan'),
                        'desk_layanan'                => $this->input->post('desk_layanan'),
                        
                    'slug_layanan' => url_title($this->input->post('nama_layanan'),'dash', TRUE),
                        'foto_layanan'               => $upload_data['uploads']['file_name'],
                        

                    );

                    $this->m_informasi->edit($data);
                    $this->session->set_flashdata('pesan', 'Informasi Berhasil Di Edit !!');
                    redirect('informasi');
                }

                //edit tanpa gambar

                $data = array (
                    'id_layanan'                 => $id_layanan,
                    'nama_layanan'              => $this->input->post('nama_layanan'),
                    'desk_layanan'                => $this->input->post('desk_layanan'),
                    'slug_layanan' => url_title($this->input->post('nama_layanan'),'dash', TRUE),
                );

                $this->m_informasi->edit($data);
                $this->session->set_flashdata('pesan', 'Informasi Berhasil Di Edit !!');
                redirect('informasi');
        }

        $data = array (
            'title' => 'LPKA Kelas II Tomohon',
            'title2' => 'Edit Informasi',
            'informasi'    => $this->m_informasi->detail($id_layanan),
            
            'isi'   => 'admin/informasi/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);

    }

    public function delete($id_layanan)
    {
        // menghapus foto lama
        $informasi= $this->m_informasi->detail($id_layanan);
        if ($informasi->foto_layanan != "")
        {
            unlink('./foto_informasi/'.$informasi->foto_layanan);
        }
        // end hapus foto

        $data = array ('id_layanan' => $id_layanan);
        $this->m_informasi->delete($data);
        $this->session->set_flashdata('pesan', 'Informasi Berhasil Di Hapus !!');
        redirect('informasi');

         
    }

}