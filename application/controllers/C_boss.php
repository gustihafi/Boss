<?php

class C_boss extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_boss');
        if($this->session->userdata('status') != 'login'){
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Failed!</h4>
                Harus Login!
              </div>');
            redirect('');
            }
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
			'email' => $_POST['email'], 
			'password' => md5($_POST['password']),
			'level' => $_POST['level']

		);
            $this->M_boss->proses_tambah_akun($data);
			echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('C_boss/akun')."';</script>";

    }

    public function proses_edit_akun(){
        if(!empty($_POST['pwd_baru'])){
		$data = array(
			'email' => $_POST['email'], 
            'password' => md5($_POST['pwd_baru']),
            'level' => $_POST['level'] 
        );
    }else{
        $data = array(
			'email' => $_POST['email'], 
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


    // ================= PEGAWAI ================= //

    public function pegawai(){
        $data['title'] = '<title>Boss Angkringan</title>';
        $data['pgw'] = $this->M_boss->lihat_pgw();
        $this->load->view('V_header',$data);
        $this->load->view('V_menu');
        $this->load->view('Pegawai/V_lihat_pgw');
        $this->load->view('V_footer');
    }

    public function tambah_pgw(){
        $data['title'] = '<title>Boss Angkringan</title>';
        $data['kode'] = $this->M_boss->kode_pgw();
        $this->load->view('V_header',$data);
        $this->load->view('V_menu');
        $this->load->view('Pegawai/V_tambah_pgw');
        $this->load->view('V_footer');
    }

    public function proses_tambah_pgw(){
        $data = array(
            "id_user"   => '',
            "email"     => $_POST['email'],
            "level"     => $_POST['level'],
            "password"  => md5($_POST['password'])
        );
        $this->M_boss->proses_tambah_akun($data);

        $user = $this->db->insert_id();
        $pgw = array(
            "id_pegawai"    => $_POST['id_pegawai'],
            "nama_pegawai"  => $_POST['nama_pegawai'],
            "alamat"  => $_POST['alamat'],
            "jenis_kelamin"  => $_POST['jenis_kelamin'],
            "telpon"  => $_POST['telpon'],
            "id_user"  => $user
        );
        $this->M_boss->proses_tambah_pgw($pgw);
		echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('C_boss/pegawai')."';</script>";
    }

    public function proses_edit_pgw(){
        if(!empty($_POST['pwd_baru'])){
            $data = array(
                'email' => $_POST['email'], 
                'password' => md5($_POST['pwd_baru']),
                'level' => $_POST['level'] 
            );
        }else{
            $data = array(
                'email' => $_POST['email'], 
                'password' => $_POST['pwd_lama'],
                'level' => $_POST['level'] 
            );
        }
        $id_user = $_POST['id_user'];
        $this->M_boss->proses_edit_akun($data,$id_user);
            
        $pgw = array(
            "nama_pegawai"  => $_POST['nama_pegawai'],
            "alamat"  => $_POST['alamat'],
            "jenis_kelamin"  => $_POST['jenis_kelamin'],
            "telpon"  => $_POST['telpon'],
            "id_user"  => $_POST['id_user']
        );
        $id_pgw = $_POST['id_pegawai'];
        $this->M_boss->proses_edit_pgw($pgw,$id_pgw);
        echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('C_boss/pegawai')."';</script>";
    }

    public function hapus_pgw($id){
        $this->M_boss->proses_hapus_akun($id);
        $this->M_boss->proses_hapus_pgw($id);
        echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('C_boss/pegawai')."';</script>";
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
			'nomer_meja' => $_POST['nomer_meja']
        );
			$id_meja = $_POST['id_meja'];
			$this->M_boss->proses_edit_meja($data,$id_meja);
			echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('C_boss/meja')."';</script>";
	}

    // public function hapus_meja($id_meja){
    //     $this->M_boss->proses_hapus_meja($id_meja);
    //     echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('C_boss/meja')."';</script>";
    // }

    // ================= MASTER Menu ================= //

    private function _uploadImage(){
		$config['upload_path']		= 'images/';
		$config['allowed_types']	= 'jpg|png|jpeg';
		$config['file_name']		= $_POST['nama_menu'];
		$config['max_size']			= 2048;
		$config['overwrite']		= true;

		$this->load->library('upload', $config);
		if($this->upload->do_upload('foto')){
			return $this->upload->data("file_name");
		}else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Failed!</h4>
                Data gagal di upload
              </div>');
			echo "<script>history.go(-1) </script>";
		}
	}

    public function menu(){
        $data['title'] = '<title>Boss Angkringan</title>';
        $data['menu'] = $this->M_boss->lihat_menu();
        $this->load->view('V_header',$data);
        $this->load->view('V_menu');
        $this->load->view('Master/Menu');
        $this->load->view('V_footer');
    }

    public function tambah_menu(){
        $data['title'] = '<title>Boss Angkringan</title>';
        $data['kodeunik'] = $this->M_boss->kode_unik();
        $this->load->view('V_header',$data);
        $this->load->view('V_menu');
        $this->load->view('Master/V_tambah_menu');
        $this->load->view('V_footer');
    }

    public function proses_tambah_menu(){
        $foto = $this->_uploadImage();
		$data = array(
            'id_menu' => $_POST['id_menu'],
			'nama_menu' => $_POST['nama_menu'],
            'jenis_menu' => $_POST['jenis_menu'],
            'harga_menu' => $_POST['harga_menu'],
            'foto'      => $foto
		);
            $this->M_boss->proses_tambah_menu($data);
			echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('C_boss/menu')."';</script>";

    }

    public function proses_edit_menu(){
        if(!empty($_FILES['foto']['name'])){
            $data = array(
                'nama_menu' => $_POST['nama_menu'],
                'jenis_menu' => $_POST['jenis_menu'],
                'harga_menu' => $_POST['harga_menu'],
                'foto'      => $this->_uploadImage()
            );
        }else{
            $data = array(
                'nama_menu' => $_POST['nama_menu'],
                'jenis_menu' => $_POST['jenis_menu'],
                'harga_menu' => $_POST['harga_menu'],
                'foto'      => $_POST['old_foto']
            );
        }
		
			$id_menu = $_POST['id_menu'];
			$this->M_boss->proses_edit_menu($data,$id_menu);
			echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('C_boss/menu')."';</script>";
    }
    

    public function hapus_menu($id_menu){
        $this->M_boss->proses_hapus_menu($id_menu);
        echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('C_boss/menu')."';</script>";
    }

    // ================= MASTER Bahan ================= //

    public function bahan(){
        $data['title'] = '<title>Boss Angkringan</title>';
        $data['bahan'] = $this->M_boss->lihat_bahan();
        $this->load->view('V_header',$data);
        $this->load->view('V_menu');
        $this->load->view('Master/V_bahan');
        $this->load->view('V_footer');
    }

    public function tambah_bahan(){
        $data['title'] = '<title>Boss Angkringan</title>';
        $data['kodeunik'] = $this->M_boss->kode_bahan();
        $this->load->view('V_header',$data);
        $this->load->view('V_menu');
        $this->load->view('Master/V_tambah_bahan');
        $this->load->view('V_footer');
    }

    public function proses_tambah_bahan(){
		$data = array(
            'id_bahan' => $_POST['id_bahan'],
			'nama_bahan' => $_POST['nama_bahan'],
            'status_bahan' => $_POST['status_bahan']
		);
            $this->M_boss->proses_tambah_bahan($data);
			echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('C_boss/bahan')."';</script>";

    }

    public function proses_edit_bahan(){
		$data = array(
            'nama_bahan' => $_POST['nama_bahan'],
            'status_bahan' => $_POST['status_bahan']
        );
			$id_bahan = $_POST['id_bahan'];
			$this->M_boss->proses_edit_bahan($data,$id_bahan);
			echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('C_boss/bahan')."';</script>";
	}

    public function hapus_bahan($id_bahan){
        $this->M_boss->proses_hapus_bahan($id_bahan);
        echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('C_boss/bahan')."';</script>";
    }
    
}
