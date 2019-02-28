<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Plagin_model extends CI_Model {


// 	    function pl_main() {
// 	    	// $query = $this->db->query('SELECT year FROM ex_vak_archive GROUP BY year ORDER BY year DESC'); 
//          	$query = $this->db->get('ex_vak_archive');
//             return $query->result_array();
// }			
    function pl_edit($id=0) {
    		$query = $this->db->query('SELECT * FROM ex_vak_archive WHERE id='.$id); 
            return $query->result_array();
}
    function pl_year() {
	    	$query = $this->db->query('SELECT year FROM ex_vak_archive GROUP BY year'); 
            return $query->result_array();
}				
 function pl_edition() {
	    	$query = $this->db->query('SELECT edition FROM ex_vak_archive GROUP BY edition'); 
            return $query->result_array();
}	
 function pl_science() {
	    	$query = $this->db->query('SELECT science FROM ex_vak_archive GROUP BY science'); 
            return $query->result_array();
}	
 function pl_author() {
	    	$query = $this->db->query('SELECT author FROM ex_vak_archive GROUP BY author'); 
            return $query->result_array();
}

	 function add_to_base($data_add_to_base) {
  if (isset($_POST['submit_add_to_base'])) {
                 $this->db->insert('ex_vak_archive', $data_add_to_base);
            }
}

 function edit_base($data_add_to_base,$id) {
  if (isset($_POST['submit_edit_base'])) {
  				 $this->db->where('id', $id);
                 $this->db->update('ex_vak_archive', $data_add_to_base);
            }
}

	function file_name($id) {
  			$query = $this->db->query('SELECT file FROM ex_vak_archive WHERE id='.$id); 
  			foreach ($query->result_array() as $item) {
  			$file_name = $item['file'];
  			}
            return $file_name;
}
	 function delete_base($id) {
  				 $this->db->where('id', $id);
                 $this->db->delete('ex_vak_archive');
}

//    function count_number() {
//            $query = $this->db->query('SELECT * FROM ex_vak_archive');
//     return $query->num_fields();
// }

    function pagination_pages($num, $offset) {
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get('ex_vak_archive', $num, $offset);
        return $query->result_array();
    }




}
