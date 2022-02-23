<?php 
class M_ppdb extends CI_Model{
    public function getAllData()
    {
        return $this->db->get('pendaftaran')->result_array();
    }
}
