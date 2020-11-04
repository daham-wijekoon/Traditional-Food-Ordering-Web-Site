<?php 
	/**
	 * 
	 */
	class Order extends CI_Controller{
		
		public function index(){
			$this->load->view('order');
		}
		public function InsertOrder(){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('food_name', 'Food name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		



		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('order');
                }
                else
                { 
                        $this->load->model('Model_user');
                        $response=$this->Model_user->insertOrder();

                        if ($response) {
                        	$this->session->set_flashdata('msg','New Order Entered!');
                        	redirect('Order/index');
                        }else{
                                $this->session->set_flashdata('msg','Something went wrong!');
                                redirect('Order/index');
                        }
                }
	}
	}
?>