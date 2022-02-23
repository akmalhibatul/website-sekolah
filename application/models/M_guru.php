<?php
class M_guru extends CI_Model
{
    public function getAllGuru()
    {
        return $this->db->get('guru')->result_array();
    }
    public function getAllPelajaran()
    {
        return $this->db->get('pelajaran')->result_array();
    }

    public function getAllKelas()
    {
        return $this->db->get('kelas')->result_array();
    }

    public function getByid($id)
    {
        return $this->db->get_where('guru', ['id' => $id])->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('guru', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('guru');
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('guru', $data);
    }
}
