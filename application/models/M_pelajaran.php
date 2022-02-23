<?php
class M_pelajaran extends CI_Model
{
    public function getAllData()
    {
        return $this->db->get('pelajaran')->result_array();
    }
    public function getById($id)
    {
        return $this->db->get_where('pelajaran', ['id_pelajaran' => $id])->row_array();
    }
    public function insert($data)
    {
        $this->db->insert('pelajaran', $data);
    }
    public function update($data, $id)
    {
        $this->db->where('id_pelajaran', $id);
        $this->db->update('pelajaran', $data);
    }
    public function delete($id)
    {
        $this->db->where('id_pelajaran', $id);
        $this->db->delete('pelajaran');
    }
}
