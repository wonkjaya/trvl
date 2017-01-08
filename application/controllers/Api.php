<?php
class Api extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function notif_upload(){
		if($_POST){
			$data['image_key'] = $this->input->post("imageKey");
			$data['image_value'] = str_replace('http:','',$this->input->post("url"));
			$data['width'] = $this->input->post("width");
			$data['height'] = $this->input->post("height");
			$data['type'] = $this->input->post("resource_type");
			$data['post_id'] = $this->input->post("post_id");
			$this->db->insert("post_images", $data);
			echo "success";
		}
	}
}

// end of file