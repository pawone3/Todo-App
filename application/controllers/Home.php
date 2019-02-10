<?php

class Home extends CI_Controller {


	public function index() {

		if($this->session->userdata('logged_in')) {

		$user_id=$this->session->userdata('user_id');
		$data['projects']=$this->Project_model->get_user_projects($user_id);
	}

		$data['main_view']="Home_view";

		$this->load->view('layouts/main',$data);
	}
}