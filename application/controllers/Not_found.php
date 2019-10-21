<?php
class Not_found extends CI_Controller {
  public function index() {
    $this->output->set_content_type('application/json', 'UTF-8');
    $this->output->set_status_header(404);
    echo json_encode(array("error" => "Resource not found"));
  }
}
