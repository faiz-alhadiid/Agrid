<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaranController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('pembayaran_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index() {
        if (isset($_SESSION['userID'])){
            $userID = $_SESSION['userID'];
            $data['keranjang_item'] = $this->pembayaran_model->getPembayaran($userID);
    //        echo '<pre>';
    //        print_r($data['keranjang_item']);
    //        echo '</pre>';
            $this->load->view("header.php");
            $this->load->view("pembayaran.php", $data);
            $this->load->view("footer.php");
        } else{
            redirect("", 'refresh');
        }
    }
}
