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
    function insert_post($data)
    {
        $this->db->insert('posts',$data);
        return $this->db->insert_id();
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

    function get_tour_destinations($start, $limit){
        $this->db->limit(abs($limit), abs($start));
        $this->db->where(['cat.category_slug'=>'tour-destination']);
        $this->db->select(['posts.post_id as id','posts.post_title as title','img.image_value as thumbnail']);
        $this->db->join('post_categories cat','cat.category_id = posts.category_id','left');
        $this->db->join('post_images img','img.image_id = posts.post_id','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            return $query->result();
        }
        return null;
    }
}
