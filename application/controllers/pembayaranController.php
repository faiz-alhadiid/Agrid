<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaranController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('pembayaran_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['keranjang_item'] = $this->pembayaran_model->getPembayaran();

        $this->load->view("header.php");
        $this->load->view("pembayaran.php", $data);
        $this->load->view("footer.php");
    }
}
