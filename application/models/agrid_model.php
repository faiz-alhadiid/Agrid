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
    public function addCart($id, $data){
        $this->db->insert('keranjang', array(
            'userID' => $id,
            'produkID' => $data['produkID'],
            'totalHarga' => $data['totalHarga'],
            'jumlah_produk' => $data['jumlah_produk'],
            'status' => 0
        ));
        if ($this->db->affected_rows()>0){
            return true;
        } else return false;
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
    public function getProductById($id){
        $query = $this->db->get_where('produk', array('produkID' => $id ));
        if ($query->num_rows()> 0){
            return $query->result();
        } else {
            return false;
        }
    }
    public function getChart($idUser = null, $produkID = null, $status=null){
        if($idUser!=null && $produkID !=null&& $status!=null){
            $query = $this->db->get_where('keranjang', array('produkID' => $produkID, 'userID' => $idUser, 'status' =>0 ));
            if ($query->num_rows()> 0){
                return $query->result();
            } else {
                return false;
            }    
        } else if (!empty($produkID)){
            $query = $this->db->get_where('keranjang', array('userID' => $idUser ));
            if ($query->num_rows()> 0){
                return $query->result();
            } else {
                return false;
            }
        } else {
            $query = $this->db->get('keranjang');
            if ($query->num_rows()> 0){
                return $query->result();
            } else {
                return false;
            }
        }
    }
    // Update
    public function updateChart($id, $data){
        $this->db->where('cartID', $id);
        $this->db->update('keranjang', $data);
        if ($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
    // Delete
}