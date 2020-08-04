<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model 
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_user', 'tb_user.id_user = tb_berita.id_user', 'left');
        $this->db->order_by('id_berita ', 'desc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tb_berita', $data);
    }

    public function detail($id_berita)
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->where('id_berita', $id_berita);
        return $this->db->get()->row();

    }
    
    public function edit($data)
    {
        $this->db->where('id_berita', $data['id_berita']);
        $this->db->update('tb_berita', $data);

    }

    public function delete($data)
    {
        $this->db->where('id_berita', $data['id_berita']);
        $this->db->delete('tb_berita', $data);

    }
}
