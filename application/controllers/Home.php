<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("MainController.php");

class Home extends MainController {

	public function index(){
		$this->loadView('home');
	}
}
