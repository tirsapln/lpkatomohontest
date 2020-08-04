<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_informasi extends CI_Model 
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tb_layananinfo');
       
        $this->db->order_by('id_layanan ', 'desc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tb_layananinfo', $data);
    }

    public function detail($id_layanan)
    {
        $this->db->select('*');
        $this->db->from('tb_layananinfo');
        $this->db->where('id_layanan', $id_layanan);
        return $this->db->get()->row();

    }
    
    public function edit($data)
    {
        $this->db->where('id_layanan', $data['id_layanan']);
        $this->db->update('tb_layananinfo', $data);

    }

    public function delete($data)
    {
        $this->db->where('id_layanan', $data['id_layanan']);
        $this->db->delete('tb_layananinfo', $data);

    }
}
