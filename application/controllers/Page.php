<?php
class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_page');
    }

    public function index()
    {
        $data['setting'] = $this->M_page->getAllsetting();
        $data['berita'] = $this->M_page->beritaIndex();
        $this->load->view('template/header', $data);
        $this->load->view('index', $data);
        $this->load->view('template/footer', $data);
    }

    public function guru()
    {
        $data['setting'] = $this->M_page->getAllsetting();
        $data['guru'] = $this->M_page->getAllGuru();
        $this->load->view('template/header', $data);
        $this->load->view('guru', $data);
        $this->load->view('template/footer', $data);
    }

    public function visi_misi()
    {
        $data['setting'] = $this->M_page->getAllsetting();
        $this->load->view('template/header', $data);
        $this->load->view('visi_misi', $data);
        $this->load->view('template/footer', $data);
    }

    public function kepala_sekolah()
    {
        $data['setting'] = $this->M_page->getAllsetting();
        $this->load->view('template/header', $data);
        $this->load->view('kepala_sekolah', $data);
        $this->load->view('template/footer', $data);
    }

    public function galeri()
    {
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/project_1/page/galeri';
        $config['total_rows'] = $this->M_page->getCountgaleri();
        $config['per_page'] = 3;

        $config['full_tag_open'] = '<nav> <ul class="pagination justify-content-center mt-3">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';


        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';


        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';


        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $data['setting'] = $this->M_page->getAllsetting();
        $data['start'] = $this->uri->segment(3);
        $data['galeri'] = $this->M_page->getAllGaleri($config['per_page'], $data['start']);
        $this->load->view('template/header', $data);
        $this->load->view('galeri', $data);
        $this->load->view('template/footer', $data);
    }

    public function pengumuman()
    {
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/project_1/page/pengumuman';
        $config['total_rows'] = $this->M_page->getCount();
        $config['per_page'] = 3;

        $config['full_tag_open'] = '<nav> <ul class="pagination justify-content-center mt-3">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';


        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';


        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';


        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);


        $data['setting'] = $this->M_page->getAllsetting();
        $data['start'] = $this->uri->segment(3);
        $data['berita'] = $this->M_page->getAllBerita($config['per_page'], $data['start']);
        $this->load->view('template/header', $data);
        $this->load->view('pengumuman', $data);
        $this->load->view('template/footer', $data);
    }

    public function ppdb()
    {
        $data['setting'] = $this->M_page->getAllsetting();
        $this->load->view('template/header', $data);
        $this->load->view('ppdb', $data);
        $this->load->view('template/footer', $data);
    }
    public function pendaftaran()
    {
        $data['setting'] = $this->M_page->getAllsetting();
        $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
        $this->load->view('template/header', $data);
        $this->load->view('pendaftaran', $data);
        $this->load->view('template/footer', $data);
    }

    public function daftar()
    {
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required|trim');
        $this->form_validation->set_rules('nisn', 'NISN', 'required|numeric|trim');
        $this->form_validation->set_rules('tempat_tanggal_lahir', 'Tempat Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('no_telp', 'Nomer Telp', 'required|trim');
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required|trim');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required|trim');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required|trim');
        $this->form_validation->set_rules('no_telp_ortu', 'Nomer Telp Orang tua/Wali', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['setting'] = $this->M_page->getAllsetting();
            $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
            $this->load->view('template/header', $data);
            $this->load->view('pendaftaran', $data);
            $this->load->view('template/footer', $data);
        } else {
            $data = array(
                'nama_siswa' => htmlspecialchars($this->input->post('nama_siswa', true)),
                'nisn' => htmlspecialchars($this->input->post('nisn', true)),
                'tempat_tanggal_lahir' => htmlspecialchars($this->input->post('tempat_tanggal_lahir', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
                'asal_sekolah' => htmlspecialchars($this->input->post('asal_sekolah', true)),
                'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu', true)),
                'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah', true)),
                'no_telp_ortu' => htmlspecialchars($this->input->post('no_telp_ortu', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            );
            $this->M_page->daftar($data);
            redirect('page/berhasil');
        }
    }

    public function kontak()
    {
        $data['setting'] = $this->M_page->getAllsetting();
        $this->load->view('template/header', $data);
        $this->load->view('kontak', $data);
        $this->load->view('template/footer', $data);
    }
    public function artikel($id)
    {
        $data['setting'] = $this->M_page->getAllsetting();
        $data['artikel'] = $this->M_page->getArtikel($id);
        $this->load->view('template/header', $data);
        $this->load->view('artikel', $data);
        $this->load->view('template/footer', $data);
    }
    public function berhasil()
    {
        $data['setting'] = $this->M_page->getAllsetting();
        $this->load->view('template/header', $data);
        $this->load->view('berhasil', $data);
        $this->load->view('template/footer', $data);
    }
    public function blocked()
    {
        $data['setting'] = $this->M_page->getAllsetting();
        $this->load->view('404', $data);
    }
    public function detail_jurusan($id)
    {
        $data['setting'] = $this->M_page->getAllsetting();
        $data['jurusan'] = $this->M_page->getJurusan($id);
        $this->load->view('template/header', $data);
        $this->load->view('detail_jurusan', $data);
        $this->load->view('template/footer', $data);
    }
}
