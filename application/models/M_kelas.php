<?php
class M_kelas extends CI_Model
{
    public function getAllData()
    {
        return $this->db->get('kelas')->result_array();
    }
    public function getById($id)
    {
        return $this->db->get_where('kelas', ['id_kelas' => $id])->row_array();
    }
    public function insert($data)
    {
        $this->db->insert('kelas', $data);
    }
    public function update($data, $id)
    {
        $this->db->where('id_kelas', $id);
        $this->db->update('kelas', $data);
    }
    public function delete($id)
    {
        $this->db->where('id_kelas', $id);
        $this->db->delete('kelas');
    }
}
