<?php

class Model_absen extends CI_model
{

    public function getAbsen12Rpl1()
    {
        $this->db->select('*');
        $this->db->from('data_absen12rpl1');
        $this->db->join('tb_siswa_rpl', 'tb_siswa_rpl.id = data_absen12rpl1.id_siswarpl', 'left');
        $this->db->like('kelas', '1');
        $this->db->order_by('tanggal', 'desc');
        return $this->db->get()->result();
    }
    public function getAbsen12Rpl2()
    {
        $this->db->select('*');
        $this->db->from('data_absen12rpl2');
        $this->db->join('tb_siswa_rpl', 'tb_siswa_rpl.id = data_absen12rpl2.id_siswarpl', 'left');
        $this->db->like('kelas', '2');
        return $this->db->get()->result();
    }
    public function getAbsen11Rpl1()
    {
        $this->db->select('*');
        $this->db->from('data_absen11rpl1');
        $this->db->join('tb_siswa_rpl', 'tb_siswa_rpl.id = data_absen11rpl1.id_siswarpl', 'left');
        $this->db->like('kelas', '3');
        return $this->db->get()->result();
    }
    public function getAbsen11Rpl2()
    {
        $this->db->select('*');
        $this->db->from('data_absen11rpl2');
        $this->db->join('tb_siswa_rpl', 'tb_siswa_rpl.id = data_absen11rpl2.id_siswarpl', 'left');
        $this->db->like('kelas', '4');
        return $this->db->get()->result();
    }
    public function getAbsen11Rpl3()
    {
        $this->db->select('*');
        $this->db->from('data_absen11rpl3');
        $this->db->join('tb_siswa_rpl', 'tb_siswa_rpl.id = data_absen11rpl3.id_siswarpl', 'left');
        $this->db->like('kelas', '5');
        return $this->db->get()->result();
    }
    public function getAbsen10Rpl1()
    {
        $this->db->select('*');
        $this->db->from('data_absen10rpl1');
        $this->db->join('tb_siswa_rpl', 'tb_siswa_rpl.id = data_absen10rpl1.id_siswarpl', 'left');
        $this->db->like('kelas', '6');
        return $this->db->get()->result();
    }
    public function getAbsen10Rpl2()
    {
        $this->db->select('*');
        $this->db->from('data_absen10rpl2');
        $this->db->join('tb_siswa_rpl', 'tb_siswa_rpl.id = data_absen10rpl2.id_siswarpl', 'left');
        $this->db->like('kelas', '7');
        return $this->db->get()->result();
    }
    public function getAbsen10Rpl3()
    {
        $this->db->select('*');
        $this->db->from('data_absen10rpl3');
        $this->db->join('tb_siswa_rpl', 'tb_siswa_rpl.id = data_absen10rpl3.id_siswarpl', 'left');
        $this->db->like('kelas', '8');
        return $this->db->get()->result();
    }
   
    public function getAbsenTkj()
    {
        $this->db->select('*');
        $this->db->from('data_absentkj');
        $this->db->join('tb_siswa_tkj', 'tb_siswa_tkj.id_tkj = data_absentkj.id_siswatkj', 'left');
        return $this->db->get()->result();
    }
    public function getAbsenMm()
    {
        $this->db->select('*');
        $this->db->from('data_absenmm');
        $this->db->join('tb_siswa_mm', 'tb_siswa_mm.id_mm = data_absentkj.id_siswamm', 'left');
        return $this->db->get()->result();
    }
}
