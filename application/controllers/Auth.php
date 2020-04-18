<?php

class Auth extends CI_Controller
{
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('V_login');
    }

    public function lupa_password(){
        $this->load->view('V_lupapwd');
    }
}
