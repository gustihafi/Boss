<?php

class C_boss extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_boss');
    }

    public function index(){
        $data['title'] = '<title>Boss Angkringan</title>';
        $this->load->view('V_header',$data);
        $this->load->view('V_menu');
        $this->load->view('V_dashboard');
        $this->load->view('V_footer');
    }


    // ================= AKUN ================= //

    public function akun(){
        $data['title'] = '<title>Boss Angkringan</title>';
        $data['akun'] = $this->M_boss->lihat_akun();
        $this->load->view('V_header',$data);
        $this->load->view('V_menu');
        $this->load->view('Akun/V_lihat_akun');
        $this->load->view('V_footer');
    }

    public function tambah_akun(){
        $data['title'] = '<title>Boss Angkringan</title>';
        $this->load->view('V_header',$data);
        $this->load->view('V_menu');
        $this->load->view('Akun/V_tambah_akun');
        $this->load->view('V_footer');
    }

    public function proses_tambah_akun(){
		$data = array(
			'id_user' => '' ,
			'username' => $_POST['username'], 
			'password' => md5($_POST['password']),
			'level' => $_POST['level']

		);
            $this->M_boss->proses_tambah_akun($data);
			echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('C_boss/akun')."';</script>";

    }

    public function proses_edit_akun(){
        if(!empty($_POST['pwd_baru'])){
		$data = array(
			'username' => $_POST['username'], 
            'password' => md5($_POST['pwd_baru']),
            'level' => $_POST['level'] 
        );
    }else{
        $data = array(
			'username' => $_POST['username'], 
            'password' => $_POST['pwd_lama'],
            'level' => $_POST['level'] 
        );
    }
			$id_user = $_POST['id_user'];
			$this->M_boss->proses_edit_akun($data,$id_user);
			echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('C_boss/akun')."';</script>";
	}

    public function hapus_akun($id){
        $this->M_boss->proses_hapus_akun($id);
        echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('C_boss/akun')."';</script>";
    }


    // ================= MASTER Meja ================= //

    public function meja(){
        $data['title'] = '<title>Boss Angkringan</title>';
        $data['meja'] = $this->M_boss->lihat_meja();
        $this->load->view('V_header',$data);
        $this->load->view('V_menu');
        $this->load->view('Master/V_meja');
        $this->load->view('V_footer');
    }

    public function tambah_meja(){
        $data['title'] = '<title>Boss Angkringan</title>';
        $this->load->view('V_header',$data);
        $this->load->view('V_menu');
        $this->load->view('Master/V_tambah_meja');
        $this->load->view('V_footer');
    }

    public function proses_tambah_meja(){
		$data = array(
			'id_meja' => '' ,
			'nomer_meja' => $_POST['nomer_meja']
		);
            $this->M_boss->proses_tambah_meja($data);
			echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('C_boss/meja')."';</script>";

    }

    public function proses_edit_meja(){
		$data = array(
			'nomer_meja' => $_POST['username']
        );
			$id_meja = $_POST['id_meja'];
			$this->M_boss->proses_edit_akun($data,$id_meja);
			echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('C_boss/meja')."';</script>";
	}

    public function hapus_meja($id_meja){
        $this->M_boss->proses_hapus_meja($id_meja);
        echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('C_boss/meja')."';</script>";
    }
}
