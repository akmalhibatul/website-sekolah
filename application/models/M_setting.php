<?php
class M_setting extends CI_Model
{
    public function getByid($id)
    {
        return $this->db->get_where('setting', ['id' => $id])->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('setting', $data);
    }
}
