<?php
class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_guru');
    }
    public function index()
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $data['guru'] = $this->M_guru->getAllGuru();
        $this->load->view('admin/template/header');
        $this->load->view('admin/guru/index', $data);
        $this->load->view('admin/template/footer');
    }
    public function tambah()
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $data['pelajaran'] = $this->M_guru->getAllPelajaran();
        $data['jenis_kelamin'] = ['laki-laki', 'perempuan'];
        $data['kelas'] = $this->M_guru->getAllKelas();
        $this->load->view('admin/template/header');
        $this->load->view('admin/guru/tambah', $data);
        $this->load->view('admin/template/footer');
    }
    public function create()
    {
        $this->form_validation->set_rules('nip', 'nip Guru', 'required|numeric');
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');
        $this->form_validation->set_rules('alamat_guru', 'Alamat', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'required');
        $this->form_validation->set_rules('pelajaran', 'Pelajaran', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['pelajaran'] = $this->M_guru->getAllPelajaran();
            $data['jenis_kelamin'] = ['laki-laki', 'perempuan'];
            $data['kelas'] = $this->M_guru->getAllKelas();
            $this->load->view('admin/template/header');
            $this->load->view('admin/guru/tambah', $data);
            $this->load->view('admin/template/footer');
        } else {
            $data = array(
                'nip' => $this->input->post('nip'),
                'nama_guru' => $this->input->post('nama_guru'),
                'alamat_guru' => $this->input->post('alamat_guru'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'kelas' => $this->input->post('kelas'),
                'pelajaran' => $this->input->post('pelajaran'),
            );

            if (!empty($_FILES['image']['name'])) {
                $image = $this->_do_upload($_FILES['image'], "image");
                $data['image'] = $image;
            }

            $this->M_guru->insert($data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('guru/');
        }
    }

    public function edit($id)
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $data['guru'] = $this->M_guru->getById($id);
        $data['pelajaran'] = $this->M_guru->getAllPelajaran();
        $data['jenis_kelamin'] = ['laki-laki', 'perempuan'];
        $data['kelas'] = $this->M_guru->getAllKelas();
        $this->load->view('admin/template/header');
        $this->load->view('admin/guru/edit', $data);
        $this->load->view('admin/template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = array(
            'nip' => $this->input->post('nip'),
            'nama_guru' => $this->input->post('nama_guru'),
            'alamat_guru' => $this->input->post('alamat_guru'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'pelajaran' => $this->input->post('pelajaran'),
            'kelas' => $this->input->post('kelas'),
        );

        if (!empty($_FILES["image"]["name"])) {
            $image = $this->_do_upload($_FILES['image'], "image");
            $data['image'] = $image;
        } else {
            $image = $this->input->post('old_image');
            $data['image'] = $image;
        }
        $this->M_guru->update($data, $id);
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('guru/');
    }

    private function _do_upload($fotoNya, $namaField)
    {
        $image_name = rand(1, 1000) . '-' . $fotoNya['name'];

        $config['upload_path']         = 'assets/img/guru/';
        $config['allowed_types']     = 'gif|jpg|png';
        $config['max_size']         = 5000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;
        $config['file_name']         = $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($namaField)) {
            if (strpos($this->upload->display_errors('', ''), "larger than the permitted") !== false) {
                $this->session->set_flashdata('error', "Ukuran melebihi 5mb");
            } else if (strpos($this->upload->display_errors('', ''), "doesn't fit into the allowed dimensions") !== false) {
                $this->session->set_flashdata('error', "Ukuran width dan height melebihi batas yang di tentukan");
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
            }
            redirect('guru_produktif/');
        }
        return $this->upload->data('file_name');
    }

    public function hapus($id)
    {
        $upload = $this->M_guru->getById($id);
        if (file_exists('assets/img/guru/' . $upload['image']) && $upload['image']) {
            unlink('assets/img/guru/' . $upload['image']);
        }

        $this->M_guru->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('guru/');
    }
}
