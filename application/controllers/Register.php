<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_Member');
	}

	public function index()
	{
		if( $_SERVER['REQUEST_METHOD'] == 'POST') {
			$nama= $this->input->post('nama');
			$email= $this->input->post('email');
			$no_hp= $this->input->post('no_hp');
			$jenis_kelamin= $this->input->post('jenis_kelamin');
			$tgl_lahir= $this->input->post('tgl_lahir');
			$this->form_validation->set_rules('nama', 'Nama lengkap', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('no_hp', 'No. Handphone', 'required');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
			if(!$this->form_validation->run()) {
				$this->session->set_flashdata('msg_alert', validation_errors());
				redirect( base_url('register/') );
			}
			$this->M_Member->add_new(
				$nama,$email,$no_hp,$jenis_kelamin,$tgl_lahir
			);
			redirect( base_url('register/') );
		}
		$this->load->view('V_Register');
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */