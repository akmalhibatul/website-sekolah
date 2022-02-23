<?php
class M_galeri extends CI_Model
{
    public function getAllGaleri()
    {
        return $this->db->get('galeri')->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('galeri', ['id' => $id])->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('galeri', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('galeri');
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('galeri', $data);
    }
}
