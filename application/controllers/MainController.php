<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class MainController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        //$this->load->database();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'language'));
        $this->load->model('agrid_model');
    }
    public function index(){
        $this->load->view('header.php');
        $this->load->view('index.php'); 
        $this->load->view('footer.php');       
    }
    public function login(){
        if (!isset($_SESSION['nama'])) {
            $this->load->view("masuk.php");
        } else {
            redirect('', 'refresh');
        }
    }
    public function verifyLogin(){
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run()=== true){
            //echo $this->input->post('email').'<br>';
            //echo $this->input->post('password').'pp<br>';
            $log = $this->agrid_model->readUser($this->input->post('email'));
            $l = $log[0];
            $passwordFromDB = $log[0]->password;
            //print_r($log);
            //print_r($l);
            //echo $l->password.'<br>';
            //echo ($log)?"Yes":"No";
            if ($log){
                $passwordFromDB = $log[0]->password;
                $password = $_POST['password'];
                //echo $passwordFromDB.'<br>';
                //echo $password.'<br>';
                if (password_verify($password, $passwordFromDB)){
                    //echo 'ya';
                    $this->session->set_userdata(array('nama'=>$log[0]->nama,'email' => $_POST['email']));
                    redirect('', 'refresh');
                } else {
                    //echo 'na';
                    $this->session->set_flashdata('login',  false);
                    redirect('login', 'refresh');    
                }
            } else {
                //echo "tes";
                $this->session->set_flashdata('login',  false);
                redirect('login', 'refresh');
            }
        } else {
            $this->session->set_flashdata('login',  false);
            redirect('login', 'refresh');
        }
    }
    public function register(){
        $this->load->view("daftar.php");
    }
    public function processRegister(){
        $this->form_validation->set_rules('nama', 'Nama', 'required' );
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', "Password", 'required');

        if ($this->form_validation->run() === true){
            $pass = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $data = 
                array(
                    'nama' => $this->input->post('nama'),
                    'email'=> $this->input->post('email'),
                    'password' => $pass,
                    'telepon' => '-',
                    'jenisKelamin' => '-'
                );
            if (!$this->agrid_model->readUser($data['email'])){
                $this->agrid_model->createUser($data);
                redirect('login', 'refresh');
            } else {
                $this->session->set_flashdata('failedMessage', 'duplicate');
                redirect('register', 'refresh');
            }
        } else {
            $this->session->set_flashdata('failedMessage', 'invalid');
            redirect('register', 'refresh');
        }
    }
    public function payment(){
        $this->load->view("pembayaran.php");
    }
}