<?php
class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kelas');
    }
    public function index()
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $data['kelas'] = $this->M_kelas->getAllData();
        $this->load->view('admin/template/header');
        $this->load->view('admin/kelas/index', $data);
        $this->load->view('admin/template/footer');
    }
    public function tambah()
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $this->load->view('admin/template/header');
        $this->load->view('admin/kelas/tambah');
        $this->load->view('admin/template/footer');
    }
    public function create()
    {
        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/kelas/tambah');
        } else {
            $data = array(
                'nama_kelas' => $this->input->post('nama_kelas'),
            );
            $this->M_kelas->insert($data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('kelas/');
        }
    }
    public function edit($id)
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $data['kelas'] = $this->M_kelas->getById($id);
        $this->load->view('admin/template/header');
        $this->load->view('admin/kelas/edit', $data);
        $this->load->view('admin/template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id_kelas');
        $data = array(
            'nama_kelas' => $this->input->post('nama_kelas'),
        );

        $this->M_kelas->update($data, $id);
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('kelas/');
    }
    public function hapus($id)
    {
        $this->M_kelas->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kelas/');
    }
}
