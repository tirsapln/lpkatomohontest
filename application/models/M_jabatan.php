<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jabatan extends CI_Model {

	
	public function lists()
	{
        $this->db->select('*');
        $this->db->from('tb_jabatan');
        $this->db->order_by('id_jabatan', 'asc');
        return $this->db->get()->result();
    }
    
    public function add($data)
    {
        $this->db->insert('tb_jabatan', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_jabatan', $data['id_jabatan']);
        $this->db->update('tb_jabatan', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_jabatan', $data['id_jabatan']);
        $this->db->delete('tb_jabatan', $data);
    }
}