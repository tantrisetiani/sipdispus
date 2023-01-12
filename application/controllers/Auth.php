<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Auth', 'auth');
	}

	public function index()
	{

		if ($this->session->userdata('level') == 'Admin') {
			redirect('admin');
		} elseif ($this->session->userdata('level') == 'Penilai') {
			redirect('penilai');
		} elseif ($this->session->userdata('level') == 'Instansi') {
			redirect('instansi');
		} else {
			$data = array(
				'title' => 'Form Login',
			);
			$this->load->view('login', $data);
		}
	}

	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->auth->cek_users($username, $password);

		if ($cek->num_rows() == 1) {
			foreach ($cek->result() as $data) {
				$users = array(
					'level' => $data->level,
					'id_u' => $data->id_u,
					'id_opd' => $data->id_opd,
					'nama_user' => $data->nama_user,
					'username' => $data->username,
					'foto_profil' => $data->foto_profil,
				);

				$this->session->set_userdata($users);

				if ($this->session->userdata('level') == 'Admin') {
					redirect('admin/dashboard');
				} elseif ($this->session->userdata('level') == 'Penilai') {
					redirect('penilai/dashboard');
				} elseif ($this->session->userdata('level') == 'Instansi') {
					redirect('instansi/dashboard');
				} else {
					echo 'tidak masuk kategori';
				}
			}
		} else {
			$this->session->set_flashdata('error', 'Username atau Password salah');
			redirect(base_url('auth'));
		}
	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */