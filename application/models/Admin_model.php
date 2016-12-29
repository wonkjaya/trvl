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

	function insert_post(){
		if(!$_POST) return '';
		$data = array(
	                'title' => $title = $this->input->post('title'),
	                'category' => $category = $this->input->post('category'),
	                'content' => $content = $this->input->post('content'),
	            );
		if(empty($title) || empty($category)){
			$data['error'] = "Judul dan Category Kosong";
			return $data;
		}
		print_r($_SESSION);
		$this->db->insert('post', $data);
		redirect('admin/tour_destination');
	}
}
// end of file