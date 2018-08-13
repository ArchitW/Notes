<?php
/**
 * Created by PhpStorm.
 * User: Archit
 * Date: 8/12/2018
 * Time: 1:37 PM
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		//echo "this is home controller";

		$data['main_view'] = "home_view";
	$this->load->view("layout/main",$data);
	}
}
