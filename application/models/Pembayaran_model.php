<?php
/**
 * Created by PhpStorm.
 * User: HeartBreaking
 * Date: 5/7/2018
 * Time: 7:39 PM
 */
Class Pembayaran_Model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function getPembayaran() {
       $query = $this->db->get('keranjang');
       return $query->result_array();
    }
}