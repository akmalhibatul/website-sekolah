<?php
class M_page extends CI_Model
{
    public function getAllsetting()
    {
        return $this->db->get('setting')->row_array();
    }
    public function getAllGuru()
    {
        return $this->db->get('guru')->result_array();
    }
    public function getAllBerita($limit, $start)
    {
        // $this->db->from('berita');
        // $this->db->order_by('id', 'DESC');
        // $query = $this->db->get($limit, $start);
        // return $query->result_array();
        $this->db->from('berita');
        $this->db->order_by('id', 'DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result_array();
        // return $this->db->get('berita', $limit, $start)->result_array();
    }
    public function beritaIndex()
    {
        $this->db->from('berita');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getAllGaleri($limit, $start)
    {
        $this->db->from('galeri');
        $this->db->order_by('id', 'DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getArtikel($id)
    {
        return $this->db->get_where('berita', ['id' => $id])->row_array();
    }
    public function getJurusan($id)
    {
        return $this->db->get_where('jurusan', ['id' => $id])->row_array();
    }
    public function getCount()
    {
        return $this->db->get('berita')->num_rows();
    }
    public function getCountgaleri()
    {
        return $this->db->get('galeri')->num_rows();
    }
    public function daftar($data)
    {
        $this->db->insert('pendaftaran', $data);
    }
}
