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
        $this->load->helper('form');
        
        $data['default'] = $this->main->get_post($data['slug']);
    	$data['categories']= $this->main->get_categories();
		$this->loadView('formpost', $data);
	}

	private function deletepost($post_id){ //delete post page
		$this->load->model('main_admin_model','main');  
        if(!$this->check_permissions('author'))//when the user is not an andmin and author
        {
            redirect(base_url().'index.php/users/login');
        }
        $this->main->delete_post($post_id);
        redirect('admin/browseoffers');
    }

// blogoffers group
	function blogoffers($type='browse'){
		$data['type'] = $type;
		if(!$this->check_permissions('author')){ // minimal author yang bisa akses ini.
            redirect('admin/login');
        }
        if($type == 'new'){
        	$this->addpost($data);
        }elseif($type == 'edit'){
        	$this->editpost($data);
        }else{
        	$this->browseoffers();
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
// end blogoffers group


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

		function trashpost($data){
			if(isset($data['slug'])){
				$this->load->model('main_admin_model','main');  
				$this->main->trash_data($data['slug']);
			}
		}
// end tour group
}
