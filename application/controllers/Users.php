<?php
class Users extends CI_Controller {

	//No endpoint at /user/
	public function index() {
		$this->output->set_status_header(501);
	}

	//This function handles creation of new users
	public function create() {
		//Here's some work for @DrRoach
	}

}
