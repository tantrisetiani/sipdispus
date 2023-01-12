<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Komponen extends CI_Model
{

    public function getAll()
    {
        $this->db->order_by('id_komponen', 'asc');
        return $this->db->get('komponen')->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('komponen', ['id_komponen' => $id])->row_array();
    }

    public function add($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }

    public function update($data, $id)
    {
        return $this->db->update('komponen', $data, ['id_komponen' => $id]);
    }

    public function delete($id)
    {
        $this->db->where($id);
        return $this->db->delete('komponen');
    }
    function jumlah_komponen()
    {

        $query = $this->db->get('komponen');
        return $query->num_rows();
    }
}

/* End of file M_Komponen.php */
/* Location: ./application/models/M_Komponen.php */