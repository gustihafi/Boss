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
    
    // public function proses_hapus_meja($id_meja){
	// 	$where = array(
	// 		'id_meja' => $id_meja
	// 		);
	// 	$this->db->where($where);
	// 	$this->db->delete('meja');
	// }


	// =========== MENU =========== //

    public function lihat_menu(){
        return $this->db->get('menu')->result_array();
    }

    public function proses_tambah_menu($data)
	{
		$this->db->insert('menu',$data);
	}
	
	public function proses_edit_menu($data,$id_menu)
	{
		$this->db->where('id_menu',$id_menu);
		$this->db->update('menu',$data);
	}
    
    public function proses_hapus_menu($id_menu){
		$where = array(
			'id_menu' => $id_menu
			);
		$this->db->where($where);
		$this->db->delete('menu');
	}

	public function kode_unik(){
		$this->db->select('RIGHT(menu.id_menu,2) as kode', FALSE);
		$this->db->order_by('id_menu','DESC');
		$this->db->limit(1);
		$query = $this->db->get('menu');
		if($query->num_rows() > 0){
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
			$kode = 1;
		}

		$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kodejadi = "MN".$kodemax;
		return $kodejadi;
	}


	// =========== BAHAN =========== //

    public function lihat_bahan(){
        return $this->db->get('bahan')->result_array();
    }

    public function proses_tambah_bahan($data)
	{
		$this->db->insert('bahan',$data);
	}
	
	public function proses_edit_bahan($data,$id_bahan)
	{
		$this->db->where('id_bahan',$id_bahan);
		$this->db->update('bahan',$data);
	}
    
    public function proses_hapus_bahan($id_bahan){
		$where = array(
			'id_bahan' => $id_bahan
			);
		$this->db->where($where);
		$this->db->delete('bahan');
	}

	public function kode_bahan(){
		$this->db->select('RIGHT(bahan.id_bahan,2) as kode', FALSE);
		$this->db->order_by('id_bahan','DESC');
		$this->db->limit(1);
		$query = $this->db->get('bahan');
		if($query->num_rows() > 0){
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
			$kode = 1;
		}

		$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kodejadi = "BH".$kodemax;
		return $kodejadi;
	}

}
