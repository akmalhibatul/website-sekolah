<?php
class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_setting');
    }

    public function index($id)
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Have to login first!</div>');
            redirect('auth/');
        }
        $data['setting'] = $this->M_setting->getByid($id);
        $this->load->view('admin/template/header');
        $this->load->view('admin/setting/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $about = $this->input->post('about');

        $data = array(
            'about' => $about,
            'visi' => $this->input->post('visi'),
            'misi' => $this->input->post('misi'),
            'sambutan_kepsek' => $this->input->post('sambutan_kepsek'),
            'waktu_pendaftaran' => $this->input->post('waktu_pendaftaran'),
            'persyaratan' => $this->input->post('persyaratan')
        );

        // if (!empty($_FILES["image"]["name"])) {
        //     $image = $this->_do_upload($_FILES['logo'], "logo");
        //     $data['logo'] = $image;
        // } else if (!empty($_FILES["image"]["name"])) {
        //     $image = $this->_do_upload($_FILES['slide1'], "slide1");
        //     $data['slide1'] = $image;
        // } else if (!empty($_FILES["image"]["name"])) {
        //     $image = $this->_do_upload($_FILES['slide2'], "slide2");
        //     $data['slide2'] = $image;
        // } else if (!empty($_FILES["image"]["name"])) {
        //     $image = $this->_do_upload($_FILES['slide3'], "slide3");
        //     $data['slide3'] = $image;
        // } else if (!empty($_FILES["image"]["name"])) {
        //     $image = $this->_do_upload($_FILES['image_about'], "image_about");
        //     $data['image_about'] = $image;
        // } else {
        //     $image = $this->input->post('old_logo');
        //     $data['logo'] = $image;
        //     $image = $this->input->post('old_slide1');
        //     $data['slide1'] = $image;
        //     $image = $this->input->post('old_slide2');
        //     $data['slide2'] = $image;
        //     $image = $this->input->post('old_slide3');
        //     $data['slide3'] = $image;
        //     $image = $this->input->post('old_image_about');
        //     $data['image_about'] = $image;
        // }

        if (!empty($_FILES["logo"]["name"])) {
            $image = $this->_do_upload($_FILES['logo'], "logo", 1);
            $data['logo'] = $image;
        } else {
            $image = $this->input->post('old_logo', "logo", 1);
            $data['logo'] = $image;
        }

        if (!empty($_FILES["logo_panjang"]["name"])) {
            $image = $this->_do_upload($_FILES['logo_panjang'], "logo_panjang", 2);
            $data['logo_panjang'] = $image;
        } else {
            $image = $this->input->post('old_logo_panjang', "logo_panjang", 2);
            $data['logo_panjang'] = $image;
        }

        if (!empty($_FILES["slide1"]["name"])) {
            $image = $this->_do_upload($_FILES['slide1'], "slide1", 3);
            $data['slide1'] = $image;
        } else {
            $image = $this->input->post('old_slide1', "slide1", 3);
            $data['slide1'] = $image;
        }

        if (!empty($_FILES["slide2"]["name"])) {
            $image = $this->_do_upload($_FILES['slide2'], "slide2", 4);
            $data['slide2'] = $image;
        } else {
            $image = $this->input->post('old_slide2', "slide2", 4);
            $data['slide2'] = $image;
        }

        if (!empty($_FILES["slide3"]["name"])) {
            $image = $this->_do_upload($_FILES['slide3'], "slide3", 5);
            $data['slide3'] = $image;
        } else {
            $image = $this->input->post('old_slide3', "slide3", 5);
            $data['slide3'] = $image;
        }

        if (!empty($_FILES["image_about"]["name"])) {
            $image = $this->_do_upload($_FILES['image_about'], "image_about", 6);
            $data['image_about'] = $image;
        } else {
            $image = $this->input->post('old_image_about', "image_about", 6);
            $data['image_about'] = $image;
        }

        $this->M_setting->update($id, $data);
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('setting/index/1');
    }

    // List Mode
    // 1 = logo
    // 2 = logo_panjang
    // 3 = slide1
    // 4 = slide2
    // 5 = slide3
    // 6 = image_about
    private function _do_upload($fotoNya, $namaField, $mode = 0)
    {
        $image_name = rand(1, 1000) . '-' . $fotoNya['name'];

        $config['upload_path']         = 'assets/img/';
        $config['allowed_types']     = 'gif|jpg|png';
        switch ($mode) {
            case 1:
                $max_size = 300;
                $max_width = 67;
                $max_height = 76;
                break;
            case 2:
                $max_size = 300;
                $max_width = 270;
                $max_height = 80;
                break;
            case 3:
                $max_size = 300;
                $max_width = 1140;
                $max_height = 440;
                break;
            case 4:
                $max_size = 300;
                $max_width = 1140;
                $max_height = 440;
                break;
            case 5:
                $max_size = 300;
                $max_width = 1140;
                $max_height = 440;
                break;
            case 6:
                $max_size = 300;
                $max_width = 800;
                $max_height = 800;
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
            redirect('setting/index/1');
        }
        return $this->upload->data('file_name');
    }
}
