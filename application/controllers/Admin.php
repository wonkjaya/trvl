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
	            
	            $class_name = array(
	            'home_class'=>'current', 
	            'login_class' =>'', 
	            'register_class' => '',
	            'upload_class'=>'',
	            'contact_class'=>'');
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
			$data['success'] = 0;
	        
	        if($this->input->post())
	        {
	            $data = array(
	                'post_title' => $this->input->post('post_title'),
	                'post' => $this->input->post('post'),
	                'active' => 1
	            );
	            $this->m->update_post($post_id, $data);
	            $data['success'] = 1;
	        }
	        $data['post'] = $this->m->get_post($post_id);
	        
	        $class_name = array(
	            'home_class'=>'current', 
	            'login_class' =>'', 
	            'register_class' => '',
	            'upload_class'=>'',
	            'contact_class'=>'');
	        $this->loadView('blogoffers-form',$data);
		}
// end blogoffers group


}
