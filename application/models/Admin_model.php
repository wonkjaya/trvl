<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
// public functions 

	function get_categories(){
		$this->db->where(['category_slug <>'=>'tour-destination']);
		$q = $this->db->get('post_categories');
		$cat[''] = 'Select Category';
		foreach($q->result() as $r){
			$cat[$r->category_slug] = ($r->parent > 0)?'--'.$r->category_name:$r->category_name;
		}
		return $cat;
	}

	function get_requests(){
		$this->db->order_by("request_id DESC");
		$q = $this->db->get("request_offers");
		if($q->num_rows() > 0)return $q->result();
		return null;
	}

	function get_email(){
		$this->db->order_by("message_id DESC");
		$q = $this->db->get("messages");
		if($q->num_rows() > 0)return $q->result();
		return null;
	}
}
// end of file