<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Subkomponen extends CI_Model
{

    public function getAll()
    {
        $this->db->order_by('id_subkomponen', 'asc');
        return $this->db->get('subkomponen')->result_array();
    }
    public function getById($id)
    {
        return $this->db->get_where('subkomponen', ['id_subkomponen' => $id])->row_array();
    }

    public function add($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }

    public function update($data, $id)
    {
        return $this->db->update('subkomponen', $data, ['id_subkomponen' => $id]);
    }

    public function delete($id)
    {
        $this->db->where($id);
        return $this->db->delete('subkomponen');
    }
    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('subkomponen');
        $this->db->join('komponen', 'komponen.id_komponen = subkomponen.id_komponen');
        $this->db->where('subkomponen.id_subkomponen', $id);
        return $this->db->get()->row();
    }
    function jumlah_subkomponen()
    {

        $query = $this->db->get('subkomponen');
        return $query->num_rows();
    }
}

/* End of file M_SubKomponen.php */
/* Location: ./application/models/M_SubKomponen.php */