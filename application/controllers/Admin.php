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
	        	$this->load->model('main_admin_model','main');
	            $data = array(
	                'post_title' => $this->input->post('post_title'),
	                'post' => $this->input->post('post'),
	                'active' => 1,
	            );
	            $this->main->insert_post($data);
	            // redirect(base_url().'index.php/blog/');
	            echo "success";
	        }else{
				$this->loadView('blogoffers-form');
	        }
		}

		function browseoffers(){
			$this->load->model('Mcomment','comments');
			$this->load->model('main_admin_model','main');  
	        $data['post'] = $this->main->get_post_offers();
	        $data['label_title'] = "Data Penawaran";
	        $data['type'] = "blogoffers";
			$this->loadView('products_data', $data);
		}

		function editoffers(){
			$this->load->model('main_admin_model','main');  
			$data['success'] = 0;
	        
	        if($this->input->post())
	        {
	            $data = array(
	                'post_title' => $this->input->post('post_title'),
	                'post' => $this->input->post('post'),
	                'active' => 1
	            );
	            $this->main->update_post($post_id, $data);
	            $data['success'] = 1;
	        }
	        $data['post'] = $this->main->get_post($post_id);
	        
	        $this->loadView('blogoffers-form',$data);
		}

		function deleteoffer($post_id){ //delete post page
			$this->load->model('main_admin_model','main');  
	        if(!$this->check_permissions('author'))//when the user is not an andmin and author
	        {
	            redirect(base_url().'index.php/users/login');
	        }
	        $this->main->delete_post($post_id);
	        redirect('admin/browseoffers');
	    }
// end blogoffers group


	function tour_destination($type='browse'){
		if(!$this->check_permissions('author')){ // minimal author yang bisa akses ini.
            redirect('admin/login');
        }
        if($type == 'new'){
        	$this->newtour();
        }elseif($type == 'edit'){
        	$this->edittour();
        }else{
        	$this->browsetour();
        }
	}
// tour group
		function newtour(){
	        $this->load->model('main_admin_model','main');
	        $this->load->helper('form');
	        
	        $data['default'] = $this->main->insert_post();
        	$data['categories']= $this->main->get_categories();
			$this->loadView('tour-form', $data);
		}

		function browsetour(){
			$this->load->model('Mcomment','comments');
			$this->load->model('main_admin_model','main');  
	        $data['post'] = $this->main->get_post_tour_destination();
	        $data['label_title'] = "Data Destinasi Wisata";
	        $data['type'] = "tour_destination";
			$this->loadView('products_data', $data);
		}

		function edittour(){
			$this->load->model('main_admin_model','main');  
			$data['success'] = 0;
	        
	        if($this->input->post())
	        {
	            $data = array(
	                'post_title' => $this->input->post('post_title'),
	                'post' => $this->input->post('post'),
	                'active' => 1
	            );
	            $this->main->update_post($post_id, $data);
	            $data['success'] = 1;
	        }
	        $data['post'] = $this->main->get_post($post_id);
	        
	        $this->loadView('blogoffers-form',$data);
		}

		function deletetour($post_id){ //delete post page
			$this->load->model('main_admin_model','main');  
	        if(!$this->check_permissions('author'))//when the user is not an andmin and author
	        {
	            redirect(base_url().'index.php/users/login');
	        }
	        $this->main->delete_post($post_id);
	        redirect('admin/browseoffers');
	    }
// end tour group
}
