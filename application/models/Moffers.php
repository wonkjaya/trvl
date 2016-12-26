<?php
class Moffers extends CI_Model
{
    function get_posts($number = 10, $start = 0)
    {
        $this->db->select(['p.*','u.username as author']);
        $this->db->from('posts p');
        $this->db->join('users u','u.user_id = p.user_id','left');
        $this->db->where('active',1);
        $this->db->order_by('date_added','desc');
        $this->db->limit($number, $start);
        $query = $this->db->get();
        return $query->result_array();
    }
	function search_posts($query)
	{
		$this->db->select();
		$this->db->from('posts');
		$this->db->like("post_title", $query, 'both');
		$this->db->or_like("post", $query, 'both');
		$this->db->order_by('date_added', 'desc');
		$query = $this->db->get();
		return $query->result_array();
	}
    function get_post_count()
    {
        $this->db->select()->from('posts')->where('active',1);
        $query = $this->db->get();
        return $query->num_rows;
    }
    function get_post($post_id)
    {
        $this->db->select();
        $this->db->from('posts');
        $this->db->where(array('active'=>1,'post_id'=>$post_id));
        $this->db->order_by('date_added','desc');
        $query = $this->db->get();
        return $query->first_row('array');
    }

    function get_tour_destinations($start, $limit){
        $data = [];
        $data['cat'] = $this->get_category('tour-destination');

        $this->db->limit(abs($limit), abs($start));
        $this->db->where(['cat.category_slug'=>'tour-destination']);
        $this->db->select(['posts.post_id as id','posts.post_title as title','posts.post_slug as slug','img.image_value as thumbnail']);
        $this->db->join('post_categories cat','cat.category_id = posts.category_id','left');
        $this->db->join('post_images img','img.post_id = posts.post_id','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            $data['tour_destinations'] = $query->result();
        }else{
            $data['tour_destinations'] = null;
        }
        return $data;
    }

    function get_tour_guides($start, $limit){
        $data = [];
        $data['cat'] = $this->get_category('tour-guide');

        $this->db->limit(abs($limit), abs($start));
        $this->db->where(['cat.category_slug'=>'tour-guide']);
        $this->db->select(['posts.post_id as id','posts.post_title as title','posts.post_slug as slug','img.image_value as thumbnail']);
        $this->db->join('post_categories cat','cat.category_id = posts.category_id','left');
        $this->db->join('post_images img','img.post_id = posts.post_id','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            $data['tour_guide'] = $query->result();
        }else{
            $data['tour_guide'] = null;
        }
        return $data;
    }

    function get_testimonies($start, $limit){
        $this->db->limit(abs($limit), abs($start));
        $this->db->where(['cat.category_slug'=>'testimony']);
        $this->db->select(['posts.post_id as id','posts.post_title as title', 'posts.post as content'/*,'img.image_value as thumbnail'*/]);
        $this->db->join('post_categories cat','cat.category_id = posts.category_id','left');
        // $this->db->join('post_images img','img.image_id = posts.post_id','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            return $query->result();
        }
        return null;
    }

    function get_car_rent($start, $limit){
        $data = [];
        $data['cat'] = $this->get_category('car-rental');

        $this->db->limit(abs($limit), abs($start));
        $this->db->where(['cat.category_slug'=>'car-rental']);
        $this->db->select(['posts.post_id as id','posts.post_title as title','posts.post_slug as slug','img.image_value as thumbnail']);
        $this->db->join('post_categories cat','cat.category_id = posts.category_id','left');
        $this->db->join('post_images img','img.post_id = posts.post_id','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            $data['car_rental'] = $query->result();
        }else{
            $data['car_rental'] = null;
        }
        return $data;
    }

    function get_category($slug){
        $this->db->limit(1);
        $this->db->where(['cat.category_slug'=>$slug]);
        $query = $this->db->get('post_categories cat');
        if($query->num_rows() > 0 ){
            return $query->result();
        }
        return null;
    }

    function get_tour_destination($slug){
        $data = [];

        $this->db->limit(1);
        $this->db->where(['posts.post_slug' => $slug]);
        $this->db->select([
            'posts.post_id as id',
            'posts.post_title as title',
            'posts.post_slug as slug',
            'posts.post as content',
            'posts.date_added as created',
            'users.username as author',
            ]);
        $this->db->join('post_categories cat','cat.category_id = posts.category_id','left');
        $this->db->join('users','users.user_id = posts.user_id','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            $data['tour_destination'] = $query->row();
        }else{
            $data['tour_destination'] = null;
        }
        return $data;
    }
}
