<?php
class Pelajaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pelajaran');
    }
    public function index()
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $data['pelajaran'] = $this->M_pelajaran->getAllData();
        $this->load->view('admin/template/header');
        $this->load->view('admin/pelajaran/index', $data);
        $this->load->view('admin/template/footer');
    }
    public function tambah()
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $this->load->view('admin/template/header');
        $this->load->view('admin/pelajaran/tambah');
        $this->load->view('admin/template/footer');
    }
    public function create()
    {
        $this->form_validation->set_rules('nama_pelajaran', 'Nama Pelajaran', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/pelajaran/tambah');
        } else {
            $data = array(
                'nama_pelajaran' => $this->input->post('nama_pelajaran'),
            );
            $this->M_pelajaran->insert($data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('pelajaran/');
        }
    }
    public function edit($id)
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $data['pelajaran'] = $this->M_pelajaran->getById($id);
        $this->load->view('admin/template/header');
        $this->load->view('admin/pelajaran/edit', $data);
        $this->load->view('admin/template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $data = array(
            'nama_pelajaran' => $this->input->post('nama_pelajaran'),
        );
        $this->M_pelajaran->update($data, $id);
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('pelajaran/');
    }
    public function hapus($id)
    {
        $this->M_pelajaran->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pelajaran/');
    }
}
