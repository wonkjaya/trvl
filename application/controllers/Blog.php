<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("AdminController.php");

class Blog extends AdminController{
   
    function __construct(){
        parent::__construct();
        $this->load->helper(['url']);
        $this->load->model('mdb', 'm');
    }

	function search($query =''){
        //index page
		    $query = $query != '' ? $query :$this->input->get('query', TRUE);

	        $data['posts'] = $this->m->search_posts($query);

	        //pagination
	        $this->load->library('pagination');
	        $config['base_url'] = base_url().'blog/search/?query=' . urlencode($query);//url to set pagination
	        $config['total_rows'] = $this->m->get_post_count();
	        $config['per_page'] = 5;
	        $this->pagination->initialize($config);
	        $data['pages'] = $this->pagination->create_links(); //Links of pages
	        $data['query'] = $query; //Links of pages

	        $class_name = array(
	            'home_class'=>'current',
	            'login_class' => '',
	            'register_class' => '',
	            'upload_class'=>'',
	            'contact_class'=>'');
	        // $this->load->view('blog/header',$class_name);
	        $this->loadView('blog/search',$data);
	        // $this->load->view('blog/footer');
	    }

    function post($post_id)//single post page
    {   
        $this->load->model('Mcomment');
        $data['comments'] = $this->Mcomment->get_comment($post_id);    
        $data['post'] = $this->m->get_post($post_id);
        $class_name = array(
            'home_class'=>'current', 
            'login_class' =>'', 
            'register_class' => '',
            'upload_class'=>'',
            'contact_class'=>'');
        // $this->load->view('blog/header',$class_name);
        $this->loadView('blog/single_post',$data);
        // $this->load->view('blog/footer');
    }
    
    function new_post()//Creating new post page
    {
        if(!$this->check_permissions('author'))//when the user is not an andmin and author
        {
            redirect(base_url().'index.php/users/login');
        }
        if($this->input->post())
        {
            $data = array(
                'post_title' => $this->input->post('post_title'),
                'post' => $this->input->post('post'),
                'active' => 1,
            );
            $this->m->insert_post($data);
            redirect(base_url().'index.php/blog/');
        }
        else{
            
            $class_name = array(
            'home_class'=>'current', 
            'login_class' =>'', 
            'register_class' => '',
            'upload_class'=>'',
            'contact_class'=>'');
            // $this->load->view('blog/header',$class_name);
            $this->loadView('blog/new_post');
            // $this->load->view('blog/footer');
        }
    }
    function editpost($post_id)//Edit post page
    {
        if(!$this->check_permissions('author'))//when the user is not an andmin and author
        {
            redirect(base_url().'index.php/users/login');
        }
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
        // $this->load->view('blog/header',$class_name);
        $this->loadView('blog/edit_post',$data);
        // $this->load->view('blog/footer');
    }
    function deletepost($post_id)//delete post page
    {
        if(!$this->check_permissions('author'))//when the user is not an andmin and author
        {
            redirect(base_url().'index.php/users/login');
        }
        $this->m->delete_post($post_id);
        redirect(base_url().'index.php/blog/');
    }
    
    
}