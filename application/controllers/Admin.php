<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("AdminController.php");

class Admin extends AdminController {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function index(){
		$this->dashboard();
	}

	function dashboard(){
		if(!$this->check_permissions('author')){ // minimal author yang bisa akses ini.
            redirect('admin/login');
        }
		$this->loadView('dashboard');
	}

// posts group
	function posts($type='browse', $slug=''){
		$data['type'] = $type;
		if(!empty($slug)){
			$data['slug'] = $slug;
		}
		if(!$this->check_permissions('author')){ // minimal author yang bisa akses ini.
            redirect('admin/login');
        }
        if($type == 'new'){
        	$this->addpost($data);
        }elseif($type == 'edit'){
        	$this->editpost($data);
        }elseif($type == 'trash'){
        	$this->trashpost($data);
        }else{
        	$this->browseposts();
        }
	}

		function browseposts(){
			$this->load->model('Mcomment','comments');
			$this->load->model('main_admin_model','main');  
	        $data['post'] = $this->main->get_posts();
	        $data['label_title'] = "Data Penawaran";
			$this->loadView('products_data', $data);
		}

		private function addpost($data){
	        $this->load->model('main_admin_model','main');
	        $this->load->helper('form');
	        
	        $data['default'] = $this->main->insert_post();
	    	$data['categories']= $this->main->get_categories();
			$this->loadView('formpost', $data);
		}

		private function editpost($data){
	        $this->load->model('main_admin_model','main');
			if($_POST){
				// print_r($_POST);exit;
				$this->main->save_post($data);
			}
	        $this->load->helper(['form', 'custom-form']);
	        
	        $data['default'] = $this->main->get_post($data['slug']);
	    	$data['categories']= $this->main->get_categories();
			$this->loadView('formpost', $data);
		}

		function upsert_meta($slug){
			if($_POST){
	        	$this->load->model('main_admin_model','main');
				$this->main->upsert_meta($slug);
			}else{
				echo "hello";
			}
		}

		function delete_meta($slug=null){
			if($slug){
		        $this->load->model('main_admin_model','main');
				$this->main->delete_meta($slug);
				return;
			}
			echo "error";
			return;
		}

		/*private function deletepost($post_id){ //delete post page
			$this->load->model('main_admin_model','main');  
	        if(!$this->check_permissions('author'))//when the user is not an andmin and author
	        {
	            redirect(base_url().'index.php/users/login');
	        }
	        $this->main->delete_post($post_id);
	        redirect('admin/browseposts');
	    }*/

		/*function trashpost($data){
			if(isset($data['slug'])){
				$this->load->model('main_admin_model','main');  
				$this->main->trash_post($data['slug']);
			}
		}*/
// end blogoffers group


	function emailmessage(){
		$this->load->model('main_admin_model','main');  
	    $data['label_title'] = "Pesan Email";
        $data['requests'] = $this->main->get_requests();
        $data['emails'] = $this->main->get_email();
		$this->loadView('messages_data', $data);
	}

	function get_metas($type="json"){
		$this->load->model('main_admin_model','main');
		$data=$this->main->get_metas($type);
		echo $data;
	}

}

/*

	function tour_destination($type='browse',$slug=''){
		if(!empty($slug)){
			$data['slug'] = $slug;
		}
		$data['type'] = $type;
		if(!$this->check_permissions('author')){ // minimal author yang bisa akses ini.
            redirect('admin/login');
        }
        if($type == 'new'){
        	$this->addpost($data);
        }elseif($type == 'edit'){
        	$this->editpost($data);
        }elseif($type == 'trash'){
        	$this->trashpost($data);
        }else{
        	$this->browsetour();
        }
	}
// tour group

		function browsetour(){
			$this->load->model('Mcomment','comments');
			$this->load->model('main_admin_model','main');  
	        $data['post'] = $this->main->get_post_tour_destination();
	        $data['label_title'] = "Data Destinasi Wisata";
	        $data['type'] = "tour_destination";
			$this->loadView('products_data', $data);
		}
// end tour group*/