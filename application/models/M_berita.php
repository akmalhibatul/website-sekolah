<?php
class M_berita extends CI_Model
{
    public function getAllBerita()
    {
        return $this->db->get('berita')->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('berita', ['id' => $id])->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('berita', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('berita');
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('berita', $data);
    }
}
