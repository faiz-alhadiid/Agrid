<?php
/**
 * Created by PhpStorm.
 * User: HeartBreaking
 * Date: 5/7/2018
 * Time: 7:39 PM
 */
Class Detail_Model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function getDetail($id) {
        $this->db->where('produkID', $id);
       $query = $this->db->get('produk');
       return $query->result();
    }
}
