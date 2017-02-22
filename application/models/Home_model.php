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
	public function check_user_exist($usr)
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
	
	/*public function check_login($user)
	{
		
		$query= $this->db->query(SELECT * FROM 'user_accounts' WHERE username='$user');
		if($query->num_rows()>0){
			return 1;
		}
		else {
			return 0;
		}
	}*/
}
