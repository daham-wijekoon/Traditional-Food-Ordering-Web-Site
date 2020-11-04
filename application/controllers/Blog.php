<?php 
	/**
	 * 
	 */
	class Blog extends CI_Controller{
		
		public function index(){
			$this->load->model('Model_user');
	        $data['viewComment']=$this->Model_user->viewComment();
			$this->load->view('blog',$data);
		}

		public function InsertComment(){
	
		$this->form_validation->set_rules('comment_name','Name','required');
		$this->form_validation->set_rules('comment_content','Comment','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('blog');
		
		}else{
			
			$this->load->model('Model_user');
			$respose=$this->Model_user->insertComment();

			if ($respose) {
				$this->session->set_flashdata('msg','Comment Saved!');
				redirect('Blog/index');

				$this->load->model('Model_user');
				$result=$this->Model_user->viewReplyComment();

				



			}else{
				$this->session->set_flashdata('msg','Something went Wrong!');
				redirect('Blog/index');
			}
		}

	}


		public function tamil(){
			$this->load->model('Model_user');
	        $data['viewCommentTamil']=$this->Model_user->viewCommentTamil();
			$this->load->view('tamil_foods',$data);
		}
		public function InsertCommentTamil(){
	
		$this->form_validation->set_rules('comment_name','Name','required');
		$this->form_validation->set_rules('comment_content','Comment','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('tamil_foods');
		
		}else{
			
			$this->load->model('Model_user');
			$respose=$this->Model_user->insertCommentTamil();

			if ($respose) {
				$this->session->set_flashdata('msg','Comment Saved!');
				redirect('Blog/tamil');

				$this->load->model('Model_user');
				$result=$this->Model_user->viewReplyCommentTamil();

				



			}else{
				$this->session->set_flashdata('msg','Something went Wrong!');
				redirect('Blog/tamil');
			}
		}

	}


		public function muslim(){
			$this->load->model('Model_user');
	        $data['viewCommentMuslim']=$this->Model_user->viewCommentMuslim();
			$this->load->view('muslim_foods',$data);
		}
		public function InsertCommentMuslim(){
	
		$this->form_validation->set_rules('comment_name','Name','required');
		$this->form_validation->set_rules('comment_content','Comment','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('muslim_foods');
		
		}else{
			
			$this->load->model('Model_user');
			$respose=$this->Model_user->insertCommentMuslim();

			if ($respose) {
				$this->session->set_flashdata('msg','Comment Saved!');
				redirect('Blog/muslim');

				$this->load->model('Model_user');
				$result=$this->Model_user->viewReplyCommentMuslim();

				



			}else{
				$this->session->set_flashdata('msg','Something went Wrong!');
				redirect('Blog/muslim');
			}
		}

	}


	}
?>