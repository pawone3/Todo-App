<?php

class Project_model extends CI_Model {

	public function get_projects() {

		$query=$this->db->get('projects');
		return $query->result();
	}


	public function get_project($id) {

		$this->db->where('id',$id);
		$query=$this->db->get('projects');

		return $query->row();
	}

	public function create_project($data) {

		$insert_query=$this->db->insert('projects',$data);
		return $insert_query;
	} 

	public function edit_project($data,$id) {


		$this->db->where('id',$id);
		$result=$this->db->update('projects',$data);

		return $result;
	}


	public function delete_project($id) {

		
		$this->db->where('id',$id);
		$result=$this->db->delete('projects');

		return $result;
	}

	public function get_user_projects($user_id) {

		$this->db->where('project_user_id',$user_id);
		$query=$this->db->get('projects');

		return $query->result();
	}

}