<?php


class M_Opd extends CI_Model
{
    public function getAll()
    {
        $this->db->order_by('id_opd', 'asc');
        return $this->db->get('opd')->result_array();
    }

    public function add($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }

    public function getById($id)
    {
        return $this->db->get_where('opd', ['id_opd' => $id])->row_array();
    }

    public function update($id)
    {
        $data['opd'] = $this->db->get_where('opd', ['id_opd' => $id])->row_array();



        $data = [
            'jabatan' =>  $this->input->post('jabatan', true),
            'bidang' => $this->input->post('bidang', true),
            'nama_lengkap' => $this->input->post('nama_lengkap', true),
            'nip' => $nip = $this->input->post('nip', true)
        ];
        $this->db->where('id_opd', $this->input->post('id_opd'));
        $this->db->update('opd', $data);
    }

    public function delete($id)
    {
        $this->db->where($id);
        return $this->db->delete('opd');
    }

    public function lihat_id($id)
    {
        return $this->db->get_where('opd', ['id_opd' => $id])->row();
    }
    function jumlah_opd()
    {

        $query = $this->db->get('opd');
        return $query->num_rows();
    }
}
/* End of file M_Opd.php */
/* Location: ./application/models/M_Opd.php */
