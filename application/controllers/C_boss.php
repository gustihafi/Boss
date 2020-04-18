<?php

class C_boss extends CI_Controller
{
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['title'] = '<title>Boss Angkringan</title>';
        $this->load->view('V_header',$data);
        $this->load->view('V_menu');
        $this->load->view('V_footer');
    }
}
