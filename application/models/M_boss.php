<?php

class M_boss extends CI_Model
{


    // =========== AKUN =========== //

    public function lihat_akun(){
        return $this->db->get('user')->result_array();
    }

    public function proses_tambah_akun($data)
	{
		$this->db->insert('user',$data);
	}
	
	public function proses_edit_akun($data,$id_user)
	{
		$this->db->where('id_user',$id_user);
		$this->db->update('user',$data);
	}
    
    public function proses_hapus_akun($id){
		$where = array(
			'id_user' => $id
			);
		$this->db->where($where);
		$this->db->delete('user');
	}

	// =========== Master Meja =========== //

    public function lihat_meja(){
        return $this->db->get('meja')->result_array();
    }

    public function proses_tambah_meja($data)
	{
		$this->db->insert('meja',$data);
	}
	
	public function proses_edit_meja($data,$id_meja)
	{
		$this->db->where('id_meja',$id_meja);
		$this->db->update('meja',$data);
	}
    
    public function proses_hapus_meja($id_meja){
		$where = array(
			'id_meja' => $id_meja
			);
		$this->db->where($where);
		$this->db->delete('meja');
	}

}
