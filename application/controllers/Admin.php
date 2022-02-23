<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        } else {
            $this->load->view('admin/template/header');
            $this->load->view('admin/index');
            $this->load->view('admin/template/footer');
        }
    }
}
