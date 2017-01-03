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
		/*insert new post*/
		$this->db->insert('posts', $data);
		/*insert new images*/
		$this->db->insert('post_images', ["post_id"=>$this->db->insert_id(),"image_key"=>"thumbnail"]);
		$this->session->set_flashdata('success_message', 'Data Berhasil Diinputkan');
		redirect('admin/tour_destination/edit/'.$data['post_slug']);
	}

	function get_post($slug){
		$this->db->where(['p.post_slug'=>$slug, 'img.image_key'=>'thumbnail']);
		$this->db->join('post_images img','img.post_id = p.post_id','left');
		$q = $this->db->get('posts p');
		if($q->num_rows() > 0){
			$data['post'] = $q->row();
			$this->db->where(['img.post_id'=>$q->row()->post_id, 'img.image_key'=>'gallery']);
			$i= $this->db->get('post_images img');
			if($i->num_rows() > 0){
				$data['img']=$i->result();
			}
		}else{
			$data['post'] = null;
		}
		return $data;
	}
}
// end of file