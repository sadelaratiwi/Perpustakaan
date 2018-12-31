<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Member extends CI_Model {

	public function add_new($nama,$email,$no_hp,$jenis_kelamin,$tgl_lahir) {
		$d_t_d = array(
			'nama' => $nama,
			'email' => $email,
			'no_hp' => intval($no_hp),
			'jenis_kelamin' => $jenis_kelamin,
			'tgl_lahir' => $tgl_lahir
		);
		$this->db->insert('member', $d_t_d);
		$this->session->set_flashdata('msg_success', 'Pendaftaran berhasil! Admin akan melakukan verifikasi');
	}
	
}

/* End of file M_Member.php */
/* Location: ./application/models/M_Member.php */