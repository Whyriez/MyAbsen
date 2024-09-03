<?php

class Model_kelas extends CI_model
{

    public function getKelasRpl()
    {
        return $this->db->get('tb_kelas_rpl')->result_array();
    }
    public function tampilRole(){
        $this->db->select('*');
        $this->db->from('user_role');
        return $this->db->get()->result();
    }
    public function getkelasRplById($id)
    {
        return $this->db->get_where('tb_kelas_rpl', ['id_kelasrpl' => $id])->row_array();
    }
    public function deleteKelasRpl($id)
    {
        $this->db->where('id_kelasrpl', $id);
        $this->db->delete('tb_kelas_rpl');
    }
    public function getKelasTkj()
    {
        return $this->db->get('tb_kelas_tkj')->result_array();
    }
    public function getkelasTkjById($id)
    {
        return $this->db->get_where('tb_kelas_tkj', ['id_kelastkj' => $id])->row_array();
    }
    public function deleteKelasTkj($id)
    {
        $this->db->where('id_kelastkj', $id);
        $this->db->delete('tb_kelas_tkj');
    }
    public function getKelasMm()
    {
        return $this->db->get('tb_kelas_mm')->result_array();
    }
    public function getkelasMmById($id)
    {
        return $this->db->get_where('tb_kelas_mm', ['id_kelasmm' => $id])->row_array();
    }
    public function deleteKelasMm($id)
    {
        $this->db->where('id_kelasmm', $id);
        $this->db->delete('tb_kelas_mm');
    }
    
}
