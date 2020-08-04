<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengaduan extends CI_Model 
{
    public function list_wbs()
    {
        $this->db->select('*');
        $this->db->from('tb_wbs');
        $this->db->order_by('id_wbs ', 'desc');
        return $this->db->get()->result();
    }

   

   

    public function delete_wbs($data)
    {
        $this->db->where('id_wbs', $data['id_wbs']);
        $this->db->delete('tb_wbs', $data);

    }

    public function list_upg()
    {
        $this->db->select('*');
        $this->db->from('tb_gratifikasi');
        $this->db->order_by('id_gratifikasi ', 'desc');
        return $this->db->get()->result();
    }

   

   

    public function delete_upg($data)
    {
        $this->db->where('id_gratifikasi', $data['id_gratifikasi']);
        $this->db->delete('tb_gratifikasi', $data);

    }

    public function list_kotakpengaduan()
    {
        $this->db->select('*');
        $this->db->from('tb_pengaduan');
        $this->db->order_by('id_pengaduan ', 'desc');
        return $this->db->get()->result();
    }

   

   

    public function delete_kotakpengaduan($data)
    {
        $this->db->where('id_pengaduan', $data['id_pengaduan']);
        $this->db->delete('tb_pengaduan', $data);

    }

}