<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_Admin');
	}

	public function data_member() {
		$this->load->view('V_Admin_DataMember');
	}

	public function data_anggota() {
		$this->load->view('V_Admin_DataAnggota');
	}

	public function verif_member($id) {
		$this->M_Admin->doVerifMember($id);
		redirect( base_url('admin/data_member') );
	}

	public function data_member_ajax() {
		json_dump(function() {
			$result=$this->M_Admin->member_list_all();
			return array('data' => $result);
		});
	}

	public function data_anggota_ajax() {
		json_dump(function() {
			$result=$this->M_Admin->anggota_list_all();
			return array('data' => $result);
		});
	}

	public function login() {
		is_login(function() {
			redirect( base_url() );
		});
		if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
			$email= $this->input->post('email');
			$password= $this->input->post('password');
			// validasi
			$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if(!$this->form_validation->run()) {
				$this->session->set_flashdata('msg_alert', validation_errors());
				redirect( base_url('admin/login') );
			}
			// lakukan login
			$this->M_Admin->doLogin($email, $password);
		} else {
			$this->load->view('V_Admin_Login');
		}
	}

	public function register() {
		is_login(function() {
			redirect( base_url() );
		});
		if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
			$nama= $this->input->post('nama');
			$email= $this->input->post('email');
			$password= $this->input->post('password');
			// validasi
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if(!$this->form_validation->run()) {
				$this->session->set_flashdata('msg_alert', validation_errors());
				redirect( base_url('admin/register') );
			}
			// lakukan daftar
			$this->M_Admin->doRegister($nama, $email, $password);
			redirect( base_url('admin/register') );
		} else {
			$this->load->view('V_Admin_Register');
		}
	}

	public function logout() {
		isnt_login(function() {
			redirect( base_url('admin/login') );
		});
		$this->session->sess_destroy();
		redirect( base_url() );
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */