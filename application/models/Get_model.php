<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_model extends CI_Model {

    function md_menu($id) {
    		$query = $this->db->order_by('sort', 'ASC');
            $query = $this->db->where('id_parent',$id);
            $query = $this->db->get('ex_menu');
            return $query->result_array();
    }
    function inf($id) {
            $query = $this->db->where('id', $id);
            $query = $this->db->get('ex_page');
            return $query->result_array();
    }
    function news($id) {
            $query = $this->db->where('id_type_page', 1);
            $query = $this->db->get('ex_page');
            return $query->result_array();
    }
    function main_page_news() {
            $query = $this->db->limit(3);
            $query = $this->db->where('id_type_page', 1);
            $query = $this->db->get('ex_page');
            return $query->result_array();
    }
<<<<<<< HEAD
=======
    function  arhiv($num, $offset){
     $this->db->order_by('id', 'DESC');
     $query = $this->db->where('id_type_page', 1);
     $query = $this->db->get('ex_page', $num, $offset);
     return $query->result_array();     
    }
>>>>>>> 3c51c8e89321ddb4544e8a4984c7c2f7d19bb866
} 
