<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Users', 'users');
    }

    public function index()
    {
        if (!$this->session->userdata('level') == 'Admin') {
            redirect('auth');
        } else {
            $data['users'] = $this->users->getAllPenilai();
            $data['title'] = 'Data Users Penilai';
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/sidebar');
            $this->load->view('admin/penilai/index', $data);
            $this->load->view('admin/layout/footer');
        }
    }
    public function tambah()
    {
        if (!$this->session->userdata('level') == 'Admin') {
            redirect('auth');
        } else {
            $data['title'] = 'Tambah Data Penilai';
            $this->form_validation->set_rules(
                'nama_user',
                'Nama User',
                'required|is_unique[users.nama_user]',
                array('required' => 'Nama User harus diisi', 'is_unique' => 'Nama User sudah ada')
            );
            $this->form_validation->set_rules(
                'username',
                'Username',
                'required|is_unique[users.username]',
                array('required' => 'Informasi Username harus diisi', 'is_unique' => 'Username yang dimasukkan sudah terdaftar')
            );
            $this->form_validation->set_rules(
                'password',
                'Password',
                'required|min_length[8]',
                array('required' => 'Password harus diisi', 'min_length' => 'Panjang password yang dimasukkan adalah minimal 8 karakter')
            );
            if ($this->form_validation->run() == false) {
                $this->load->view('admin/layout/header', $data);
                $this->load->view('admin/layout/sidebar');
                $this->load->view('admin/penilai/tambah', $data);
                $this->load->view('admin/layout/footer');
            } else {
                $nama_user = $this->input->post('nama_user');
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $foto_profil = $_FILES['foto_profil'];
                if ($foto_profil = '') {
                } else {
                    $config['upload_path'] = './assets/img/profil';
                    $config['allowed_types'] = 'jpeg|jpg|png';
                    $config['max_size'] = 10048;
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('foto_profil')) {
                        echo "Upload Gagal";
                        die();
                    } else {
                        $foto_profil = $this->upload->data('file_name');
                    }
                }
                $level = 'Penilai';
                $data = array(
                    'nama_user' => $nama_user,
                    'username' => $username,
                    'password' => md5($password),
                    'foto_profil' => $foto_profil,
                    'level' => $level,
                );

                $this->users->add($data, 'users');
                $this->session->set_flashdata('message', '
        <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <i class="fas fa-check-circle"></i>
        Data <strong>User Penilai</strong> berhasil ditambahkan!
        </div>
        ');
                redirect('admin/penilai');
            }
        }
    }
    public function edit($id)
    {
        if (!$this->session->userdata('level') == 'Admin') {
            redirect('auth');
        } else {
            $data['title'] = 'Edit Data User Penilai';
            $data['users'] = $this->users->getById($id);
            $this->form_validation->set_rules(
                'nama_user',
                'Nama User',
                'required',
                // 'required|regex_match[/^([a-z ])+$/i]',
                array('required' => 'Nama User harus diisi')
                // array('required' => 'Nama User harus diisi', 'regex_match' => 'Karakter yang dimasukkan harus berupa Alphabet')
            );
            $this->form_validation->set_rules(
                'username',
                'Username',
                'required',
                array('required' => 'Username harus diisi')
            );

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/layout/header', $data);
                $this->load->view('admin/layout/sidebar');
                $this->load->view('admin/penilai/edit', $data);
                $this->load->view('admin/layout/footer');
            } else {
                $this->users->update($id);
                $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <i class="fas fa-check-circle"></i>
            Data <strong>User Penilai</strong> berhasil diupdate!
            </div>
            ');
                redirect('admin/penilai');
            }
        }
    }
    public function editpass($id)
    {
        if (!$this->session->userdata('level') == 'Admin') {
            redirect('auth');
        } else {
            $data['title'] = 'Edit Data User Penilai';
            $data['users'] = $this->users->getById($id);
            $this->form_validation->set_rules(
                'password',
                'Password',
                'required|min_length[8]',
                array('required' => 'Password harus diisi', 'min_length' => 'Panjang password yang dimasukkan adalah minimal 8 karakter')
            );

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/layout/header', $data);
                $this->load->view('admin/layout/sidebar');
                $this->load->view('admin/penilai/edit', $data);
                $this->load->view('admin/layout/footer');
            } else {
                $this->users->updatepass($id);
                $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <i class="fas fa-check-circle"></i>
            Data <strong>User Penilai </strong> berhasil diupdate!
            </div>
            ');
                redirect('admin/penilai');
            }
        }
    }
    public function hapus($id)
    {

        $this->users->delete(['id_u' => $id]);
        $this->session->set_flashdata('message', '
        <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <i class="fas fa-check-circle"></i>
        Data <strong>User Penilai</strong> berhasil dihapus!
        </div>
        ');
        redirect('admin/penilai');
    }
}
