<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function loadView($view){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/'.$view);
		$this->load->view('admin/templates/footer');
	}
}
