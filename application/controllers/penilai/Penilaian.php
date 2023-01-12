<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Penilaian', 'penilaian');
        $this->load->model('M_Subkomponen', 'subkomponen');
        $this->load->model('M_Komponen', 'komponen');
        $this->load->model('M_Opd', 'opd');
        $this->load->model('M_Users', 'users');
    }
    public function index()
    {

        $data['title'] = 'Input Nilai';
        $data['activeTab'] = 'penilaian';
        $data['opd'] = $this->opd->getAll();
        $data['subkomponen'] = $this->subkomponen->getAll();
        $data['komponen'] = $this->komponen->getAll();
        $data['penilai'] = $this->users->getAllPenilai();
        $this->load->view('penilai/layout/header', $data);
        $this->load->view('penilai/layout/sidebar');
        $this->load->view('penilai/penilaian/input', $data);
        $this->load->view('penilai/layout/footer');
    }

    public function input()
    {

        $id_u = $this->session->userdata('id_u');
        $subkomponen = $this->subkomponen->getAll();
        $input = $this->input->post();
        $nilai = [];

        foreach ($subkomponen as $subkmp) {
            $nil = $input['nilai' . $subkmp['id_subkomponen']];
            if ($nil > 90) {
                $kualitas = 'AA';
            } else if ($nil > 80) {
                $kualitas = 'A';
            } else if ($nil > 70) {
                $kualitas = 'BB';
            } else if ($nil > 60) {
                $kualitas = 'B';
            } else if ($nil > 50) {
                $kualitas = 'CC';
            } else if ($nil > 30) {
                $kualitas = 'C';
            } else if ($nil <= 30) {
                $kualitas = 'D';
            }

            $hasil = $input['hasil'];
            if ($hasil > 90) {
                $kualitas_hasil = 'AA';
            } else if ($hasil > 80) {
                $kualitas_hasil = 'A';
            } else if ($hasil > 70) {
                $kualitas_hasil = 'BB';
            } else if ($hasil > 60) {
                $kualitas_hasil = 'B';
            } else if ($hasil > 50) {
                $kualitas_hasil = 'CC';
            } else if ($hasil > 30) {
                $kualitas_hasil = 'C';
            } else if ($hasil <= 30) {
                $kualitas_hasil = 'D';
            }

            $predikat = $input['predikat'];
            if ($kualitas_hasil == 'AA') {
                $predikat = 'Sangat Memuaskan';
            } else if ($kualitas_hasil == 'A') {
                $predikat = 'Memuaskan';
            } else if ($kualitas_hasil == 'BB') {
                $predikat = 'Sangat Baik';
            } else if ($kualitas_hasil == 'B') {
                $predikat = 'Baik';
            } else if ($kualitas_hasil == 'CC') {
                $predikat = 'Cukup Memuaskan';
            } else if ($kualitas_hasil == 'C') {
                $predikat = 'Kurang';
            } else if ($kualitas_hasil == 'D') {
                $predikat = 'Sangat Kurang';
            }

            $catatan = $input['catatan' . $subkmp['id_subkomponen']];
            $daftar_evidence = $input['daftar_evidence' . $subkmp['id_subkomponen']];
            array_push(
                $nilai,
                array(
                    'id_opd'          => $input['id_opd'],
                    'id_u'           => $id_u,
                    'id_subkomponen'  => $subkmp['id_subkomponen'],
                    'nilai'         => $nil,
                    'kualitas' => $kualitas,
                    'tanggal' => $input['tanggal'],
                    'catatan'    => $catatan,
                    'daftar_evidence' => $daftar_evidence,
                    'hasil' => $hasil,
                    'kualitas_hasil' => $kualitas_hasil,
                    'predikat' => $predikat,
                    'kesimpulan_evaluasi' => $input['kesimpulan_evaluasi'],
                ),
            );
        }
        // }
        $this->penilaian->insert_nilai($nilai);
        $this->session->set_flashdata('message', '
        <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <i class="bx bx-check-circle"></i>
        <strong>Nilai berhasil diinputkan!</strong>
        </div>
        ');
        redirect('penilai/penilaian');
    }
    public function opd()
    {
        $data['opd'] = $this->opd->getAll();
        if (!$this->session->userdata('level') == 'Penilai') {
            redirect('auth');
        } else {
            $data['title'] = 'DINAS PERPUSTAKAAN DAN KEARSIPAN';
            $data['activeTab'] = 'opd';
            $this->load->view('penilai/layout/header', $data);
            $this->load->view('penilai/layout/sidebar', $data);
            $this->load->view('penilai/penilaian/listopd', $data);
            $this->load->view('penilai/layout/footer');
        }
    }

    public function detail($id)
    {
        if (!$this->session->userdata('level') == 'Penilai') {
            redirect('auth');
        } else {
            $data['title'] = 'Data Penilaian';
            $data['activeTab'] = 'dashboard';
            $data['activeTab'] = 'penilaian';
            $data['activeTab'] = 'opd';
            $data['subkomponen'] = $this->penilaian->getNilai($id);
            $data['nilai'] = $this->penilaian->detail_nilai($id);
            $data['komponen'] = $this->komponen->getAll();
            $this->load->view('penilai/layout/header', $data);
            $this->load->view('penilai/layout/sidebar', $data);
            $this->load->view('penilai/penilaian/detail', $data);
            $this->load->view('penilai/layout/footer');
        }
    }

    public function hapus($id)
    {
        $where = [
            'id_opd' => $id
        ];
        $this->penilaian->delete($where);
        $this->session->set_flashdata('message', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				<i class="bx bx-check-circle"></i>
                Data <strong>Nilai</strong> berhasil dihapus!
                </div>
                ');
        redirect('penilai/dashboard');
    }
}
