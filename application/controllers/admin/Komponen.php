<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komponen extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Komponen', 'komponen');
	}

	public function index()
	{
		if (!$this->session->userdata('level') == 'Admin') {
			redirect('auth');
		} else {
			$data['title'] = 'Data Komponen Penilaian';
			$data['komponen'] = $this->komponen->getAll();

			$this->load->view('admin/layout/header', $data);
			$this->load->view('admin/layout/sidebar');
			$this->load->view('admin/komponen/index', $data);
			$this->load->view('admin/layout/footer');
		}
	}
	public function tambah()
	{
		if (!$this->session->userdata('level') == 'Admin') {
			redirect('auth');
		} else {
			$data['title'] = 'Tambah Data Komponen';
			$data['komponen'] = $this->komponen->getAll();

			$this->form_validation->set_rules(
				'komponen',
				'Komponen',
				'required|is_unique[komponen.komponen]|regex_match[/^([a-z ])+$/i]',
				array('required' => 'Komponen harus diisi', 'is_unique' => 'Komponen sudah ada', 'regex_match' => 'Karakter yang dimasukkan harus berupa Alphabet')
			);

			if ($this->form_validation->run() == false) {
				$this->load->view('admin/layout/header', $data);
				$this->load->view('admin/layout/sidebar', $data);
				$this->load->view('admin/komponen/tambah', $data);
				$this->load->view('admin/layout/footer');
			} else {

				$data = array(
					'id_komponen' => $this->input->post('id_komponen'),
					'komponen' => $this->input->post('komponen')
				);
				$this->komponen->add($data, 'komponen');
				$this->session->set_flashdata('message', '
                  <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				  <i class="bx bx-check-circle"></i>
                  Data <strong>Komponen</strong> berhasil ditambahkan!
                  </div>
                  ');
				redirect('admin/komponen');
			}
		}
	}
	public function edit($id)
	{
		if (!$this->session->userdata('level') == 'Admin') {
			redirect('auth');
		} else {
			$data['title'] = 'Edit Data Komponen';
			$data['komponen'] = $this->komponen->getById($id);

			$this->form_validation->set_rules(
				'komponen',
				'Komponen',
				'required|regex_match[/^([a-z ])+$/i]',
				array('required' => 'Komponen harus diisi', 'regex_match' => 'Karakter yang dimasukkan harus berupa Alphabet')
			);

			if ($this->form_validation->run() == false) {
				$this->load->view('admin/layout/header', $data);
				$this->load->view('admin/layout/sidebar', $data);
				$this->load->view('admin/komponen/edit', $data);
				$this->load->view('admin/layout/footer');
			} else {
				$komponen   = $this->input->post('komponen');

				$data = array(
					'komponen' => $komponen
				);

				$this->komponen->update($data, $id);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <i class="bx bx-check-circle"></i>
              Data <strong>Komponen</strong> berhasil diupdate!
              </div>
              ');
				redirect('admin/komponen');
			}
		}
	}

	public function hapus($id)
	{
		$where = [
			'id_komponen' => $id
		];
		$this->komponen->delete($where);
		$this->session->set_flashdata('message', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				<i class="bx bx-check-circle"></i>
                Data <strong>Komponen</strong> berhasil dihapus!
                </div>
                ');
		redirect('admin/komponen');
	}
}
