<?php

class Model_siswa extends CI_model
{

    public function getSiswa12Rpl1()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', '1');
        return $this->db->get()->result();
    }
    public function getSiswa12Rpl2()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', '2');
        return $this->db->get()->result();
    }
    public function getSiswa11Rpl1()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', '3');
        return $this->db->get()->result();
    }
    public function getSiswa11Rpl2()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', '4');
        return $this->db->get()->result();
    }
    public function getSiswa11Rpl3()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', '5');
        return $this->db->get()->result();
    }
    public function getSiswa10Rpl1()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', '6');
        return $this->db->get()->result();
    }
    public function getSiswa10Rpl2()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', '7');
        return $this->db->get()->result();
    }
    public function getSiswa10Rpl3()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', '8');
        return $this->db->get()->result();
    }
    public function getAkunSiswaRpl()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->like('id_kelasrpl', 1);
        $this->db->or_like('id_kelasrpl', 2);
        $this->db->or_like('id_kelasrpl', 3);
        $this->db->or_like('id_kelasrpl', 4);
        $this->db->or_like('id_kelasrpl', 5);
        $this->db->or_like('id_kelasrpl', 6);
        $this->db->or_like('id_kelasrpl', 7);
        $this->db->or_like('id_kelasrpl', 8);
        return $this->db->get()->result();
    }
    public function getAkunSiswaRplById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function deleteAkunSiswaRpl($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    public function getSiswaRplById($id)
    {
        return $this->db->get_where('tb_siswa_rpl', ['id' => $id])->row_array();
    }
    public function deleteSiswaRpl($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_siswa_rpl');
    }
    public function getDatakelas(){
        $this->db->select('*');
        $this->db->from('tb_kelas_rpl');
        $this->db->order_by('id_kelasrpl');
        return $this->db->get()->result();
    }
    public function kelas($id){
        $this->db->select('*');
        $this->db->from('tb_kelas_rpl');
        $this->db->where('id_kelasrpl', $id);
        return $this->db->get()->row();
    }
    public function get_all_kelas($id){
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->join('tb_kelas_rpl', 'tb_kelas_rpl.id_kelasrpl = tb_siswa_rpl.kelas', 'left');
        $this->db->where('tb_siswa_rpl.kelas', $id);
        return $this->db->get()->result();
    }
    public function get_all_siswa(){
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->join('tb_kelas_rpl', 'tb_kelas_rpl.id_kelasrpl = tb_siswa_rpl.kelas', 'left');
        return $this->db->get()->result();
    }
    public function totalSiswa(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->like('role_id', 3);
        return $this->db->get()->num_rows();
    }
    public function totalSiswaRpl(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->like('id_kelasrpl', 1);
        $this->db->or_like('id_kelasrpl', 2);
        $this->db->or_like('id_kelasrpl', 3);
        $this->db->or_like('id_kelasrpl', 4);
        $this->db->or_like('id_kelasrpl', 5);
        $this->db->or_like('id_kelasrpl', 6);
        $this->db->or_like('id_kelasrpl', 7);
        $this->db->or_like('id_kelasrpl', 8);
        $this->db->or_like('id_kelasrpl', 9);
        return $this->db->get()->num_rows();
    }
    public function totalSiswa12Rpl1(){
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', 1);
        return $this->db->get()->num_rows();
    }
    public function totalSiswa12Rpl2(){
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', 2);
        return $this->db->get()->num_rows();
    }
    public function totalSiswa11Rpl1(){
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', 3);
        return $this->db->get()->num_rows();
    }
    public function totalSiswa11Rpl2(){
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', 4);
        return $this->db->get()->num_rows();
    }
    public function totalSiswa11Rpl3(){
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', 5);
        return $this->db->get()->num_rows();
    }
    public function totalSiswa10Rpl1(){
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', 6);
        return $this->db->get()->num_rows();
    }
    public function totalSiswa10Rpl2(){
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', 7);
        return $this->db->get()->num_rows();
    }
    public function totalSiswa10Rpl3(){
        $this->db->select('*');
        $this->db->from('tb_siswa_rpl');
        $this->db->like('kelas', 8);
        return $this->db->get()->num_rows();
    }
    public function totalKelasRpl(){
        $this->db->select('*');
        $this->db->from('tb_kelas_rpl');
        return $this->db->get()->num_rows();
    }
    public function getSiswaTkj()
    {
        return $this->db->get('tb_siswa_tkj')->result_array();
    }
    public function getSiswaTkjById($id)
    {
        return $this->db->get_where('tb_siswa_tkj', ['id_tkj' => $id])->row_array();
    }
    public function deleteSiswaTkj($id)
    {
        $this->db->where('id_tkj', $id);
        $this->db->delete('tb_siswa_tkj');
    }
    public function getSiswaMm()
    {
        return $this->db->get('tb_siswa_mm')->result_array();
    }
    public function getSiswaMmById($id)
    {
        return $this->db->get_where('tb_siswa_mm', ['id_mm' => $id])->row_array();
    }
    public function deleteSiswaMm($id)
    {
        $this->db->where('id_mm', $id);
        $this->db->delete('tb_siswa_mm');
    }
}
