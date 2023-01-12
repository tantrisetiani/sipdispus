<?php


class M_Myprofile extends CI_Model
{
    public function getById($id)
    {
        return $this->db->get_where('users', ['id_u' => $id])->row_array();
    }
    public function updateprofile($id)
    {
        $data['users'] = $this->db->get_where('users', ['id_u' => $id])->row_array();
        // $this->db->update($this->table, $data, $where);
        // cek jika ada foto potensi yang di upload
        $upload_image = $_FILES['foto_profil'];

        if ($upload_image) {
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '10048';
            $config['upload_path'] = './assets/img/profil';
            $config['encrypt_name'] = TRUE;


            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_profil')) {
                $old_image = $data['users']['foto_profil'];
                $path = './assets/img/profil/';

                if ($old_image != 'default.jpeg') {
                    unlink(FCPATH . $path . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('foto_profil', $new_image);
            } else {
                $this->upload->display_errors();
            }
        }
        // $post = $this->input->post();
        $nama_user = $this->input->post('nama_user');
        $username = $this->input->post('username');
        // $password = $this->input->post('password');

        $data = [
            'nama_user' => $nama_user,
            'username' => $username,

            // 'password' => md5($password),
        ];
        $this->db->where('id_u', $this->input->post('id_u'));

        // $this->db->update('users', $this, array('id_u' => $post['id']));
        $this->db->update('users', $data);
    }
    public function updatepass($id)
    {
        $data['users'] = $this->db->get_where('users', ['id_u' => $id])->row_array();
        $password = $this->input->post('password');

        $data = [

            'password' => md5($password),
        ];
        $this->db->where('id_u', $this->input->post('id_u'));
        $this->db->update('users', $data);
    }
}
