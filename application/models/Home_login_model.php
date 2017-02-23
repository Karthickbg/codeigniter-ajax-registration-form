<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_login extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function check_login($list = array()) 
	{
		$un=$this->input->post('user');
		$pw=$this->input->post('pass');

		$this->db->where("username",$un);
		$this->db->where("password",$pw);
		$query=$this->db->get("user_accounts");
		if($query->num_rows()==1)
		 {
		  $response="logged in";
		 }
		 else
		 {
		  $response="Not found";
		 }
		 return $response;
}
	
	
}












