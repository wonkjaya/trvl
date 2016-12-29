<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("MainController.php");

class Home extends MainController {

	function __construct(){
        parent::__construct();
        $this->output->set_header('Access-Control-Allow-Origin: *');
        $this->load->helper(['url']);
    }

    function index(){
        $this->load->model('moffers', 'offers');
        $data['tour_destinations'] = $this->offers->get_tour_destinations(0,7); /*start, limit*/
        $data['tour_guides'] = $this->offers->get_tour_guides(0,8); /*start, limit*/
        $data['car_rental'] = $this->offers->get_car_rent(0,3); /*start, limit*/
        $data['testimonies'] = $this->offers->get_testimonies(0,4); /*start, limit*/
        $this->loadView('home', $data);
    }

    function blog($start = 0){//index page
        $this->load->model('moffers', 'offers');
        $data['posts'] = $this->offers->get_posts(5, $start);
        
        //pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/blog/index/';//url to set pagination
        $config['total_rows'] = $this->offers->get_post_count();
        $config['per_page'] = 5; 
        $this->pagination->initialize($config); 
        $data['pages'] = $this->pagination->create_links(); //Links of pages
        
        $this->loadView('blog/home',$data);
    }

    function search($query =''){
        //index page
        $this->load->model('moffers','offers');  
        $query = $query != '' ? $query :$this->input->get('query', TRUE);

        $data['posts'] = $this->offers->search_posts($query);

        //pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url().'blog/search/?query=' . urlencode($query);//url to set pagination
        $config['total_rows'] = $this->offers->get_post_count();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['pages'] = $this->pagination->create_links(); //Links of pages
        $data['query'] = $query; //Links of pages

        $this->loadView('search',$data);
    }

    function add_comment($postID)
    {
        if(!$this->input->post())
        {
            redirect(base_url().'index.php/blog/post'.$postID);
        }
        
        $user_type = $this->session->userdata('user_type');
        if(!$user_type)
        {
            redirect(base_url().'index.php/users/login');
        }
        
        $this->load->model('m_comment');
        $data = array(
            'post_id' => $postID,
            'user_id' => $this->session->userdata('user_id'),
            'comment' => $this->input->post('comment'),
        );
        $this->m_comment->add_comment($data);
        redirect(base_url().'index.php/blog/post/'.$postID);
    }

    function tour_destinations($pos=0){
        $this->load->model('moffers', 'offers');
        $data['tour_destinations'] = $this->offers->get_tour_destinations($pos,11); /*start, limit*/
        $this->loadView('tour-destinations',$data);
    }

    function tour_destination($slug=''){
        if(empty($slug)){
            $this->tour_destinations();
            return;
        }
        $this->load->model('moffers', 'offers');
        if($_POST){
            $data['default'] = $this->offers->new_request($slug);
        }
        $this->load->helper('form');
        $data['display_form']= true;
        $data['tour_destination'] = $this->offers->get_tour_destination($slug); /*start, limit*/
        $data['gallery'] = $this->offers->get_gallery($slug);
        $this->loadView('single-product',$data);
    }

    function get_related_tour_destinations($except_slug, $type=''){
        $this->load->model('moffers', 'offers');
        $data = $this->offers->get_related_tour_destinations($except_slug);
        if($type == 'json') echo json_encode($data['related_destinations']);
        return $data;
    }

    function car_rentals($pos=0){
        $this->load->model('moffers', 'offers');
        $data['cars'] = $this->offers->get_car_rent($pos,11); /*start, limit*/
        $this->loadView('cars-rental',$data);
    }

    function car_rental($slug=''){
        if(empty($slug)){
            $this->car_rentals();
            return;
        }
        $this->load->model('moffers', 'offers');
        if($_POST){
            $data['default'] = $this->offers->new_request($slug);
        }
        $this->load->helper('form');
        $data['display_form']= true;
        $data['car_rental'] = $this->offers->get_car($slug); /*start, limit*/
        $data['gallery'] = $this->offers->get_gallery($slug);
        $this->loadView('single-product',$data);
    }
}
