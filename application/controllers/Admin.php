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

	function blogoffers($type='browse'){
		if(!$this->check_permissions('author')){ // minimal author yang bisa akses ini.
            redirect('admin/login');
        }
        if($type == 'new'){
        	$this->newoffer();
        }elseif($type == 'edit'){
        	$this->editoffer();
        }else{
        	$this->browseoffers();
        }
	}
// blogoffers group
		function newoffer(){
	        if($this->input->post())
	        {
	        	$this->load->model('moffers','offers');
	            $data = array(
	                'post_title' => $this->input->post('post_title'),
	                'post' => $this->input->post('post'),
	                'active' => 1,
	            );
	            $this->offers->insert_post($data);
	            // redirect(base_url().'index.php/blog/');
	            echo "success";
	        }else{
				$this->loadView('blogoffers-form');
	        }
		}

		function browseoffers(){
			$this->load->model('Mcomment','comments');
			$this->load->model('moffers','offers');  
	        $data['post'] = $this->offers->get_posts();
			$this->loadView('blogoffers', $data);
		}

		function editoffers(){
			$this->load->model('moffers','offers');  
			$data['success'] = 0;
	        
	        if($this->input->post())
	        {
	            $data = array(
	                'post_title' => $this->input->post('post_title'),
	                'post' => $this->input->post('post'),
	                'active' => 1
	            );
	            $this->offers->update_post($post_id, $data);
	            $data['success'] = 1;
	        }
	        $data['post'] = $this->offers->get_post($post_id);
	        
	        $this->loadView('blogoffers-form',$data);
		}

		function deletepost($post_id){ //delete post page
			$this->load->model('moffers','offers');  
	        if(!$this->check_permissions('author'))//when the user is not an andmin and author
	        {
	            redirect(base_url().'index.php/users/login');
	        }
	        $this->offers->delete_post($post_id);
	        redirect('admin/browseoffers');
	    }
// end blogoffers group


}
