<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function LoginUser(){
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('pword','Password','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home');
		}else{
			$this->load->model('Model_user');
			$result=$this->Model_user->loginUser();

			if ($result!=false) {

				$user_data=array(
					'user_id'=>$result->ID,
					'fname'=>$result->fname,
					'lname'=>$result->lname,
					'age'=>$result->age,
					'contact_no'=>$result->contact_no,
					'email'=>$result->email,
					'loggedin'=>TRUE
				);

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('welcome','Welcome Back');
				redirect('Admin/index');
				
			}else{
				$this->session->set_flashdata('errmsg','Wrong email or password');
				redirect('Home/index');
			}
		}
	}

	public function LogoutUser(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('fname');
		$this->session->unset_userdata('lname');
		$this->session->unset_userdata('age');
		$this->session->unset_userdata('contact_no');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('loggedin');
		redirect('Home/index');
	}

}


