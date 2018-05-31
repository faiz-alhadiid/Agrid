<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detailController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('detail_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['detail_item'] = $this->detail_model->getDetail();
        //    echo '<pre>';
        //    print_r($data['detail_item']);
        //    echo '</pre>';
        $this->load->view("detail.php", $data);
    }
}
