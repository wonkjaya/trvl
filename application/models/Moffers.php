<?php
class Moffers extends CI_Model
{

    /*preview only*/
    function get_posts($slug){
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
        $this->db->join('post_categories cat','cat.category_slug = posts.category','left');
        $this->db->join('users','users.username = posts.author','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            return $data = $query->row();
        }else{
            return false;
        }
    }
/* not used */
    /*function get_posts($number = 10, $start = 0)
    {
        $this->db->select(['p.*','u.username as author']);
        $this->db->from('posts p');
        $this->db->join('users u','u.username = p.author','left');
        $this->db->where('active',1);
        $this->db->order_by('date_added','desc');
        $this->db->limit($number, $start);
        $query = $this->db->get();
        return $query->result_array();
    }*/
    /*function search_posts($query)
    {
        $this->db->select();
        $this->db->from('posts');
        $this->db->like("post_title", $query, 'both');
        $this->db->or_like("post", $query, 'both');
        $this->db->order_by('date_added', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }*/
    /*function get_post_count()
    {
        $this->db->select()->from('posts')->where('active',1);
        $query = $this->db->get();
        return $query->num_rows;
    }*/
    /*function get_post($post_id)
    {
        $this->db->select();
        $this->db->from('posts');
        $this->db->where(array('active'=>1,'post_id'=>$post_id));
        $this->db->order_by('date_added','desc');
        $query = $this->db->get();
        return $query->first_row('array');
    }*/

/* tour destinations(many) */
    function get_tour_destinations($start, $limit){
        $data = [];
        $data['cat'] = $this->get_category('tour-destination');

        $this->db->limit(abs($limit), abs($start));
        $this->db->where(['cat_parent.category_slug'=>'tour-destination']);
        $this->db->select(['posts.post_id as id','posts.post_title as title','posts.post_slug as slug','img.image_value as thumbnail', 'cat_child.category_name as category']);
        $this->db->join('post_categories cat_child','cat_child.category_slug = posts.category','left');
        $this->db->join('post_categories cat_parent','cat_parent.category_id = cat_child.parent','left');
        $this->db->join('post_images img','img.post_id = posts.post_id','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            $data['tour_destinations'] = $query->result();
        }else{
            $data['tour_destinations'] = null;
        }
        return $data;
    }
/* tour destination(one) */
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
        $this->db->join('post_categories cat','cat.category_slug = posts.category','left');
        $this->db->join('users','users.username = posts.author','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            return $data = $query->row();
        }else{
            return false;
        }
    }
/* related tour */
    function get_related_tour_destinations($except_slug=''){
        $data = [];

        $this->db->limit(5);
        $this->db->where([
            'posts.post_slug <>' => $except_slug, 
            'cat_parent.category_slug' => 'tour-destination'
        ]);
        $this->db->select([
            'posts.post_id as id',
            'posts.post_title as title',
            'posts.post_slug as slug',
            'SUBSTR(posts.post,1, 20) as content',
            'img.image_value as thumbnail'
            ]);
        $this->db->join('post_images img','img.post_id = posts.post_id','left');
        $this->db->join('post_categories cat_child','cat_child.category_slug = posts.category','left');
        $this->db->join('post_categories cat_parent','cat_parent.category_id = cat_child.parent','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            $data['related_destinations'] = $query->result();
        }else{
            $data['related_destinations'] = null;
        }
        return $data;
    }
/* tour request */
    function new_tour_request($tour_destination){
        $data = [
            "type"=>'tour',
            "email"=>$this->input->post('email'),
            "telp_number"=>$this->input->post('telp'),
            "name"=>$this->input->post('name'),
            "from_city"=>$this->input->post('location'),
            "topic"=>$tour_destination,
            "lodging"=>$this->input->post('lodging'),
            "time"=>$this->input->post('time'),
            "description"=>$this->input->post('description')
        ];
        // print_r($data);exit;
        
        if(empty($data['email']) and empty($data['telp_number'])){
          $data['error'] = 'Harap Cantumkan Info Kontak Anda Untuk Konfirmasi';
          return $data;  
        }
        if(empty($_POST['g-recaptcha-response'])){
          $data['error'] = 'Mohon masukkan Captcha Kembali';
          return $data;  
        }
        $this->db->insert('request_offers', $data);
        $this->session->set_flashdata('success', 'Terima Kasih. Permintaan Anda Akan Kami Proses Secepatnya.');
        redirect('tour_destination/'.$tour_destination);
    }
    
/* tour guides */
    function get_tour_guides($start, $limit){
        $data = [];
        $data['cat'] = $this->get_category('tour-guide');

        $this->db->limit(abs($limit), abs($start));
        $this->db->where(['cat.category_slug'=>'tour-guide']);
        $this->db->select(['posts.post_id as id','posts.post_title as title','posts.post_slug as slug','img.image_value as thumbnail']);
        $this->db->join('post_categories cat','cat.category_slug = posts.category','left');
        $this->db->join('post_images img','img.post_id = posts.post_id','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            $data['tour_guide'] = $query->result();
        }else{
            $data['tour_guide'] = null;
        }
        return $data;
    }
