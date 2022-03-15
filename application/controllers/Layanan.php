<?php

class Layanan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_TipeKamar');
    }

    public function index()
    {
        $data = array('data_tipe_kamar' => $this->M_TipeKamar->data_tipekamar()->result_array());

        $this->load->view('layanan', $data);
    }
}