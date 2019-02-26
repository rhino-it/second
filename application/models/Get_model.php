<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_model extends CI_Model {

    function md_menu($id) {
    		$query = $this->db->order_by('sort', 'ASC');
            $query = $this->db->where('id_parent',$id);
            $query = $this->db->get('ex_menu');
            return $query->result_array();
    }


} 
