<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pegawai');
        $this->load->model('m_jabatan');
        $this->load->model('m_golongan');
    }

    
	public function index()
	{
        $data = array (
            'title' => 'LPKA Tomohon',
            'title2' => 'Data Pegawai',
            'pegawai' => $this->m_pegawai->lists(),
            'isi'   => 'admin/pegawai/v_list',
        );
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('id_jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('id_golongan', 'Golongan', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('pendidikan_akhir', 'Pendidikan Akhir', 'required');
        //$this->form_validation->set_rules('foto_pegawai', 'Foto Pegawai', 'required');

        if($this->form_validation->run() == TRUE)
        {
            $config['upload_path'] = './foto_pegawai/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = 8000;
            $this->upload->initialize($config);
                if(!$this->upload->do_upload('foto_pegawai'))
                {
                    
                    $data = array (
                        'title'     => 'LPKA Tomohon',
                        'title2'    => 'Tambah Data Pegawai',
                        'error'     => $this->upload->display_errors(),
                        'jabatan'   => $this->m_jabatan->lists(),
                        'golongan'  => $this->m_golongan->lists(),
                        'isi'       => 'admin/pegawai/v_add'
                    );
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']   = 'gd2';
                    $config['source_image']    = './foto_pegawai/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array (
                        'nama_pegawai'              => $this->input->post('nama_pegawai'),
                        'nip'                       => $this->input->post('nip'),
                        'id_jabatan'                => $this->input->post('id_jabatan'),
                        'id_golongan'               => $this->input->post('id_golongan'),
                        'tempat_lahir'              => $this->input->post('tempat_lahir'),
                        'tanggal_lahir'             => $this->input->post('tanggal_lahir'),
                        'pendidikan_akhir'          => $this->input->post('pendidikan_akhir'),
                        'foto_pegawai'              => $upload_data['uploads']['file_name']

                    );

                    $this->m_pegawai->add($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambahkan !!');
                    redirect('pegawai');
                }
        }

        $data = array (
            'title' => 'LPKA Tomohon',
            'title2' => 'Tambah Data Pegawai',
            'jabatan' => $this->m_jabatan->lists(),
            'golongan' => $this->m_golongan->lists(), 
            'isi'   => 'admin/pegawai/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);

    }

    public function edit($id_pegawai)
    {
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('id_jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('id_golongan', 'Golongan', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('pendidikan_akhir', 'Pendidikan Akhir', 'required');
        //$this->form_validation->set_rules('foto_pegawai', 'Foto Pegawai', 'required');

        if($this->form_validation->run() == TRUE)
        {
            $config['upload_path'] = './foto_pegawai/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = 8000;
            $this->upload->initialize($config);
                if(!$this->upload->do_upload('foto_pegawai'))
                {
                    
                    $data = array (
                        'title'     => 'LPKA Tomohon',
                        'title2'    => 'Edit Data Pegawai',
                        'error'     => $this->upload->display_errors(),
                        'pegawai'   =>$this->m_pegawai->detail($id_pegawai),
                        'jabatan'   => $this->m_jabatan->lists(),
                        'golongan'  => $this->m_golongan->lists(),
                        'isi'       => 'admin/pegawai/v_edit'
                    );
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']   = 'gd2';
                    $config['source_image']    = './foto_pegawai/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    // menghapus foto lama
                    $pegawai= $this->m_pegawai->detail($id_pegawai);
                    if ($pegawai->foto_pegawai != "")
                    {
                        unlink('./foto_pegawai/'.$pegawai->foto_pegawai);
                    }
                    // end hapus foto

                    $data = array (
                        'id_pegawai'                =>$id_pegawai,
                        'nama_pegawai'              => $this->input->post('nama_pegawai'),
                        'nip'                       => $this->input->post('nip'),
                        'id_jabatan'                => $this->input->post('id_jabatan'),
                        'id_golongan'               => $this->input->post('id_golongan'),
                        'tempat_lahir'              => $this->input->post('tempat_lahir'),
                        'tanggal_lahir'             => $this->input->post('tanggal_lahir'),
                        'pendidikan_akhir'          => $this->input->post('pendidikan_akhir'),
                        'foto_pegawai'              => $upload_data['uploads']['file_name']

                    );

                    $this->m_pegawai->edit($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
                    redirect('pegawai');
                }
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']   = 'gd2';
                $config['source_image']    = './foto_pegawai/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array (
                    'id_pegawai'                =>$id_pegawai,
                    'nama_pegawai'              => $this->input->post('nama_pegawai'),
                    'nip'                       => $this->input->post('nip'),
                    'id_jabatan'                => $this->input->post('id_jabatan'),
                    'id_golongan'               => $this->input->post('id_golongan'),
                    'tempat_lahir'              => $this->input->post('tempat_lahir'),
                    'tanggal_lahir'             => $this->input->post('tanggal_lahir'),
                    'pendidikan_akhir'          => $this->input->post('pendidikan_akhir'),
                    
                );

                $this->m_pegawai->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit !!');
                redirect('pegawai');
        }
        $data = array (
            'title' => 'LPKA Tomohon',
            'title2' => 'Edit Data Pegawai',
            'pegawai' =>$this->m_pegawai->detail($id_pegawai),
            'jabatan' => $this->m_jabatan->lists(),
            'golongan' => $this->m_golongan->lists(), 
            'isi'   => 'admin/pegawai/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_pegawai)
    {
        // menghapus foto lama
        $pegawai= $this->m_pegawai->detail($id_pegawai);
        if ($pegawai->foto_pegawai != "")
        {
            unlink('./foto_pegawai/'.$pegawai->foto_pegawai);
        }
        // end hapus foto

        $data = array ('id_pegawai' => $id_pegawai);
        $this->m_pegawai->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !!');
        redirect('pegawai');

         
    }
}

