<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Admin_model.php");

class Main_admin_model extends Admin_model {

// OFFERS

    function insert_offer($data)
    {
        $this->db->insert('posts',$data);
        return $this->db->insert_id();
    }
    
    function update_offer($offer_id, $data)
    {
        $this->db->where('post_id',$offer_id);
        $this->db->update('posts',$data);
    }
    
    function delete_offer($offer_id)
    {
        $this->db->where('post_id',$offer_id);
        $this->db->delete('posts');
    }
    
    function get_post_offers()
    {
    	$page = (isset($_GET['p']))?$_GET['p']:0; // page position
        $this->db->where(['cat.category_slug'=>'offers']);
        $this->db->select(['p.post_title as title','p.post as content','p.date_added as created','u.username as author']);
        $this->db->join('post_categories cat','cat.category_slug = p.category','left');
        $this->db->join('users u','u.username = p.author','left');
        $q = $this->db->get('posts p');
        if($q->num_rows() > 0) return $q->result();
        return null;
    }

// END OF OFFERS
// TOUR DESTINATION
    function get_post_tour_destination()
    {
    	$page = (isset($_GET['p']))?$_GET['p']:0; // page position
        $this->db->order_by('p.post_id','DESC');
        $this->db->where(['cat_parent.category_slug'=>'tour-destination']);
        $this->db->select(['p.post_title as title','SUBSTR(p.post,1,100) as content','p.date_added as created',
        	'u.username as author', 'p.post_slug as slug', 'p.status']);
        $this->db->join('post_categories cat_child','cat_child.category_slug = p.category','left');
        $this->db->join('post_categories cat_parent','cat_parent.category_id = cat_child.parent','left');
        $this->db->join('users u','u.username = p.author','left');
        $q = $this->db->get('posts p');
        if($q->num_rows() > 0) return $q->result();
        return null;
    }
    
// END TOUR DESTINATION
// RENTAL
    function get_post_rental()
    {
    	$page = (isset($_GET['p']))?$_GET['p']:0; // page position
        $this->db->where(['cat.category_slug'=>'car-rental']);
        $this->db->select(['p.post_title as title','p.post as content','p.date_added as created','u.username as author']);
        $this->db->join('post_categories cat','cat.category_id = p.category_id','left');
        $this->db->join('users u','u.user_id = p.user_id','left');
        $q = $this->db->get('posts p');
        if($q->num_rows() > 0) return $q->result();
        return null;
    }

// END RENTAL
}
// end of file