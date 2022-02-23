<?php
class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_galeri');
    }
    public function index()
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $data['galeri'] = $this->M_galeri->getAllGaleri();
        $this->load->view('admin/template/header');
        $this->load->view('admin/galeri/index', $data);
        $this->load->view('admin/template/footer');
    }
    public function tambah()
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $this->load->view('admin/template/header');
        $this->load->view('admin/galeri/tambah');
        $this->load->view('admin/template/footer');
    }
    public function create()
    {
        // print_r($_FILES['image']);
        // die();
        if (!empty($_FILES['image']['name'])) {
            // 10000000 = 10 MB
            // if ($_FILES['image']['size'] > 1) {
            //     $this->session->set_flashdata('flash', 'File size lebih dari 10 mb');
            //     redirect('galeri/');
            // }
            $image = $this->_do_upload();
            $data['image'] = $image;
        }
        $this->M_galeri->insert($data);
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('galeri/');
    }

    public function edit($id)
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $data['galeri'] = $this->M_galeri->getById($id);
        $this->load->view('admin/template/header');
        $this->load->view('admin/galeri/edit', $data);
        $this->load->view('admin/template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');

        if (!empty($_FILES["image"]["name"])) {
            $image = $this->_do_upload();
            $data['image'] = $image;
        } else {
            $image = $this->input->post('old_image');
            $data['image'] = $image;
        }
        $this->M_galeri->update($data, $id);
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('galeri/');
    }

    private function _do_upload()
    {
        $image_name = rand(1, 1000) . '-' . $_FILES["image"]['name'];

        $config['upload_path']         = 'assets/img/galery/';
        $config['allowed_types']     = 'gif|jpg|png';
        $config['max_size']         = 5000;
        $config['max_width']            = 2048;
        $config['max_height']           = 1152;
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
            redirect('galeri/');
        }
        return $this->upload->data('file_name');
    }

    public function hapus($id)
    {
        $upload = $this->M_galeri->getById($id);
        if (file_exists('assets/img/galery/' . $upload['image']) && $upload['image']) {
            unlink('assets/img/galery/' . $upload['image']);
        }

        $this->M_galeri->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('galeri/');
    }
}
