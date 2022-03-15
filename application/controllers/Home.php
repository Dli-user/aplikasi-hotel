<?php

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("M_Fasilitashotel");
    }

    public function index()
    {
        $data = array(
            'data_fasilitashotel' => $this->M_Fasilitashotel->data_fasilitashotel()->result_array(),
        );
        $this->load->view('home', $data);
    }
}