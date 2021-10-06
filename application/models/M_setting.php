<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_setting extends CI_Model {

    function get_setting(){
        $res = $this->db->query("SELECT * FROM tb_site WHERE site_id='1'");
        return $res;
    }
    function set_title($judul){
        $res  = $this->db->query("UPDATE tb_site SET site_judul='$judul' WHERE site_id='1' ");
        return $res;
    }
    function set_desc($desc)
    {
        $res  = $this->db->query("UPDATE tb_site SET site_desc='$desc' WHERE site_id='1' ");
        return $res;
    }
    function set_header($header)
    {
        $res  = $this->db->query("UPDATE tb_site SET site_head='$header' WHERE site_id='1' ");
        return $res;
    }
    function set_text($text)
    {
        $res  = $this->db->query("UPDATE tb_site SET site_text='$text' WHERE site_id='1' ");
    }
    function set_content_title($title)
    {
        $res  = $this->db->query("UPDATE tb_site SET site_content_title='$title' WHERE site_id='1' ");
    }
    function set_content_value($value)
    {
        $res  = $this->db->query("UPDATE tb_site SET site_content_value='$value' WHERE site_id='1' ");
    }

}

/* End of file M_setting.php */


?>