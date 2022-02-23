<?php
class M_jurusan extends CI_Model
{
    public function getAllJurusan()
    {
        return $this->db->get('jurusan')->result_array();
    }

    public function getByid($id)
    {
        return $this->db->get_where('jurusan', ['id' => $id])->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('jurusan', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jurusan');
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('jurusan', $data);
    }
}
