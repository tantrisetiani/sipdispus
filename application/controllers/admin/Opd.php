<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Opd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Opd', 'opd');
    }

    public function index()
    {
        if (!$this->session->userdata('level') == 'Admin') {
            redirect('auth');
        } else {
            $data['opd'] = $this->opd->getAll();
            $data['title'] = 'DINAS PERPUSTAKAAN DAN KEARSIPAN';
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/sidebar');
            $this->load->view('admin/opd/index', $data);
            $this->load->view('admin/layout/footer');
        }
    }

    public function tambah()
    {
        if (!$this->session->userdata('level') == 'Admin') {
            redirect('auth');
        } else {
            $data['title'] = 'Tambah Data Jabatan';
            $this->form_validation->set_rules(
                'jabatan',
                'Jabatan',
                'required|is_unique[opd.jabatan]',
                array('required' => 'Nama Jabatan harus diisi', 'is_unique' => 'Nama Jabatan sudah ada')
            );
            $this->form_validation->set_rules(
                'bidang',
                'Bidang',
                'required',
                array('required' => 'Informasi Bidang harus diisi')
            );
            $this->form_validation->set_rules(
                'nama_lengkap',
                'Nama Lengkap',
                'required',
                array('required' => 'Informasi Nama Lengkap harus diisi')
            );
            $this->form_validation->set_rules(
                'nip',
                'Nip',
                'required|min_length[9]|max_length[18]',
                array('required' => 'Nip harus diisi', 'min_length' => '{field} setidaknya {param} karakter.', 'max_length' => '{field} maksimal {param} karakter')
            );

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/layout/header', $data);
                $this->load->view('admin/layout/sidebar');
                $this->load->view('admin/opd/tambah', $data);
                $this->load->view('admin/layout/footer');
            } else {
                $jabatan = $this->input->post('jabatan');
                
                $bidang = $this->input->post('bidang');
                $nama_lengkap = $this->input->post('nama_lengkap');
                $nip = $this->input->post('nip');

                $data = array(
                    'jabatan' => $jabatan,
                    'bidang' => $bidang,
                    'nama_lengkap' => $nama_lengkap,
                    'nip' => $nip
                );

                $this->opd->add($data, 'opd');
                $this->session->set_flashdata('message', '
        <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <i class="fas fa-check-circle"></i>
        Data <strong>Jabatan</strong> berhasil ditambahkan!
        </div>
        ');
                redirect('admin/opd');
            }
        }
    }

    public function edit($id)
    {
        if (!$this->session->userdata('level') == 'Admin') {
            redirect('auth');
        } else {
            $data['title'] = 'Edit Data Jabatan';
            $data['opd'] = $this->opd->getById($id);
            $this->form_validation->set_rules(
                'jabatan',
                'Jabatan',
                'required|is_unique[opd.jabatan]',
                array('required' => 'Nama Jabatan harus diisi', 'is_unique' => 'Nama Jabatan sudah ada')
            );
            $this->form_validation->set_rules(
                'bidang',
                'Bidang',
                'required',
                array('required' => 'Informasi Bidang harus diisi')
            );
            $this->form_validation->set_rules(
                'nama_lengkap',
                'Nama Lengkap',
                'required',
                array('required' => 'Informasi Nama Lengkap harus diisi')
            );
            $this->form_validation->set_rules(
                'nip',
                'Nip',
                'required|min_length[9]|max_length[18]',
                array('required' => 'Nip harus diisi', 'min_length' => '{field} setidaknya berisi {param} karakter.', 'max_length' => '{field} maksimal berisi {param} karakter')
            );


            if ($this->form_validation->run() == false) {
                $this->load->view('admin/layout/header', $data);
                $this->load->view('admin/layout/sidebar');
                $this->load->view('admin/opd/edit', $data);
                $this->load->view('admin/layout/footer');
            } else {
                $this->opd->update($id);
                $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <i class="fas fa-check-circle"></i>
            Data <strong>Jabatan</strong> berhasil diupdate!
            </div>
            ');
                redirect('admin/opd');
            }
        }
    }

    public function hapus($id)
    {
        $this->opd->delete(['id_opd' => $id]);
        $this->session->set_flashdata('message', '
        <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <i class="fas fa-check-circle"></i>
        Data <strong>Jabatan</strong> berhasil dihapus!
        </div>
        ');
        redirect('admin/opd');
    }

    public function get_opd()
    {
        $id = $this->input->post('id_opd');

        $opd = $this->opd->lihat_id($id);
        echo json_encode($opd);
    }
}
