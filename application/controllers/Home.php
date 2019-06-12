<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('broth');

	}
	public function index()
	{
		$this->load->view('Home');
	}
	public function cek()
	{
		$nota= $this->input->post("nota");
		$d = $this->broth->edit_data('barang',array('nota' => $nota ));
    $cek = $d->num_rows();
		if ($cek == 0) {
      redirect(base_url().'Home?pesan=salah');
    }
		else {
			$data = $this->broth->cek_data($nota)->row_array();
			if ($data['status'] == 0) {
				redirect(base_url().'Home?pesan=belum');
			}
			else {
				redirect(base_url().'Home?pesan=sudah');
			}
		}
	}
}
