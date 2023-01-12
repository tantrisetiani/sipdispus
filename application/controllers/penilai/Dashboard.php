<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Opd', 'opd');
		$this->load->model('M_Penilaian', 'penilaian');
		$this->load->model('M_Subkomponen', 'subkomponen');
		$this->load->model('M_Komponen', 'komponen');
		$this->load->model('M_Opd', 'opd');
		$this->load->model('M_Users', 'users');
	}

	public function index()
	{
		if (!$this->session->userdata('level') == 'Penilai') {
			redirect('auth');
		} else {
			$data['title'] = 'Dashboard';
			$data['jumlah_opd'] = $this->opd->jumlah_opd();
			$data['jumlah_penilaian'] = $this->penilaian->jumlah_penilaian();
			$data['nilai'] = $this->penilaian->getAll();
			$data['activeTab'] = 'dashboard';
			$this->load->view('penilai/layout/header', $data);
			$this->load->view('penilai/layout/sidebar', $data);
			$this->load->view('penilai/index', $data);
			$this->load->view('penilai/layout/footer');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/penilai/Dashboard.php */