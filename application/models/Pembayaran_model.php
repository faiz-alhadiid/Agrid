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

    public function getPembayaran($userID) {
       $this->db->select('keranjang.*, user.*, produk.*');
       $this->db->from('keranjang');
       $this->db->join('user', 'user.userID=keranjang.userID');
       $this->db->join('produk', 'produk.produkID=keranjang.produkID');
       $this->db->where(array('keranjang.status' => 0, 'user.userID' => $userID));
       $query = $this->db->get();
       return $query->result_array();
    }
}