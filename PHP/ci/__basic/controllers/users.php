<?php
/**
 * Created by PhpStorm.
 * User: Archit
 * Date: 8/12/2018
 * Time: 1:45 PM
 */

class Users extends CI_Controller {

	/**
	 * @return object
	 */
	public function login()
	{

		$this->form_validation->set_rules('username','Username','trim|required|min_length[2]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[2]');

//$this->input->post('username');
	}
}
