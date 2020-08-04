<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_gallery');
    }
	public function index()
	{
        $data = array (
            'title' => 'LPKA Kelas II Tomohon',
            'title2' => 'Gallery Foto',
            'gallery' => $this->m_gallery->lists(),
            'isi'   => 'admin/gallery/v_list',
        );
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_gallery', 'Nama Gallery', 'required');
        

        if($this->form_validation->run() == TRUE)
        {
            $config['upload_path'] = './sampul/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = 8000;
            $this->upload->initialize($config);
                if(!$this->upload->do_upload('sampul'))
                {
                    
                    $data = array (
                        'title'     => 'LPKA Kelas II Tomohon',
                        'title2'    => 'Tambah Gallery',
                        'error'     => $this->upload->display_errors(),
                        'isi'       => 'admin/gallery/v_add'
                    ); 
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']   = 'gd2';
                    $config['source_image']    = './sampul/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array (
                        'nama_gallery'              => $this->input->post('nama_gallery'),
                        
                        'sampul'               => $upload_data['uploads']['file_name']

                    );

                    $this->m_gallery->add($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan!!');
                    redirect('gallery');
                }
        }

        $data = array (
            'title' => 'LPKA Kelas II Tomohon',
            'title2' => 'Tambah Gallery',
            
            'isi'   => 'admin/gallery/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);

    }

    public function edit($id_gallery)
    {
        $this->form_validation->set_rules('nama_gallery', 'Nama Gallery', 'required');
        

        if($this->form_validation->run() == TRUE)
        {
            $config['upload_path'] = './sampul/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = 8000;
            $this->upload->initialize($config);
                if(!$this->upload->do_upload('sampul'))
                {
                    
                    $data = array (
                        'title'     => 'LPKA Kelas II Tomohon',
                        'title2'    => 'Edit Gallery',
                        'error'     => $this->upload->display_errors(),
                        'gallery'    => $this->m_gallery->detail($id_gallery),
                        'isi'       => 'admin/gallery/v_edit'
                    ); 
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']   = 'gd2';
                    $config['source_image']    = './sampul/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    // menghapus foto lama
                    $gallery= $this->m_gallery->detail($id_gallery);
                    if ($gallery->sampul != "")
                    {
                        unlink('./sampul/'.$gallery->sampul);
                    }
                // end hapus foto

                    $data = array (
                        'id_gallery'                 => $id_gallery,
                        'nama_gallery'              => $this->input->post('nama_gallery'),
                        
                        'sampul'               => $upload_data['uploads']['file_name']

                    );

                    $this->m_gallery->edit($data);
                    $this->session->set_flashdata('pesan', 'Gallery Berhasil Di Edit !!');
                    redirect('gallery');
                }

                //edit tanpa gambar

                $data = array (
                    'id_gallery'                 => $id_gallery,
                    'nama_gallery'              => $this->input->post('nama_gallery'),
                    

                );

                $this->m_gallery->edit($data);
                $this->session->set_flashdata('pesan', 'Gallery Berhasil Di Edit !!');
                redirect('Gallery');
        }

        $data = array (
            'title' => 'LPKA Kelas II Tomohon',
            'title2' => 'Edit Gallery',
            'gallery'    => $this->m_gallery->detail($id_gallery),
            
            'isi'   => 'admin/gallery/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);

    }

    public function delete($id_gallery)
    {
        // menghapus foto lama
        $gallery= $this->m_gallery->detail($id_gallery);
        if ($gallery->sampul != "")
        {
            unlink('./sampul/'.$gallery->sampul);
        }
        // end hapus foto

        $data = array ('id_gallery' => $id_gallery);
        $this->m_gallery->delete($data);
        $this->session->set_flashdata('pesan', 'Gallery Berhasil Di Hapus !!');
        redirect('gallery');

         
    }
    public function delete_foto($id_gallery,$id_foto)
    {
        // menghapus foto lama
        $foto= $this->m_gallery->detail_foto($id_foto);
        if ($foto->foto != "")
        {
            unlink('./foto/'.$foto->foto);
        }
        // end hapus foto

        $data = array ('id_foto' => $id_foto);
        $this->m_gallery->delete_foto($data);
        $this->session->set_flashdata('pesan', 'Foto Berhasil Di Hapus !!');
        redirect('gallery/add_foto/'.$id_gallery);

         
    }

    public function add_foto($id_gallery)
    {
        $this->form_validation->set_rules('ket_foto', 'Keterangan Foto', 'required');
        

        if($this->form_validation->run() == TRUE)
        {
            $config['upload_path'] = './foto/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = 8000;
            $this->upload->initialize($config);
                if(!$this->upload->do_upload('foto'))
                {
                    $gallery = $this->m_gallery->detail($id_gallery);
                    $data = array (
                        'title'     => 'LPKA Kelas II Tomohon',
                        'title2' => 'Tambah Foto Gallery : '.$gallery->nama_gallery,
                        'error'     => $this->upload->display_errors(),
                        'gallery'    => $gallery,
                        'foto' => $this->m_gallery->lists_foto($id_gallery),
                        'isi'       => 'admin/gallery/v_add_foto'
                    ); 
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']   = 'gd2';
                    $config['source_image']    = './foto/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    

                    $data = array (
                        'id_gallery'                 => $id_gallery,
                        'ket_foto'              => $this->input->post('ket_foto'),
                        
                        'foto'               => $upload_data['uploads']['file_name']

                    );

                    $this->m_gallery->add_foto($data);
                    $this->session->set_flashdata('pesan', 'Foto Berhasil Di Tambahkan !!');
                    redirect('gallery/add_foto/'.$id_gallery);
                }

                
        }
        $gallery = $this->m_gallery->detail($id_gallery);
        $data = array (
            'title' => 'LPKA Kelas II Tomohon',
            'title2' => 'Tambah Foto Gallery : '.$gallery->nama_gallery,
            'gallery'    => $gallery,
            'foto' => $this->m_gallery->lists_foto($id_gallery),
            'isi'   => 'admin/gallery/v_add_foto'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

}