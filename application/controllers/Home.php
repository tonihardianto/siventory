<?php
 defined('BASEPATH') OR exit('No direct script allowed');

class Home extends CI_Controller{
    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->load->view('admin/v_login');


    }
  }