/* related tour guides */
    function get_related_tour_guide($except_slug=''){
        $data = [];

        $this->db->limit(5);
        $this->db->where(['posts.post_slug <>' => $except_slug, 'posts.category'=>'tour-guide']);
        $this->db->select([
            'posts.post_id as id',
            'posts.post_title as title',
            'posts.post_slug as slug',
            'SUBSTR(posts.post,1, 20) as content',
            'img.image_value as thumbnail'
            ]);
        $this->db->join('post_images img','img.post_id = posts.post_id','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            $data['related_guide'] = $query->result();
        }else{
            $data['related_guide'] = null;
        }
        return $data;
    }
/* tour destination(one) */
    function get_tour_guide($slug){
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
        $this->db->join('post_categories cat','cat.category_slug = posts.category','left');
        $this->db->join('users','users.username = posts.author','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            $data = $query->row();
        }else{
            $data = null;
        }
        return $data;
    }

/* testimony */
    function get_testimonies($start, $limit){
        $this->db->limit(abs($limit), abs($start));
        $this->db->where(['cat.category_slug'=>'testimony']);
        $this->db->select(['posts.post_id as id','posts.post_title as title', 'posts.post as content'/*,'img.image_value as thumbnail'*/]);
        $this->db->join('post_categories cat','cat.category_slug = posts.category','left');
        // $this->db->join('post_images img','img.image_id = posts.post_id','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            return $query->result();
        }
        return null;
    }

/* rent cars (many) */
    function get_car_rent($start, $limit){
        $data = [];
        $data['cat'] = $this->get_category('car-rental');

        $this->db->limit(abs($limit), abs($start));
        $this->db->where(['cat.category_slug'=>'car-rental']);
        $this->db->select(['posts.post_id as id','posts.post_title as title','posts.post_slug as slug','img.image_value as thumbnail']);
        $this->db->join('post_categories cat','cat.category_slug = posts.category','left');
        $this->db->join('post_images img','img.post_id = posts.post_id','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            $data['car_rental'] = $query->result();
        }else{
            $data['car_rental'] = null;
        }
        return $data;
    }
/* get car (one)*/
    function get_car($slug){
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
        $this->db->join('post_categories cat','cat.category_slug = posts.category','left');
        $this->db->join('users','users.username = posts.author','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            $data = $query->row();
        }else{
            $data = null;
        }
        return $data;
    }
/* related car */
    function get_related_car($except_slug=''){
        $data = [];

        $this->db->limit(5);
        $this->db->where(['posts.post_slug <>' => $except_slug, 'posts.category'=>'car-rental']);
        $this->db->select([
            'posts.post_id as id',
            'posts.post_title as title',
            'posts.post_slug as slug',
            'SUBSTR(posts.post,1, 20) as content',
            'img.image_value as thumbnail'
            ]);
        $this->db->join('post_images img','img.post_id = posts.post_id','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            $data['related_car'] = $query->result();
        }else{
            $data['related_car'] = null;
        }
        return $data;
    }
/* car request */
    function new_car_request($car){
        $data = [
            "type"=>'car',
            "email"=>$this->input->post('email'),
            "telp_number"=>$this->input->post('telp'),
            "name"=>$this->input->post('name'),
            "from_city"=>$this->input->post('location'),
            "topic"=>$car,
            "driver"=>$this->input->post('driver'),
            "time"=>$this->input->post('time'),
            "description"=>$this->input->post('description')
        ];
        // print_r($data);exit;
        
        if(empty($data['email']) and empty($data['telp_number'])){
          $data['error'] = 'Harap Cantumkan Info Kontak Anda Untuk Konfirmasi';
          return $data;  
        }
        if(empty($_POST['g-recaptcha-response'])){
          $data['error'] = 'Mohon masukkan Captcha Kembali';
          return $data;  
        }
        $this->db->insert('request_offers', $data);
        $this->session->set_flashdata('success', 'Terima Kasih. Permintaan Anda Akan Kami Proses Secepatnya.');
        redirect('car_rent/'.$car);
    }

/* category */
    function get_category($slug){
        $this->db->limit(1);
        $this->db->where(['cat.category_slug'=>$slug]);
        $query = $this->db->get('post_categories cat');
        if($query->num_rows() > 0 ){
            return $query->result();
        }
        return null;
    }
    
/* gallery */
    function get_gallery($slug){
        $data = [];

        $this->db->limit(8);
        $this->db->where(['posts.post_slug' => $slug, 'img.image_key'=>'gallery']);
        $this->db->select([
            'img.image_value as image',
        ]);
        $this->db->join('post_images img','posts.post_id = img.post_id','left');
        $query = $this->db->get('posts');
        if($query->num_rows() > 0 ){
            $data['images'] = $query->result();
        }else{
            $data['images'] = null;
        }
        return $data;
    }

/* metas */
    function get_metas($slug){
        $this->db->where(['post_slug'=>$slug]);
        $query = $this->db->get('post_meta');
        if($query->num_rows() > 0 ){
            return $query->result();
        }
        return null;
    }

}
