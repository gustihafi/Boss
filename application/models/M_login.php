<?php
class M_login extends CI_Model
{
    public function login($post){
        $email = $post['email'];
        $pass = md5($post['password']);
        return $this->db->query("SELECT * FROM user WHERE email='$email' AND password='$pass'");
    } 
}
