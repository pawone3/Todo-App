<?php

class Projects extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		if(!$this->session->userdata('logged_in')) {

			$this->session->set_flashdata('no_access','You cant access it');
			redirect('home/index');
		}
	}



	public function index() {

		$data['projects']=$this->Project_model->get_projects();
		$data['main_view']='projects/index';
		$this->load->view('layouts/main',$data);

		
	}




	public function display($project_id) {

		$data['project_data']=$this->Project_model->get_project($project_id);
		$data['main_view']='projects/display';
		$this->load->view('layouts/main',$data);

	}




	public function create() {

		$this->form_validation->set_rules('project_name','project name','trim|required');
		$this->form_validation->set_rules('project_body','project body','trim|required');


		if($this->form_validation->run()==FALSE) {

			$data['main_view']='projects/create_project';
			$this->load->view('layouts/main',$data);
		} else {

			$data=array(

				'project_user_id'=>$this->session->userdata('user_id'),
				'project_name'=>$this->input->post('project_name'),
				'project_body'=>$this->input->post('project_body')
			);

			if($this->Project_model->create_project($data)) {

				$this->session->set_flashdata('Project_created','project created successfully');
				redirect('Projects/index');
			}
		}
	}




	public function edit($project_id) {

		$this->form_validation->set_rules('project_name','project name','trim|required');
		$this->form_validation->set_rules('project_body','project body','trim|required');

		if($this->form_validation->run()==FALSE) {

			$data['main_view']='projects/edit_project';
			$data['project_data']=$this->Project_model->get_project($project_id);
			$this->load->view('layouts/main',$data);
		}

		else {

			$data=array(
				
				'project_name'=>$this->input->post('project_name'),
				'project_body'=>$this->input->post('project_body')
			);

			// $project_id=$this->input->post('name');

			if($this->Project_model->edit_project($data,$project_id)) {

				$this->session->set_flashdata('Project_edited','project edited successfully');
				redirect('Projects/index');
			}
		}
	}



	public function delete($project_id) {

		if($this->Project_model->delete_project($project_id)) {

				$this->session->set_flashdata('Project_deleted','project deleted successfully');
				redirect('Projects/index');
			}
	}

}