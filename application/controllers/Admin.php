<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('broth');

	}
	public function index()
	{
		$this->load->view('Login');
	}

	public function login(){
	$username= $this->input->post('username');
	$password = $this->input->post('password');
	$this->form_validation->set_rules('username','Username','trim|required');
	$this->form_validation->set_rules('password','Password','trim|required');

	if($this->form_validation->run() != false){
	  $where = array(
	    'username' => $username,
	    'password' => md5($password)
	  );
	  $data = $this->broth->edit_data('admin',$where);
	  $d = $this->broth->edit_data('admin',$where)->row();
	  $cek = $data->num_rows();
	  if($cek > 0){
	    $session = array(
	      'id_admin'=> $d->id_admin,
	      'status' => 'login',
	    );
	    $this->session->set_userdata($session);
	    redirect(base_url().'Admin/tabel');
	}
	else{
	  redirect(base_url().'Admin?pesan=gagal');
	}

	}  else{
	  $this->load->view('Login');
	}

	}
	public function tabel()
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url().'Admin?pesan=belumlogin');
		}
		$data['data']= $this->broth->data_barang();
		$this->load->view('Tabel',$data);
	}
	public function form()
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url().'Admin?pesan=belumlogin');
		}
		$this->load->view('Form');
	}
	public function tambah()
	{
		$nota= $this->input->post("nota");
		$d = $this->broth->edit_data('barang',array('nota' => $nota ));
    $cek = $d->num_rows();
		if ($cek > 0) {
      redirect(base_url().'Admin/form?pesan=sudahada');
    }
		else {
			$this->broth->tambah($nota);
		redirect(base_url().'Admin/form?pesan=berhasil');
		}
	}
	public function ubah_status(){
			$nota= $this->input->post("nota");
			$this->broth->ubah_status($nota);
		redirect(base_url().'Admin/tabel');
	}
	public function logout(){
	  $this->session->sess_destroy();
	  redirect(base_url().'Admin?pesan=logout');
	}


}
