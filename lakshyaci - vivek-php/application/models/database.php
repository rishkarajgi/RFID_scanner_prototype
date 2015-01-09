<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Database extends CI_Model
{
  public function _construct()
  {

    parent::_construct();
  }
	public function login($data)
	{
		$this->load->library('encrypt');
		$username=$data['email'];
		$password=$data['rollno'];
		$this->db->where('email',$username);
		

		$query=$this->db->get('student_data');
		if($query->num_rows ==1)
		{
			$row=$query->row();
			$pass=$row->roll_number;
			if($password==$pass)
			{
			$data=array(
				  'name' =>$row->name,
				  'id'   =>$row->userid,
				  'telno'=>$row->mobile,
          		  'email'=>$row->email,
				  'result'=>true
				);
			$this->session->set_userdata($data);
			$data['result']=true;
			$this->db->where('rollno',$row->roll_number);
			$query2=$this->db->get('mess');
			if($query2->num_rows == 1)
				$data['messdays']=$query2->row()->messdays;
			else
			{
				$query3 = array('rollno' =>$row->roll_number,
    	                        'messdays'=>0);
				$this->db->insert('mess',$query);

			}


		    }
		    else
		    {
		    	$data['result']=false;
		    }
			
		}
		else
			$data['result']=false;
		return $data;
	}
    
    public function register($data)
    {
        $this->load->library('encrypt');
        $this->db->where('email',$data['email']);
		$query=$this->db->get('users');
		if($query->num_rows==0)
		{
    	$username=$data['email'];
    	$password=$data['password'];
    	$conpassword=$data['conpassword'];
    	$name=$data['name'];
    	$telno=$data['telno'];
        $collegename=$data['collegename'];
        $enpassword=$this->encrypt->encode($password);
    	$query = array('email' => $username,
    	                'password' =>$enpassword,
    	                'name' =>$name,
    	                'phno' =>$telno,
                       'college' => $collegename);

    	$this->db->insert('users',$query);
        }

    }


}



?>