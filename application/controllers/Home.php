<?php
class Home extends CI_Controller {

	//No endpoint at /user/
	public function index() {
		$this->output->set_content_type('application/json', 'UTF-8');
		echo json_encode(array("error" => "If you are looking for a specific endpoint, that endpoint is not available"));
	}

}
