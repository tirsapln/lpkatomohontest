<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_slider extends CI_Model 
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tb_slider');
        $this->db->order_by('id_slider ', 'desc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tb_slider', $data);
    }

    public function detail($id_slider)
    {
        $this->db->select('*');
        $this->db->from('tb_slider');
        $this->db->where('id_slider', $id_slider);
        return $this->db->get()->row();

    }
    
    

    public function delete($data)
    {
        $this->db->where('id_slider', $data['id_slider']);
        $this->db->delete('tb_slider', $data);

    }
}
