<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produkController extends CI_Controller {

    public function __construct() {
		parent::__construct();
		 
        $this->load->model('produk_model');
        $this->load->helper('url_helper');
    }

    public function index() {
		$data['produk_item'] = $this->produk_model->getProduk();
		echo "<pre>";
		print_r($data['produk_item']);
		echo"</pre>";
		$this->load->view("produk.php", $data);
		$this->load->view('footer.php');
	}
}
