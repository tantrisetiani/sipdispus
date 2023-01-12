<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Penilaian', 'penilaian');
        $this->load->model('M_Subkomponen', 'subkomponen');
        $this->load->model('M_Komponen', 'komponen');
    }
    // public function index()
    // {
    //     // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
    //     $this->load->library('pdfgenerator');

    //     // title dari pdf
    //     $this->data['title'] = 'KERTAS KERJA EVALUASI AKUNTABILITAS KINERJA PEMERINTAH';
    //     $id = $this->session->userdata('id_opd');
    //     $this->data['subkomponen'] = $this->penilaian->getNilai($id);
    //     $this->data['nilai'] = $this->penilaian->detail_nilai($id);
    //     $this->data['komponen'] = $this->komponen->getAll();
    //     $this->data['belum_dinilai'] = $this->penilaian->belum_dinilai($id);

    //     // filename dari pdf ketika didownload
    //     $file_pdf = 'laporan-data-penilaian-opd';
    //     // setting paper
    //     $paper = 'A4';
    //     //orientasi paper potrait / landscape
    //     $orientation = "landscape";

    //     $html = $this->load->view('export', $this->data, true);

    //     // run dompdf
    //     $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    // }

    public function index()
    {
        $data['aksi']     = 'cetak';
        $id = $this->session->userdata('id_opd');
        $data['subkomponen'] = $this->penilaian->getNilai($id);
        $data['nilai'] = $this->penilaian->detail_nilai($id);
        $data['komponen'] = $this->komponen->getAll();
        $data['belum_dinilai'] = $this->penilaian->belum_dinilai($id);
        $this->load->view('export', $data);
    }
}
