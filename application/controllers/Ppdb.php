<?php
class Ppdb extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_ppdb');
    }
    public function index()
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $data['siswa'] = $this->M_ppdb->getAllData();
        $this->load->view('admin/template/header');
        $this->load->view('admin/ppdb/index', $data);
        $this->load->view('admin/template/footer');
    }
}
