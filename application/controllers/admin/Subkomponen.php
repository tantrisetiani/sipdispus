<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subkomponen extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Subkomponen', 'subkomponen');
        $this->load->model('M_Komponen', 'komponen');
    }

    public function index()
    {
        if (!$this->session->userdata('level') == 'Admin') {
            redirect('auth');
        } else {
            $data['title'] = 'Data Sub Komponen Penilaian';
            $data['subkomponen'] = $this->subkomponen->getAll();

            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/sidebar');
            $this->load->view('admin/subkomponen/index', $data);
            $this->load->view('admin/layout/footer');
        }
    }
    public function tambah()
    {
        if (!$this->session->userdata('level') == 'Admin') {
            redirect('auth');
        } else {
            $data['title'] = 'Tambah Data Sub Komponen';
            $data['subkomponen'] = $this->subkomponen->getAll();
            $data['komponen'] = $this->komponen->getAll();

            $this->form_validation->set_rules(
                'id_komponen',
                'Komponen',
                'required',
                array('required' => 'Komponen harus diisi')
            );
            $this->form_validation->set_rules(
                'subkomponen',
                'Sub Komponen',
                'required|is_unique[subkomponen.subkomponen]|regex_match[/^([a-z ])+$/i]',
                array('required' => 'Sub Komponen harus diisi', 'is_unique' => 'Sub Komponen sudah ada', 'regex_match' => 'Karakter yang dimasukkan harus berupa Alphabet')
            );
            $this->form_validation->set_rules(
                'kriteria',
                'Kriteria',
                'required',
                array('required' => 'Kriteria harus diisi')
            );
            $this->form_validation->set_rules(
                'bobot',
                'Bobot Nilai',
                'required',
                array('required' => 'Bobot Nilai harus diisi')
            );

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/layout/header', $data);
                $this->load->view('admin/layout/sidebar');
                $this->load->view('admin/subkomponen/tambah', $data);
                $this->load->view('admin/layout/footer');
            } else {
                $data = array(
                    'id_komponen' => $this->input->post('id_komponen'),
                    'subkomponen' => $this->input->post('subkomponen'),
                    'kriteria' => $this->input->post('kriteria'),
                    'bobot' => $this->input->post('bobot')
                );
                $this->subkomponen->add($data, 'subkomponen');
                $this->session->set_flashdata('message', '
                  <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				  <i class="bx bx-check-circle"></i>
                  Data <strong>Sub Komponen</strong> berhasil ditambahkan!
                  </div>
                  ');
                redirect('admin/subkomponen');
            }
        }
    }
    public function edit($id)
    {
        if (!$this->session->userdata('level') == 'Admin') {
            redirect('auth');
        } else {
            $data['title'] = 'Edit Data Sub Komponen';
            $data['subkomponen'] = $this->subkomponen->getById($id);
            $data['komponen'] = $this->komponen->getAll();

            $this->form_validation->set_rules(
                'id_komponen',
                'Komponen',
                'required',
                array('required' => 'Komponen harus diisi')
            );

            $this->form_validation->set_rules(
                'subkomponen',
                'Sub Komponen',
                'required|regex_match[/^([a-z ])+$/i]',
                array('required' => 'Sub Komponen harus diisi', 'regex_match' => 'Karakter yang dimasukkan harus berupa Alphabet')
            );
            $this->form_validation->set_rules(
                'kriteria',
                'Kriteria',
                'required',
                array('required' => 'Kriteria harus diisi')
            );
            $this->form_validation->set_rules(
                'bobot',
                'Bobot Nilai',
                'required',
                array('required' => 'Bobot Nilai harus diisi')
            );

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/layout/header', $data);
                $this->load->view('admin/layout/sidebar', $data);
                $this->load->view('admin/subkomponen/edit', $data);
                $this->load->view('admin/layout/footer');
            } else {
                $id_komponen   = $this->input->post('id_komponen');
                $subkomponen   = $this->input->post('subkomponen');
                $kriteria   = $this->input->post('kriteria');
                $bobot   = $this->input->post('bobot');

                $data = array(
                    'id_komponen' => $id_komponen,
                    'subkomponen' => $subkomponen,
                    'kriteria' => $kriteria,
                    'bobot' => $bobot
                );

                $this->subkomponen->update($data, $id);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <i class="bx bx-check-circle"></i>
              Data <strong>Sub Komponen</strong> berhasil diupdate!
              </div>
              ');
                redirect('admin/subkomponen');
            }
        }
    }

    public function hapus($id)
    {
        $where = [
            'id_subkomponen' => $id
        ];
        $this->subkomponen->delete($where);
        $this->session->set_flashdata('message', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				<i class="bx bx-check-circle"></i>
                Data <strong>Sub Komponen</strong> berhasil dihapus!
                </div>
                ');
        redirect('admin/subkomponen');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Sub Komponen';

        $this->load->model('subkomponen');
        $detail = $this->subkomponen->detail($id);
        $data['detail'] = $detail;
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/subkomponen/detail', $data);
        $this->load->view('admin/layout/footer');
    }
}
