<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_slider');
        
    }

    
	public function index()
	{
        $data = array (
            'title' => 'LPKA Kelas II Tomohon',
            'title2' => 'Data Foto',
            'slider' => $this->m_slider->lists(),
            'isi'   => 'admin/slider/v_list',
        );
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_foto', 'Keterangan Foto', 'required');
        

        if($this->form_validation->run() == TRUE)
        {
            $config['upload_path'] = './pengaturan/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = 8000;
            $this->upload->initialize($config);
                if(!$this->upload->do_upload('foto_slider'))
                {
                    
                    $data = array (
                        'title'     => 'LPKA Kelas II Tomohon',
                        'title2'    => 'Tambah Slider Foto',
                        'error'     => $this->upload->display_errors(),
                        'isi'       => 'admin/slider/v_add'
                    ); 
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']   = 'gd2';
                    $config['source_image']    = './pengaturan/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array (
                        'nama_foto'              => $this->input->post('nama_foto'),
                        
                        'foto_slider'               => $upload_data['uploads']['file_name']

                    );

                    $this->m_slider->add($data);
                    $this->session->set_flashdata('pesan', 'Foto Berhasil Di Posting !!');
                    redirect('slider');
                }
        }

        $data = array (
            'title' => 'LPKA Kelas II Tomohon',
            'title2' => 'Tambah Slider',
            'isi'   => 'admin/slider/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);

    }

    

    public function delete($id_slider)
    {
        // menghapus foto lama
        $slider= $this->m_slider->detail($id_slider);
        if ($slider->foto_slider != "")
        {
            unlink('./pengaturan/'.$slider->foto_slider);
        }
        // end hapus foto

        $data = array ('id_slider' => $id_slider);
        $this->m_slider->delete($data);
        $this->session->set_flashdata('pesan', 'Berhasil Di Hapus !!');
        redirect('slider');

         
    }

}