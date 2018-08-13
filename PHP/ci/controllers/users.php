<?php
class Users extends CI_Controller
{
	public function login()
	{

//Getting input from post
//$this->input->post('username');

		//Validate From
		$this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
		$this->form_validation->set_rules('password','Password','trim|required');

		//Matching and Custom Message
		$this->form_validation->set_rules('pass2','CPassword','trim|required|matches[password]',array('matches'=>'Password Should Match'));


	/*	$this->form_validation->set_rules('nums','Numbers','required|regex_match[/[0-9]/]'); */

		//Check if post qualify all rules

		if($this->form_validation->run() == FALSE) {
			$data = array(
				'errors' => validation_errors(),
			);

		//Start Session
		$this->session->set_flashdata($data);
		redirect('home');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('user_model');
			$user_id = $this->user_model->login_user($username,$password);

			if($user_id){

				$user_data = array(
					'id'=>$user_id,
					'username'=>$username,
					'logged_in'=>true
				);

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('login_suc','YOu are now logged in');
				redirect('home/index');
			}else{

				$this->session->set_flashdata('login_failed','YOu are not logged in');
				redirect('home/index');
			}


		}
	}
}
