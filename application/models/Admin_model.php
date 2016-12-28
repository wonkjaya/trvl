<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
	function get_categories(){
		$q = $this->db->get('post_categories');
		$cat[''] = 'Select Category';
		foreach($q->result() as $r){
			$cat[$r->category_id] = $r->category_name;
		}
		return $cat;
	}
}
// end of file