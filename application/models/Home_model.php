<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

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
	public function check_user_exist($usr) //checks ajax requests
	{
	 $this->db->where("username",$usr);
	 $query=$this->db->get("user_accounts");
	 if($query->num_rows()>0)
	 {
	  return true;
	 }
	 else
	 {
	  return false;
	 }
	}

	public function insert_user($details = array())
	{	

		$data = array(
						'username' 		=> $this->input->post('user'),
						'password' 	=> $this->input->post('pass'),
			);

		$query=$this->db->insert('user_accounts', $data);

		if($query)
		{
			$response = "sucessfully registered";
		}
		else
		{
			$response = "Failed to register";
		}
		return $response;
	}
	
}












