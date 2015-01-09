<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller
{
	public function _construct()
	{

		parent::_construct();
	}
	public function login2()
	{
	   try {
	   	  $data["login_form"]=$this->config->item("login_rules");
	   	  if($this->input->post('submit'))
	   	  {
                 
            $this->load->library("formvalidator");
           if($this->formvalidator->isValid("login"))
           {
                   $this->load->model("database");
                   $sendarray=array('email' =>$this->input->post('email') ,
                                     'rollno'=>$this->input->post('rollno')
                                     );        
                                     
                   $result=$this->database->login($sendarray);
                   if($result['result']==true)
                   	 return $this->load->view("home",$result);
                   else
                   	 return $this->load->view("login",$data);
            }

           else
           {
           $this->data["status"]->message = validation_errors();
           $this->data["status"]->success = FALSE;
           }
           
          }

	   	  return $this->load->view("login",$data);
	   		
	   	} catch (Exception $err) {
	   		log_message("error", $err->getMessage());
            return show_error($err->getMessage());
	   		
	   	}	
	}
	public function register()
	{

		try
		{
		$data["register_form"]=$this->config->item("register_rules");
		if($this->input->post('submit'))
	   	  {
                 
            $this->load->library("formvalidator");
           if($this->formvalidator->isValid("register"))
           {
                   $this->load->model("database");
                   $sendarray=array('email' =>$this->input->post('email') ,
                                     'password'=>$this->input->post('password'),
                                     'conpassword' =>$this->input->post('conpassword'),
                                     'name' =>$this->input->post('name'),
                                     'telno' =>$this->input->post('telno'),
                                     'collegename'=>$this->input->post('collegename') );
                   $this->database->register($sendarray);
                   $this->load->helper('url');
                   header("Location: ".site_url("login/login2"));
            }
           else
           {
           $this->data["status"]->message = validation_errors();
           $this->data["status"]->success = FALSE;
           }
          }
	   	  return $this->load->view("register",$data);
	   		
	   	} catch (Exception $err) {
	   		log_message("error", $err->getMessage());
            return show_error($err->getMessage());
	   		
	   	}	
		
	}
  public function logout()
  {
    $this->session->sess_destroy();
    $this->load->helper('url');
    header("Location: ".site_url("login/login2"));
  }
  public function showhome()
  {
    $data=array(
          'name' =>"Test",
          'id'   =>"Test",
          'telno'=>"Test",
          'email'=>"Test",
          'college'=>"Test",
          'result'=>true
        );
    return $this->load->view("home",$data);
  }
}




?>