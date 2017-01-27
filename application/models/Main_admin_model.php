<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Admin_model.php");

class Main_admin_model extends Admin_model {


    function trash_post($post_id, $data)
    {
        $this->db->where('post_id',$post_id);
        $this->db->update('posts',$data);
    }
    
    function update_post($post_id, $data)
    {
        $this->db->where('post_id',$post_id);
        $this->db->update('posts',$data);
    }
    
    function delete_post($post_id)
    {
        $this->db->where('post_id',$post_id);
        $this->db->delete('posts');
    }
    
    function get_posts()
    {
    	$page = (isset($_GET['p']))?$_GET['p']:0; // page position
        $this->db->select(['cat.category_name as category','p.post_title as title','SUBSTR(p.post,1,100) as content','p.date_added as created','u.username as author', 'p.post_slug as slug', 'p.status']);
        $this->db->join('post_categories cat','cat.category_slug = p.category','left');
        $this->db->join('users u','u.username = p.author','left');
        $q = $this->db->get('posts p');
        if($q->num_rows() > 0) return $q->result();
        return null;
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
        redirect('admin/posts/edit/'.$data['post_slug']);
    }

    function get_post($slug){
        $this->db->where(['p.post_slug'=>$slug, 'img.image_key'=>'thumbnail']);
        $this->db->join('post_images img','img.post_id = p.post_id','left');
        $q = $this->db->get('posts p');
        if($q->num_rows() > 0){
            $data['post'] = $q->row();
            $q->free_result();
            $this->db->where(['img.post_id'=>$q->row()->post_id, 'img.image_key'=>'gallery']);
            $i= $this->db->get('post_images img');
            if($i->num_rows() > 0){
                $data['img']=$i->result();
                $i->free_result();
            }
            $this->db->where(['post_slug'=>$slug]);
            $m= $this->db->get('post_meta');
            if($m->num_rows() > 0){
                $data['meta'] = $m->result();
            }
            $m->free_result();
        }else{
            $data['post'] = null;
        }
        return $data;
    }

    function save_post($data){
        $post['post_title'] = $this->input->post('title');
        $post['post_slug'] = str_replace(' ', '-', strtolower($this->input->post('title')));
        $post['category'] = $this->input->post('category');
        $post['post'] = $this->input->post('content');

        // $this->update_meta($meta, $data['slug']);
        if(isset($_GET['submit'])) $post['status'] = 1;
        if(empty($post['post_title']) || empty($post['category'])){
            return "field tidak boleh kosong";
        }
        $this->db->where('post_slug',$data['slug']);
        $this->db->update('posts', $post);

        if($post['post_slug'] != $data['slug']){
            $this->update_slug_meta($data['slug'], $post['post_slug']);
        }
        redirect('admin/posts/edit/'.$post['post_slug']);
    }

    function update_slug_meta($slug_awal, $slug_akhir){
        $data = ["post_slug"=>$slug_akhir];
        $this->db->where('post_slug', $slug_awal);
        $this->db->update('post_meta', $data);
    }

    function upsert_meta($slug){
        if(isset($_POST['meta_description'])){
            $data[]= array(
                'post_slug' => $slug,
                'meta_name' => "name",
                'meta_property' => "description",
                'meta_content' => $_POST['meta_description']
            );
        }elseif(isset($_POST['meta_tags'])){
            $tags = explode(",", $_POST['meta_tags']);
            foreach($tags as $r){
                $data[]= array(
                    'post_slug' => $slug,
                    'meta_name' => "property",
                    'meta_property' => "article:tag",
                    'meta_content' => $r
                );
            }
        }elseif(isset($_POST['meta_image'])){
            $data[] = array(
                'post_slug' => $slug,
                'meta_name'=>"property",
                'meta_property' => "og:image", 
                'meta_content' => $_POST['meta_image']
            );
        }
        if(isset($data)){
            foreach($data as $mt){
                $this->check_duplicate($mt, $slug);
            }
        }
    }

    function check_duplicate($data, $slug){
        $where = $data;
        unset($where['meta_content']);
        $this->db->select('meta_id');
        $this->db->where($where);
        $this->db->limit(1);
        $q = $this->db->get('post_meta');
        if($q->num_rows() > 0){
            if($data['meta_property'] == 'article:tag'){
                $this->insert_new_meta($data, $slug);
            }else{
                $this->update_meta($data, $slug);
            }
        }else{
            $this->insert_new_meta($data, $slug);
        }
        return false;
    }

    function update_meta($data, $slug){
        $where = $data;
        unset($where['meta_content']);
        $this->db->where($where);
        $this->db->update('post_meta', $data);
    }

    function insert_new_meta($data, $slug){
        $this->db->insert('post_meta', $data);
    }

    function get_metas($type){
        if($_GET){
            $default['data'] = null;
            $slug = $this->input->get("slug");
            if($slug != ""){
                $this->db->where("post_slug", $slug);
                $q=$this->db->get("post_meta");
                if($q && $type == "json") $default['data'] = $q->result();
            }
        }
        return json_encode($default);
    }

    function delete_meta($slug){
        if(isset($_GET['id'])){
            $this->db->where(["post_slug"=>$slug, "meta_id"=>$_GET['id']]);
            $this->db->delete('post_meta');
            echo "success";
        }
    }

// TOUR DESTINATION
    /*function get_post_tour_destination()
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
    }*/
    
// END TOUR DESTINATION
// RENTAL
    /*function get_post_rental()
    {
    	$page = (isset($_GET['p']))?$_GET['p']:0; // page position
        $this->db->where(['cat.category_slug'=>'car-rental']);
        $this->db->select(['p.post_title as title','p.post as content','p.date_added as created','u.username as author']);
        $this->db->join('post_categories cat','cat.category_id = p.category_id','left');
        $this->db->join('users u','u.user_id = p.user_id','left');
        $q = $this->db->get('posts p');
        if($q->num_rows() > 0) return $q->result();
        return null;
    }*/

// END RENTAL
}
// end of file