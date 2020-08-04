<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumuman extends CI_Model 
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tb_pengumuman');
        $this->db->order_by('id_pengumuman ', 'desc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tb_pengumuman', $data);
    }

    public function detail($id_pengumuman)
    {
        $this->db->select('*');
        $this->db->from('tb_pengumuman');
        $this->db->where('id_pengumuman', $id_pengumuman);
        return $this->db->get()->row();

    }
    
    public function edit($data)
    {
        $this->db->where('id_pengumuman', $data['id_pengumuman']);
        $this->db->update('tb_pengumuman', $data);

    }

    public function delete($data)
    {
        $this->db->where('id_pengumuman', $data['id_pengumuman']);
        $this->db->delete('tb_pengumuman', $data);

    }

}