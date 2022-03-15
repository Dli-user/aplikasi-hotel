<?php
class Reservasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Reservasi');
    }

    public function index()
    {
        if ($this->session->userdata('login') != TRUE) {
            redirect('login');
        }

        $data['title'] = "Data Reservasi ";
        $data['reservasi'] = $this->M_Reservasi->data_reservasi();
        $this->template->load_admin('index', 'reservasi', $data);
    }

    public function tambah()
    {
        if ($this->session->userdata('login') != TRUE) {
            redirect('login');
        }
        $data['title'] = "Data Reservasi";
        $data['subtitle'] = "Tambah Data Reservasi ";
        $this->template->load_admin('index', 'reservasi_tambah', $data);
    }

    public function ubah()
    {
        if ($this->session->userdata('login') != TRUE) {
            redirect('login');
        }

        $data['title'] = "Data Reservasi";
        $data['subtitle'] = "Edit Data Reservasi";

        $id = $this->uri->segment(3);
        $data['reservasi'] = $this->M_Reservasi->data_reservasi_by_id($id);
        $this->template->load_admin('index', 'reservasi_ubah', $data);
    }

    public function simpan()
    {
        $this->M_Reservasi->simpan();
        redirect('datadiri');
    }

    public function update()
    {
        if ($this->session->userdata('login') != true) {
            redirect('login');
        }

        $this->M_Reservasi->update();
        redirect('reservasi');
    }

    public function hapus()
    {
        if ($this->session->userdata('login') != TRUE) {
            redirect('login');
        }

        $id = $this->uri->segment(3);
        $this->M_Reservasi->hapus_data_reservasi($id);
        redirect('reservasi');
    }
}