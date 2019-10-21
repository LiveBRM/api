<?php
class Tenants extends CI_Controller {

	//No endpoint at /tenants/
	public function index() {
		$this->output->set_status_header(501);
		$this->output->set_content_type('application/json', 'UTF-8');
		echo json_encode(array("error" => "No endpoint implimented"));
	}

	//This function handles creation of new tenants
	public function onboard() {
		$this->output->set_content_type('application/json', 'UTF-8');

		//Get user input - business details
		$common_name			= $this->input->post('common_name');
		$legal_name				= $this->input->post('legal_name');
		$phone_number_one	= $this->input->post('phone_number');
		$contact_email		= $this->input->post('contact_email');

		//Address
		$address_line_one	=	$this->input->post('address_line_one');
		$address_line_two	= $this->input->post('address_line_two');
		$city							= $this->input->post('city');
		$province					= $this->input->post('province');
		$postal_code			= $this->input->post('postal_code');
		$country					= $this->input->post('country');

		//Admin User Creation
		$admin_f_name			= $this->input->post('admin_f_name');
		$admin_l_name			=	$this->input->post('admin_l_name');
		$admin_email			= $this->input->post('admin_email');
		$admin_username		= $this->input->post('admin_username');
		$admin_password		= $this->input->post('admin_password');
		$admin_password_c	= $this->input->post('admin_password_confirm');

		/*
		*		Regular User Creation
		* It is not required to create a regular user at this stage
		*/

		$reg_f_name			= $this->input->post('reg_f_name');
		$reg_l_name			=	$this->input->post('reg_l_name');
		$reg_email			= $this->input->post('reg_email');
		$reg_username		= $this->input->post('reg_username');
		$reg_password		= $this->input->post('reg_password');
		$reg_password_c	= $this->input->post('reg_password_confirm');

		//Verify data was provided on all required fields
		$request_valid = true;
		foreach (array($common_name, $legal_name, $phone_number_one, $contact_email,
		$address_line_one, $city, $province, $postal_code, $country) as $input) {
			if ($input == "" || $input == NULL) {
				//The input is empty and therefore we must return a bad request to user
				$request_valid = true;
				break;
			}
		}
		if ($request_valid) {
			/*
			*	For now we are just going to return the form details.
			*	No validation or processing is happening right now.
			*	This needs to be fixed but this is just to test the form submit.
			*/

			$response = array(
				"business_common_name" => $common_name,
				"business_legal_name"	=> $legal_name,
				"phone_number" => $phone_number_one,
				"contact_email" => $contact_email,
				"address_line_one" => $address_line_one,
				"address_line_two" => $address_line_two,
				"city" => $city,
				"province" => $province,
				"postal_code" => $postal_code,
				"country" => $country,
				"admin_f_name" => $admin_f_name,
				"admin_l_name" => $admin_l_name,
				"admin_email" =>	$admin_email,
				"admin_username" => $admin_password,
				"admin_password" => $admin_password,
				"admin_password_c" => $admin_password_c,
				"reg_f_name" => $reg_f_name,
				"reg_l_name" => $reg_l_name,
				"reg_email" => $reg_email,
				"reg_username" => $reg_username,
				"reg_password" => $reg_password_c
			);

			echo json_encode($response);

		} else {
			//The request is bad.  Return bad request error
			$this->output->set_status_header(400);
			$response = array("err" => "One or more required fields were left empty");
			echo json_encode($response);
		}

	}

}
