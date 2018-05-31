<?php
/**
 * Created by PhpStorm.
 * User: HeartBreaking
 * Date: 5/7/2018
 * Time: 7:39 PM
 */
Class Produk_Model extends CI_Model {

	// tabel yang akan di munculkan pada halaman produk:
	// produk, dan rating

    public function __construct() {
        $this->load->database();
    }

    public function getProduk() {
       $this->db->select('produk.*, rating.*');
       $this->db->from('produk');
       $this->db->join('rating', 'rating.produkID=produk.produkID');
       $query = $this->db->get();
       return $query->result_array();
	}
}
