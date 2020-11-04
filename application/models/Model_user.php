<?php 

	class Model_user extends CI_Model{
		
		function insertUserdata(){
			$data=array(
				'fname' => $this->input->post('fname',TRUE),
				'lname' => $this->input->post('lname',TRUE),
				'age' => $this->input->post('age',TRUE),
				'contact_no' => $this->input->post('contact_no',TRUE),
				'email' => $this->input->post('email',TRUE),
				'password' => $this->input->post('pword',TRUE)
			);

			return $this->db->insert('register',$data);
		}

		function loginUser(){
			$email=$this->input->post('email');
			$pword=$this->input->post('pword');

			$this->db->where('email',$email);
			$this->db->where('password',$pword);

			$respond = $this->db->get('register');
			if ($respond->num_rows()==1) {
				return $respond->row(0);

			}else{
				return false;	
			}
		}

		function insertComment(){
			$data=array(
				'parent_comment_id' => $_POST["comment_id"],
				'comment' => $this->input->post('comment_content',TRUE),
				'comment_sender_name' => $this->input->post('comment_name',TRUE)
				
			);
			return $this->db->insert('reviews',$data);

		}

		function viewComment(){

			$query=$this->db->get('reviews');
			return $query;
		}

		function viewReplyComment($parent_id=0, $marginLeft=0){
			$this->db->where('parent_comment_id',$parent_id);
			$respond = $this->db->get('reviews');

			return $respond;

			if ($parent_id==0) {
				$marginleft=0;
			}else{
				$marginleft=$marginleft+48;
			}
		}

			function insertCommentTamil(){
			$data=array(
				'parent_comment_id' => $_POST["comment_id"],
				'comment' => $this->input->post('comment_content',TRUE),
				'comment_sender_name' => $this->input->post('comment_name',TRUE)
				
			);
			return $this->db->insert('reviews_tamil',$data);

		}

		function viewCommentTamil(){

			$query=$this->db->get('reviews_tamil');
			return $query;
		}

		function viewReplyCommentTamil($parent_id=0, $marginLeft=0){
			$this->db->where('parent_comment_id',$parent_id);
			$respond = $this->db->get('reviews_tamil');

			return $respond;

			if ($parent_id==0) {
				$marginleft=0;
			}else{
				$marginleft=$marginleft+48;
			}
		}

		function insertCommentMuslim(){
			$data=array(
				'parent_comment_id' => $_POST["comment_id"],
				'comment' => $this->input->post('comment_content',TRUE),
				'comment_sender_name' => $this->input->post('comment_name',TRUE)
				
			);
			return $this->db->insert('reviews_muslim',$data);

		}

		function viewCommentMuslim(){

			$query=$this->db->get('reviews_muslim');
			return $query;
		}

		function viewReplyCommentMuslim($parent_id=0, $marginLeft=0){
			$this->db->where('parent_comment_id',$parent_id);
			$respond = $this->db->get('reviews_muslim');

			return $respond;

			if ($parent_id==0) {
				$marginleft=0;
			}else{
				$marginleft=$marginleft+48;
			}
		}

		function insertOrder(){
			$data=array(
				'name' => $this->input->post('name',TRUE),
				'food_name' => $this->input->post('food_name',TRUE),
				'email' => $this->input->post('email',TRUE),
				'description' => $this->input->post('description',TRUE)
			);

			return $this->db->insert('orders',$data);
		}

		function viewOrders(){
		$query=$this->db->get('orders');
		return $query;
	
	}

	}
?>