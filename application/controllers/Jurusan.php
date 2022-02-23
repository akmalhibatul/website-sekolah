<?php
class Jurusan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_jurusan');
    }

    public function index()
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $data['jurusan'] = $this->M_jurusan->getAllJurusan();
        $this->load->view('admin/template/header');
        $this->load->view('admin/jurusan/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah()
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $this->load->view('admin/template/header');
        $this->load->view('admin/jurusan/tambah');
        $this->load->view('admin/template/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('nama_jurusan', 'Nama', 'required');
        $this->form_validation->set_rules('ket', 'keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/jurusan/tambah');
            $this->load->view('admin/template/footer');
        } else {
            $data = array(
                'nama_jurusan' => $this->input->post('nama_jurusan'),
                'ket' => $this->input->post('ket'),
            );

            if (!empty($_FILES["image"]["name"])) {
                $image = $this->_do_upload($_FILES['image'], "image", 4);
                $data['image'] = $image;
            }
            if (!empty($_FILES["image_detail"]["name"])) {
                $image_detail = $this->_do_upload($_FILES['image_detail'], "image_detail", 4);
                $data['image_detail'] = $image_detail;
            }
            $this->M_jurusan->insert($data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('jurusan/');
        }
    }

    public function edit($id)
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $data['jurusan'] = $this->M_jurusan->getById($id);
        $this->load->view('admin/template/header');
        $this->load->view('admin/jurusan/edit', $data);
        $this->load->view('admin/template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama_jurusan');

        $data = array(
            'nama_jurusan' => $nama,
            'ket' => $this->input->post('ket')
        );

        if (!empty($_FILES["image"]["name"])) {
            $image = $this->_do_upload($_FILES['image'], "image");
            $data['image'] = $image;
        } else {
            $image = $this->input->post('old_image');
            $data['image'] = $image;
        }

        if (!empty($_FILES["image_detail"]["name"])) {
            $image = $this->_do_upload($_FILES['image_detail'], "image_detail", 4);
            $data['image_detail'] = $image;
        } else {
            $image = $this->input->post('old_image_detail', "image_detail", 4);
            $data['image_detail'] = $image;
        }

        $this->M_jurusan->update($data, $id);
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('jurusan/');
    }

    private function _do_upload($fotoNya, $namaField, $mode = 0)
    {
        $image_name = rand(1, 1000) . '-' . $fotoNya['name'];
        //The filetype you are attempting to upload is not allowed..
        $config['upload_path']         = 'assets/img/jurusan/';
        $config['allowed_types']     = 'gif|jpg|png';
        switch ($mode) {
            case 1:
                $max_size = 1000;
                $max_width = 500;
                $max_height = 500;
                break;
            case 2:
                $max_size = 1000;
                $max_width = 500;
                $max_height = 500;
                break;
            default:
                $max_size = 5000;
                $max_width = 2048;
                $max_height = 1152;
        }
        $config['max_size']         = $max_size;
        $config['max_width']            = $max_width;
        $config['max_height']           = $max_height;

        $config['file_name']         = $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($namaField)) {
            if (strpos($this->upload->display_errors('', ''), "larger than the permitted") !== false) {
                $this->session->set_flashdata('error', "Ukuran melebihi Size yang ditentukan");
            } else if (strpos($this->upload->display_errors('', ''), "doesn't fit into the allowed dimensions") !== false) {
                $this->session->set_flashdata('error', "Ukuran width dan height melebihi batas yang di tentukan");
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
            }
            redirect('jurusan/');
        }
        return $this->upload->data('file_name');
    }

    public function hapus($id)
    {
        $upload = $this->M_jurusan->getById($id);
        if (file_exists('assets/img/jurusan/' . $upload['image']) && $upload['image']) {
            unlink('assets/img/jurusan/' . $upload['image']);
        }

        $this->M_jurusan->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('jurusan/');
    }
}
