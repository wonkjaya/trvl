<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function checkagent(){
		$this->load->library('user_agent');

		if ($this->agent->is_mobile('iphone')){
			return '_smart';
		}elseif ($this->agent->is_mobile()){
			// return '_mobile';
			return '_smart';
		}else{
			return '_web';
		}
	}

	public function loadView($view, $data=[]){
		$group = $this->checkagent();
		$this->load->view($group.'/'.$view, $data);
	}
}
