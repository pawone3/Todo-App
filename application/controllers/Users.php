<?php

class Users extends CI_Controller {



	public function register() {


		$this->form_validation->set_rules('firstname','firstname','trim|required|min_length[1]');
		$this->form_validation->set_rules('lastname','lastname','trim|required|min_length[1]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|min_length[1]');
		$this->form_validation->set_rules('username','Username','trim|required|min_length[1]');//|callback_unique_username
		$this->form_validation->set_rules('password','Password','trim|required|min_length[1]');
		$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[1]|matches[password]'); 


		if($this->form_validation->run()==FALSE) {

			$data['main_view']='register_view';
			$this->load->view('layouts/main',$data); 
		} else {

				$result=$this->User_model->create_user();

				if($result) {

					$this->session->set_flashdata('register_success','Successfully Registered');
					redirect('home/index');
				} 

				else {

				}
		}


	}




	public function login() {

		$this->form_validation->set_rules('username','Username','trim|required|min_length[1]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[1]');
		// $this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[1]|matches[password]');

		// echo $this->input->post('username');

		if($this->form_validation->run()==false){

			$data=array(

				'errors'=>validation_errors()
			);
			$this->session->set_flashdata($data);
			redirect('home');
		}
		else {
			
			$username=$this->input->post('username');
			$password=$this->input->post('password');

			$user_id=$this->User_model->login_user($username,$password);

			if($user_id) {

				$user_data=array(

					'user_id'=>$user_id,
					'username'=>$username,
					'logged_in'=>true
				);

				$this->session->set_userdata($user_data);
				// $this->session->unset_userdata($user_data);

				$this->session->set_flashdata('login_success','You are logged in');

				// $data['main_view']="admin_view";

				// $this->load->view('layouts/main',$data);
				redirect('Home/index');

			} else {

				$this->session->set_flashdata('login_failed','You are not logged in');
				redirect('home/index');				
			} 
		}

	}



	public function logout() {

		$this->session->sess_destroy();
		redirect('home');
	}



	public function unique_username($str) {


		$ans=$this->User_model->username_check($str);
		return $ans;
		
	}

}