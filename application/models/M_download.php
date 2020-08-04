<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_download extends CI_Model {

	
	public function lists()
	{
        $this->db->select('*');
        $this->db->from('tb_file');
        $this->db->order_by('id_file', 'desc');
        return $this->db->get()->result();
    }
    
    public function add($data)
    {
        $this->db->insert('tb_file', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_file', $data['id_file']);
        $this->db->update('tb_file', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_file', $data['id_file']);
        $this->db->delete('tb_file', $data);
    }

    public function detail($id_file)
    {
        $this->db->select('*');
        $this->db->from('tb_file');
        $this->db->where('id_file', $id_file);
        return $this->db->get()->row();

    }
    
}