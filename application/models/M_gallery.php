<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gallery extends CI_Model {

	
	public function lists()
	{
        $this->db->select('tb_gallery.*,count(tb_foto.id_gallery) as jml_foto');
        $this->db->from('tb_gallery');
        $this->db->join('tb_foto','tb_foto.id_gallery = tb_gallery.id_gallery', 'left');
        $this->db->group_by('tb_gallery.id_gallery');
        $this->db->order_by('tb_gallery.id_gallery', 'desc');
        return $this->db->get()->result();
    }

    public function lists_foto($id_gallery)
	{
        $this->db->select('*');
        $this->db->from('tb_foto');
        $this->db->where('id_gallery', $id_gallery);
        $this->db->order_by('id_foto', 'desc');
        return $this->db->get()->result();
    }
    


    public function add($data)
    {
        $this->db->insert('tb_gallery', $data);
    }

    public function add_foto($data)
    {
        $this->db->insert('tb_foto', $data);
    }

    public function detail($id_gallery)
    {
        $this->db->select('*');
        $this->db->from('tb_gallery');
        $this->db->where('id_gallery', $id_gallery);
        return $this->db->get()->row();

    }

    public function detail_foto($id_foto)
    {
        $this->db->select('*');
        $this->db->from('tb_foto');
        $this->db->where('id_foto', $id_foto);
        return $this->db->get()->row();

    }
    
    public function edit($data)
    {
        $this->db->where('id_gallery', $data['id_gallery']);
        $this->db->update('tb_gallery', $data);

    }

    public function delete($data)
    {
        $this->db->where('id_gallery', $data['id_gallery']);
        $this->db->delete('tb_gallery', $data);
    }

    public function delete_foto($data)
    {
        $this->db->where('id_foto', $data['id_foto']);
        $this->db->delete('tb_foto', $data);
    }
   
}