<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

	private function loginAdmin($email, $password) {
		$q=$this->db->select('*')->where(array('email' => $email, 'password' => md5($password)))->get('admin');
		return $q;
	}

	private function getDataMember($id) {
		$q=$this->db->select('*')->where('id', $id)->get('member');
		return $q;
	}

	public function doLogin($email,$password) {
		$cek_login_admin = $this->loginAdmin($email, $password);
		if( $cek_login_admin->num_rows() ) {
			$d = $cek_login_admin->row();
			if($d->password!==md5($password)) {
				$this->session->set_flashdata('msg_alert', 'Password anda salah');
				redirect( base_url('admin/login') );
			} else {
				$this->session->set_userdata('is_logged_in', 'login');
				$this->session->set_userdata('user_id', $d->id);
				$this->session->set_userdata('user_name', $d->nama);
				redirect( base_url('admin/data_member') );
			}
		} else {
			$this->session->set_flashdata('msg_alert', 'Email anda tidak ditemukan');
			redirect( base_url('admin/login') );
		}
	}

	public function doRegister($nama,$email,$password) {
		$d_t_d = array(
			'nama' => $nama,
			'email' => $email,
			'password' => md5($password),
		);
		$this->db->insert('admin', $d_t_d);
		$this->session->set_flashdata('msg_success', 'Pendaftaran admin berhasil! Silahkan login admin');
	}

	public function doVerifMember($id) {
		$data_member = $this->getDataMember($id)->row();
		$d_t_d = array(
			'nama' => $data_member->nama,
			'email' => $data_member->email,
			'no_hp' => intval($data_member->no_hp),
			'jenis_kelamin' => $data_member->jenis_kelamin,
			'tgl_lahir' => $data_member->tgl_lahir
		);
		$this->db->insert('anggota', $d_t_d);
		$this->db->delete('member', array('id' => $id));
		$this->session->set_flashdata('msg_success', 'Member berhasil diverifikasi menjadi anggota');
	}


	public function member_list_all() {
		$q=$this->db->select('*')->get('member');
		return $q->result();
	}


	public function anggota_list_all() {
		$q=$this->db->select('*')->get('anggota');
		return $q->result();
	}

}

/* End of file M_Admin.php */
/* Location: ./application/models/M_Admin.php */