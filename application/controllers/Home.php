<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("MainController.php");

class Home extends MainController {

	function __construct(){
        parent::__construct();
        $this->load->helper(['url']);
        $this->load->model('mdb', 'm');
    }

    function index(){
		$this->loadView('home');
	}

	function blog($start = 0){//index page
        $data['posts'] = $this->m->get_posts(5, $start);
        
        //pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/blog/index/';//url to set pagination
        $config['total_rows'] = $this->m->get_post_count();
        $config['per_page'] = 5; 
        $this->pagination->initialize($config); 
        $data['pages'] = $this->pagination->create_links(); //Links of pages
        
        $class_name = array(
            'home_class'=>'current', 
            'login_class' => '', 
            'register_class' => '',
            'upload_class'=>'',
            'contact_class'=>'');

        $this->loadView('blog/home',$data);
    }
}
