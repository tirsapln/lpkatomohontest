<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengaturan extends CI_Model 
{
    

   

    public function detail()
    {
        $this->db->select('*');
        $this->db->from('tb_kalapas');
        $this->db->where('id_kalapas', 1);
        return $this->db->get()->row();

    }

    public function detail_profil()
    {
        $this->db->select('*');
        $this->db->from('tb_profil');
        $this->db->where('id_profil', 1);
        return $this->db->get()->row();

    }
    
    public function edit_kalapas($data)
    {
        $this->db->where('id_kalapas', $data['id_kalapas']);
        $this->db->update('tb_kalapas', $data);

    }
    public function edit_profil($data)
    {
        $this->db->where('id_profil', $data['id_profil']);
        $this->db->update('tb_profil', $data);

    }
    
}
