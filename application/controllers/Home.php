<?php
defined('BASEPATH') OR exit('Acess denied');

class Home extends CI_Controller {

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
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model('Home_login_model');


    }

	public function index() 
	{
		$this->load->view('login');
	}
	
	public function log_usr(){
			$this->form_validation->set_rules('user', 'Email', 'required');
			$this->form_validation->set_rules('pass', 'Password', 'required');
			if ($this->form_validation->run())  
			{
				$data['create_user_form_errors'] ="";
				
				
				$data['message']=$this->Home_login->check_login($_POST);					 
				
				$this->load->view('result',$data); 
			}		
	}

}
