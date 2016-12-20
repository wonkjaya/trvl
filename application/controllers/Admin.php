<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("AdminController.php");

class Admin extends AdminController {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function index(){
		$this->dashboard();
	}

	function dashboard(){
		if(!$this->check_permissions('author'))//when the user is not an andmin and author
        {
            redirect('admin/login');
        }
		$this->loadView('dashboard');
	}

	function form(){
		$this->loadView('forms');
	}

}
