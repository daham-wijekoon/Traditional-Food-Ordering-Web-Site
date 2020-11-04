<?php 
	/**
	 * 
	 */
	class Admin extends CI_Controller{
		
		public function index(){
			$this->load->model('Model_user');
            $data['viewOrder']=$this->Model_user->viewOrders();
			$this->load->view('Admin/dashboard',$data);

		}
	}
?>