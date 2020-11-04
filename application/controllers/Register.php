<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function RegisterUser(){
		$this->form_validation->set_rules('fname','First Name','required');
		$this->form_validation->set_rules('lname','Last Name','required');
		$this->form_validation->set_rules('age','Age','required');
		$this->form_validation->set_rules('contact_no','Contact No.','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[register.email]');
		$this->form_validation->set_rules('pword','Password','required');
		$this->form_validation->set_rules('cword','Confirm Password','required|matches[pword]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Register');
		}else{
			$this->load->model('Model_user');
			$respose=$this->Model_user->insertUserdata();

			if ($respose) {
				$this->session->set_flashdata('msg','Registered Successfully!');
				redirect('Home/Register');
			}else{
				$this->session->set_flashdata('msg','Something went Wrong!');
				redirect('Home/Register');
			}
		}
	}

}
