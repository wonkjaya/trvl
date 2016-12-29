<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
// public functions 

	function get_categories(){
		$q = $this->db->get('post_categories');
		$cat[''] = 'Select Category';
		foreach($q->result() as $r){
			$cat[$r->category_slug] = $r->category_name;
		}
		return $cat;
	}

	function insert_post(){
		if(!$_POST || !$_GET) return '';
		if(isset($_GET['draft'])){
			$type = 2; // draft
		}else{
			$type = 1; // publish
		}
		$data = array(
	                'post_title' => $title = $this->input->post('title'),
	                'post_slug' => str_replace(' ', '-', strtolower($this->input->post('title'))),
	                'category' => $category = $this->input->post('category'),
	                'post' => $content = $this->input->post('content'),
	                'author' => $this->session->userdata('username'),
	                'status' => $type,
	            );
		if(empty($title) || empty($category)){
			$data['error'] = "Judul dan Category Kosong";
			return $data;
		}
		$this->db->insert('posts', $data);
		$this->session->set_flashdata('success_message', 'Data Berhasil Diinputkan');
		redirect('admin/tour_destination');
	}
}
// end of file