<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Myprofile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Myprofile', 'users');
    }
    public function index()
    {
        if (!$this->session->userdata('level') == 'Admin') {
            redirect('auth');
        } else {
            $data['users'] = $this->users->getAllAdmin();
            $data['title'] = 'Data Users Admin';
        }
    }
    public function editprofile($id)
    {
        if (!$this->session->userdata('level') == 'Admin') {
            redirect('auth');
        } else {
            $data['title'] = 'My Profile';

            $data['users'] = $this->users->getById($id);
            $this->form_validation->set_rules(
                'nama_user',
                'Nama User',
                'required',
                array('required' => 'Nama User harus diisi')
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
                $this->load->view('admin/myprofile', $data);
                $this->load->view('admin/layout/footer');
            } else {
                $this->users->updateprofile($id);

                $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <i class="fas fa-check-circle"></i>
            Data <strong>User Admin</strong> berhasil diupdate!
            </div>
            ');
                redirect('admin/admin');
            }
        }
    }
    public function editpass($id)
    {
        if (!$this->session->userdata('level') == 'Admin') {
            redirect('auth');
        } else {
            $data['title'] = 'Edit Data User Admin';

            $data['users'] = $this->users->getById($id);


            $this->form_validation->set_rules(
                'password',
                'Password',
                'required',
                array('required' => 'Password harus diisi')
            );

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/layout/header', $data);
                $this->load->view('admin/layout/sidebar');
                $this->load->view('admin/admin/edit', $data);
                $this->load->view('admin/layout/footer');
            } else {
                $this->users->updatepass($id);
                $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <i class="fas fa-check-circle"></i>
            Data <strong>User Admin</strong> berhasil diupdate!
            </div>
            ');
                redirect('admin/admin');
            }
        }
    }
}
