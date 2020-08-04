<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_golongan extends CI_Model {

	
	public function lists()
	{
        $this->db->select('*');
        $this->db->from('tb_golongan');
        $this->db->order_by('id_golongan', 'asc');
        return $this->db->get()->result();
    }
    
    public function add($data)
    {
        $this->db->insert('tb_golongan', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_golongan', $data['id_golongan']);
        $this->db->update('tb_golongan', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_golongan', $data['id_golongan']);
        $this->db->delete('tb_golongan', $data);
    }
}