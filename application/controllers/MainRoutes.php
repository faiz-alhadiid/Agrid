<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class MainRoutes extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        //$this->load->database();
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'language'));
        //$this->load->model('elon');
    }
    public function index(){
        $this->load->view('index.php');        
    }
    public function login(){
        $this->load->view("masuk.php");
    }
    public function register(){
        $this->load->view("daftar.php");
    }
    public function payment(){
        $this->load->view("pembayaran.php");
    }
}