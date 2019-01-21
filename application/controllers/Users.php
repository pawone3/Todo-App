<?php

class Users extends CI_Controller {

	public function login() {

		$this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]');
		$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[4]|matches[password]');

		// echo $this->input->post('username');

		if($this->form_validation->run()==false){

			$data=array(

				'errors'=>validation_errors()
			);
			$this->session->set_flashdata($data);
			redirect('home');
		}
		else {
			// echo "got the user name";
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

				$this->session->set_flashdata('login_success','You are logged in');

				redirect('home/index');

			} else {

				$this->session->set_flashdata('login_failed','You are not logged in');
				redirect('home/index');				
			} 
		}

		

	}
}