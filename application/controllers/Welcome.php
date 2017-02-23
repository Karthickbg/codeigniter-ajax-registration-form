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
	 	
	public function reg_user()
	{

           		$this->form_validation->set_rules('display_name', 'Name', 'required|trim');  
          		$this->form_validation->set_rules('user', 'Email', 'required|valid_email|trim');  
           		$this->form_validation->set_rules('pass', 'Password', 'required|min_length[8]|max_length[15]');  
           		$this->form_validation->set_rules('pass2','Retype Password','required|matches[pass]');  
           		$this->form_validation->set_rules('mobile', 'Phone', 'required|min_length[10]');

           		if ($this->form_validation->run())  
           		{ 	
           			$data['create_user_form_errors'] ="";
					$data['message']=$this->Home_model->insert_user($_POST);					 
           			$this->load->view('result',$data);          			
           		}
           		else
           		{
           			$data['message']="";
           			$data['create_user_form_errors'] = validation_errors();
           			$this->load->view('result',$data);
           		}	

    }

}
