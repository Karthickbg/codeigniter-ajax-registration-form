<?php
defined('BASEPATH') OR exit('Acess denied');

class Welcome extends CI_Controller {

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
		$this->load->model('Home_model');
    }

	public function index() 
	{
		$this->load->view('welcome_message');
	}

	public function check_user() //receives ajax requests
	{
		if (!$this->input->is_ajax_request()) 
			{ 
				exit('no valid req.'); 
			}

		$usr=$this->input->post('name');
		$result=$this->Home_model->check_user_exist($usr); //sending ajax data to model
		if($result)
		{
		  echo "false";
		}
		else
		{
		  echo "true";
		}
	}
	 	
	public function reg_user(){

           	
           	{
           		$data['message']= $this->input->post('display_name');   
        		$this->load->view('result',$data); 
           	}
       
	} 	
}

