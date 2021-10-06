<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends CI_Model {

    function getData(){
        return $this->db->get('tb_user');
    }

    function insert($username,$password,$nama,$akses){
        return $this->db->query(" INSERT INTO tb_user(user_username,user_password,user_nama,user_akses) 
        values('$username',MD5('$password'),'$nama','$akses') ");
    }

    function update($id,$username,$password,$nama,$akses,$is_update){
        return $this->db->query(" UPDATE tb_user SET user_username='$username', user_password='$password', user_nama='$nama', user_last_update='$is_update' 
        where user_id='$id' ");
    }

    function delete($id){
        return $this->db->query("DELETE FROM tb_user where user_id='$id' ");
    }

    function pass_check($id,$username,$password){
        return $this->db->query("SELECT * FROM tb_user where user_username='$username' AND user_password='$password' AND user_id='$id' ");
    }

    function update_pass($id,$new_pass){
        return $this->db->query(" UPDATE tb_user set user_password=MD5('$new_pass') where user_id='$id' ");
    }

}

/* End of file M_pengguna.php */



?>