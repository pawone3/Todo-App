<?php
 class Tasks extends CI_Controller {

 	public function display($task_id) {

 		$data['task']=$this->Task_model->get_task($task_id);
 		$data['main_view']='tasks/display';
 		$this->load->view('layouts/main',$data);
 	}

 	

 	public function create() {

		$this->form_validation->set_rules('task_name','Task name','trim|required');
		$this->form_validation->set_rules('task_body','Task body','trim|required');


		if($this->form_validation->run()==FALSE) {

			$data['main_view']='tasks/create_task';
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



 }