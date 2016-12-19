<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function loadView($view, $bdata=[], $hdata=[], $fdata=[]){
		$this->load->view('admin/templates/header', $hdata);
		$this->load->view('admin/'.$view, $bdata);
		$this->load->view('admin/templates/footer', $fdata);
	}

	function check_permissions($required){//checking current user's permission
		
        $user_type = $this->session->userdata('user_type');//curren user
        if($required == 'user'){//requirment is user 
            if($user_type){return TRUE;}//all user have permission
        }
        elseif($required == 'author')//when requirement is author
        {
            if($user_type == 'author' || $user_type == 'admin')//author and admin have the permission
            {
                return TRUE;
            }
        }
        elseif($required == 'admin')//when required is admin
        {
            if($user_type == 'admin'){return TRUE;}//only admin have the permission
        }
    }
}
