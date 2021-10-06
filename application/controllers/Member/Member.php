<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'member/login';
            redirect($url);
        }
        
        $this->load->model('m_member');
    }
    public function index()
    {
        $this->load->view('member/v_index');
        
    }
    
    function signup(){
        $password = random_string('alnum',8);
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $fullname = $this->input->post('fullname');
        $gender = $this->input->post('gender');
        $telepon = $this->input->post('telepon');

        $email_from = "no_reply@geowisatajogja.com";
        $email_to = $email;

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'th68640@gmail.com',
            'smtp_pass' => 'hardyanto28',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from($email_from, 'no-reply-verification');
        $this->email->to($email_to);
        $this->email->subject('INFORMASI AKSES LOGIN GEOWISATAJOGJA.COM');

        $message =  "

        <!DOCTYPE html>
        <html lang='en'>
        <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <style type='text/css'>
            .text-danger {
            color: red;
            }
            .text-center {
            text-align: center;
            }
            .jumbotron {
            background-color: grey;
            }   
        </style>
        </head>
        <body>
        <div class='text-center'>
        <h2>Thankyou for Registering.</h2>
        <h4>Geo Wisata Yogyakarta</h4>
        </div>
        <div class='container'>
            <div class='card-body text-center'>
                <p>Hai, <b> $fullname</b></p>
                <p><b>Berikut ini adalah informasi login anda :</b></p>
            <br>
                <p>Email : </p>
                <b> $email</b>
            <br>
                <p>Password : </p>
                <b><h4> $password</h4></b>
            <br>
                <p class='text-center text-danger'><b>Pastikan anda menyimpan informasi login ini dan jangan beritahu siapapun.<br> Anda bisa mengganti password setelah anda login.</b></p>
                <br>
                <b>© Geo Wisata Yogyakarta </b>
            </div> 
        </div>
        </body>
        </html>
        ";

        $this->email->message($message);

        if ($this->email->send()) {

        $this->m_member->addMember($email,$password,$username,$fullname,$gender,$telepon);
        $this->session->set_flashdata('msg', 'Password telah dikirim, silahkan cek email.');
        redirect('Member/Login');
        } else {
            $this->session->set_flashdata('msg', 'Email Gagal!!');
            redirect('Applicant/Register');
        }
    }

}

/* End of file Daftar.php */
