<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model 
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tb_pegawai');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_pegawai.id_jabatan', 'left');
        $this->db->join('tb_golongan', 'tb_golongan.id_golongan = tb_pegawai.id_golongan', 'left');
        $this->db->order_by('id_pegawai ', 'asc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tb_pegawai', $data);
    }

    public function detail($id_pegawai)
    {
        $this->db->select('*');
        $this->db->from('tb_pegawai');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_pegawai.id_jabatan', 'left');
        $this->db->join('tb_golongan', 'tb_golongan.id_golongan = tb_pegawai.id_golongan', 'left');
        $this->db->where('id_pegawai', $id_pegawai);
        return $this->db->get()->row();

    }
    
    public function edit($data)
    {
        $this->db->where('id_pegawai', $data['id_pegawai']);
        $this->db->update('tb_pegawai', $data);

    }

    public function delete($data)
    {
        $this->db->where('id_pegawai', $data['id_pegawai']);
        $this->db->delete('tb_pegawai', $data);

    }

}