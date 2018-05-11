<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agrid_Model extends CI_Model{
    // Create
    public function createUser($data){
        $this->db->insert('user', $data);
        
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }
    // Read
    public function readUser($email){
        $query = $this->db->get_where('user', array('email' => $email));
        return $query->result();
        /*
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
        */
    }
    public function readProductBySearch($string){
        $this->db->like('produkNama',$string);
        $query = $this->db->get('produk');
        if ($query->num_rows()>0){
            return $query->result();
        } else {
            return false;
        }

    }
    public function readRecommendedProduct($limit, $offset = 0){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->order_by('totalDibeli','desc');
        $this->db->limit($limit, $offset*$limit);
        $query = $this->db->get();
        if ($query->num_rows()>0){
            return $query->result();
        } else {
            return false;
        }
    }
    // Update

    // Delete
}