<?php 

class User_model extends CI_Model {

	public function login_user($username,$password){//$username,$password


		$this->db->where('username',$username);

		$result=$this->db->get('users');

		$db_password=$result->row(0)->password;


		if(password_verify($password, $db_password)){
		
			return $result->row(0)->id;
		} else  {

			return false;
		}
	}



	public function create_user() {

		$options=['cost'=>10];
		$encrypted_password=password_hash($this->input->post('password'),PASSWORD_BCRYPT,$options);

		$data=array(

			'firstname'=>$this->input->post('firstname'),
			'lastname'=>$this->input->post('lastname'),
			'email'=>$this->input->post('email'),
			'username'=>$this->input->post('username'),
			'password'=>$encrypted_password
		);

		$result=$this->db->insert('users',$data);

		return $result;

	}



	public function username_check($str) {

		$this->db->where('username',$str);
		$result=$this->db->get('users');

		if($result->num_rows()>0){
		
			return false;
		} else  {

			return true;
		}
	}
	
}
