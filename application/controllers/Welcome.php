<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model("M_TipeKamar");
		$this->load->model("M_Fasilitashotel");
		$this->load->model("M_Reservasi");
	}

	public function index()
	{
		$data = array(
			'data_reservasi' => $this->M_Reservasi->data_reservasi()->result_array(),
			'data_tipe_kamar' => $this->M_TipeKamar->data_tipekamar()->result_array(),
			'data_fasilitashotel' => $this->M_Fasilitashotel->data_fasilitashotel()->result_array(),
		);
		$this->load->view('layanan', $data);
	}
}