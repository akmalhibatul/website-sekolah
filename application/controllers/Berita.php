<?php
class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_berita');
    }

    public function index()
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $data['berita'] = $this->M_berita->getAllBerita();
        $this->load->view('admin/template/header');
        $this->load->view('admin/berita/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah()
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $this->load->view('admin/template/header');
        $this->load->view('admin/berita/tambah');
        $this->load->view('admin/template/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/berita/tambah');
        } else {
            $data = array(
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
            );

            if (!empty($_FILES['image']['name'])) {
                $image = $this->_do_upload();
                $data['image'] = $image;
            }

            $this->M_berita->insert($data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('berita/');
        }
    }

    public function edit($id)
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $data['berita'] = $this->M_berita->getById($id);
        $this->load->view('admin/template/header');
        $this->load->view('admin/berita/edit', $data);
        $this->load->view('admin/template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');

        $data = array(
            'judul' => $judul,
            'isi' => $this->input->post('isi')
        );

        if (!empty($_FILES["image"]["name"])) {
            $image = $this->_do_upload();
            $data['image'] = $image;
        } else {
            $image = $this->input->post('old_image');
            $data['image'] = $image;
        }
        $this->M_berita->update($data, $id);
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('berita/');
    }

    private function _do_upload()
    {
        $image_name = rand(1, 1000) . '-' . $_FILES["image"]['name'];

        $config['upload_path']         = 'assets/img/berita/';
        $config['allowed_types']     = 'gif|jpg|png';
        $config['max_size']         = 5000;
        $config['file_name']         = $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            if (strpos($this->upload->display_errors('', ''), "larger than the permitted") !== false) {
                $this->session->set_flashdata('error', "Ukuran melebihi 5mb");
            } else if (strpos($this->upload->display_errors('', ''), "doesn't fit into the allowed dimensions") !== false) {
                $this->session->set_flashdata('error', "Ukuran width dan height melebihi batas yang di tentukan");
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
            }
            redirect('berita/');
        }
        return $this->upload->data('file_name');
    }

    public function hapus($id)
    {
        $upload = $this->M_berita->getById($id);
        if (file_exists('assets/img/berita/' . $upload['image']) && $upload['image']) {
            unlink('assets/img/berita/' . $upload['image']);
        }

        $this->M_berita->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('berita/');
    }
}
