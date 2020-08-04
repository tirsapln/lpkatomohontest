<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model 
{
    public function download()
    {
        $this->db->select('*');
        $this->db->from('tb_file');
        $this->db->order_by('id_file ', 'desc');
        return $this->db->get()->result();
    }

    public function profil()
    {
        $this->db->select('*');
        $this->db->from('tb_profil');
        $this->db->order_by('id_profil ', 'desc');
        return $this->db->get()->result();
    }
    public function kalapas()
    {
        $this->db->select('*');
        $this->db->from('tb_kalapas');
        $this->db->order_by('id_kalapas ', 'desc');
        return $this->db->get()->result();
    }


    public function pegawai()
    {
        $this->db->select('*');
        $this->db->from('tb_pegawai');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_pegawai.id_jabatan', 'left');
        $this->db->join('tb_golongan', 'tb_golongan.id_golongan = tb_pegawai.id_golongan', 'left');
        $this->db->order_by('id_pegawai', 'asc');
        return $this->db->get()->result();
    }

    public function layanan()
    {
        $this->db->select('*');
        $this->db->from('tb_layananinfo');
        $this->db->order_by('id_layanan', 'desc');
        return $this->db->get()->result();
    }

    //memunculkan berita dengan plugin
    public function berita($limit,$start)
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_user', 'tb_user.id_user = tb_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit($limit,$start);
        return $this->db->get()->result();
    }

    public function total_berita()
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_user', 'tb_user.id_user = tb_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        return $this->db->get()->result();
    }

    public function detail_berita($slug_berita)
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_user', 'tb_user.id_user = tb_berita.id_user', 'left');
        $this->db->where('slug_berita', $slug_berita);
        return $this->db->get()->row();
    }

    public function detail_layanan($slug_layanan)
    {
        $this->db->select('*');
        $this->db->from('tb_layananinfo');
        
        $this->db->where('slug_layanan', $slug_layanan);
        return $this->db->get()->row();
    }

    

    public function berita_terbaru()
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_user', 'tb_user.id_user = tb_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit(10);
        return $this->db->get()->result();
    }

    public function berita_home()
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_user', 'tb_user.id_user = tb_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit(3);
        return $this->db->get()->result();
    }



    public function galleri()
    {
        $this->db->select('tb_gallery.*,count(tb_foto.id_gallery) as jml_foto');
        $this->db->from('tb_gallery');
        $this->db->join('tb_foto','tb_foto.id_gallery = tb_gallery.id_gallery', 'left');
        $this->db->group_by('tb_gallery.id_gallery');
        $this->db->order_by('tb_gallery.id_gallery', 'desc');
        return $this->db->get()->result();
    }

    public function galleri_home()
    {
        $this->db->select('tb_gallery.*,count(tb_foto.id_gallery) as jml_foto');
        $this->db->from('tb_gallery');
        $this->db->join('tb_foto','tb_foto.id_gallery = tb_gallery.id_gallery', 'left');
        $this->db->group_by('tb_gallery.id_gallery');
        $this->db->order_by('tb_gallery.id_gallery', 'desc');
        return $this->db->get()->result();
    }

    public function detail_galleri($id_gallery)
    {
       
	
        $this->db->select('*');
        $this->db->from('tb_foto');
        $this->db->where('id_gallery', $id_gallery);
        $this->db->order_by('id_foto', 'desc');
        return $this->db->get()->result();
    
    }
    public function nama_galleri($id_gallery)
    {
       
        $this->db->select('*');
        $this->db->from('tb_gallery');
        $this->db->where('id_gallery', $id_gallery);
       
        return $this->db->get()->row();
    
    }

    public function slider()
    {
        $this->db->select('*');
        $this->db->from('tb_slider');
        $this->db->order_by('id_slider ', 'desc');
        
        
        return $this->db->get()->result();
    }

    //WBS

    public function wbs_add($data)
    {
        $this->db->insert('tb_wbs', $data);
    }

    //UPG
    public function upg_add($data)
    {
        $this->db->insert('tb_gratifikasi', $data);
    }

    //pengaduan
    public function pengaduan_add($data)
    {
        $this->db->insert('tb_pengaduan', $data);
    }

}