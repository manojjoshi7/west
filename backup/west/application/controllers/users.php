<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller 
{

	public function __construct() 
	{
     parent::__construct();
    $this->load->model('user_model');
	$this->load->model('country_model');
    }
	public function index()
	{

	   if($_POST)
	   {	
	      if($_POST["submitbut"]=="Sign In")
		  {
		     $getdata= $this->adminlog();
		     if(!empty($getdata))
			 {
			 $data["logerror"]=$getdata;
             $this->load->view('admin/loginregsec',$data);
			 }else
			 {
			 redirect('/users/admininner','refresh');

			 }
		  }
	   }	
    else{
	
		 if($this->checksession()==1)
		 redirect('/users/admininner','refresh');
		 else
		 $this->load->view('admin/loginregsec');    
		}
	}
	public function userprofile()
	{
	   if($this->checksession()==1)
	   {
	    $getid= $this->session->userdata('adminid');
		$data=array('id'=>$getid);
$userdata["userinfo"]=$this->user_model->leftright_join("users.id,users.name,users.email,users.phone,users.address,country.country_name","users","country", "users.country_id = country.id", "left",'users.id',$getid);

	    $this->load->view('admin/inneradmin/header_layout',$userdata);
		$this->load->view('admin/inneradmin/dispaly_profile',$userdata);
		$this->load->view('admin/inneradmin/footer_layout');
	   }else
	   {
	    redirect('/users','refresh');
	   }
	}
	public function adduser()
	{
	 if($_POST)
	 {
	          $getdata=$this->adminprofile();
			  if(!empty($getdata))
			  $userdata["regerror"]=$getdata;
			  else
			  {
			  $data=array("name"=>$this->input->post('ename'),"email"=>$this->input->post('remail'),"password"=>$this->input->post('epassword'),"phone"=>$this->input->post('ephone'),"country_id"=>$this->input->post('admincountry'),"address"=>$this->input->post('eaddress'),"type"=>$this->input->post('usertype'));
			 $getid= $this->user_model->insert_data("users",$data);
			 $this->session->set_userdata('adminid', $getid);
			  redirect('/users/admininner','refresh');
			  }
			  
	 }
	 $userdata["type"]="add";
	 $userdata["usertype"]="customer";
	 $userdata["title"]="Add Customer";
	 $userdata["country"]=$this->country_model->getdata('id,country_name');    
     $this->load->view('admin/inneradmin/edit_profile',$userdata);	
	 
	}
	public function editprofile()
	{
      if($this->checksession()==1)
	   {
	   
	    if($_POST)
		{
			  $getdata=$this->adminprofile();
			  if(!empty($getdata))
			  $userdata["regerror"]=$getdata;
			  else
			  {
			  $getid= $this->session->userdata('adminid');
			  $data=array('id !='=>$getid,'email'=>$_POST['remail']);
			  $count=$this->user_model->has_record('users',$data);
			  if($count!=0)
			  $userdata["regerror"]="This email address already exist";
			  else
			  {
	$data=array('email'=>$_POST['remail'],'name'=>$_POST['ename'],'password'=>$_POST['epassword'],'phone'=>$_POST['ephone'],'country_id'=>$_POST['admincountry'],'address'=>$_POST['eaddress'],'last_update'=>date("Y-m-d H:i:s",strtotime("+5 hours")));
	$this->user_model->update_info('users','id',$getid,$data);
			  redirect('/users/userprofile','refresh');
			  }
			  }
		}
		 
	     $getid= $this->session->userdata('adminid');
		 $data=array('id'=>$getid);
$userdata["userinfo"]=$this->user_model->leftright_join("users.id,users.name,users.email,users.phone,users.country_id,users.address,users.type,country.country_name","users","country", "users.country_id = country.id", "left",'users.id',$getid);
	     $userdata["country"]=$this->country_model->getdata('id,country_name');    
		 $userdata["type"]="edit";
		 $userdata["usertype"]=$userdata["userinfo"][0]->type;
	     $userdata["title"]="Edit Profile";

		 $this->load->view('admin/inneradmin/header_layout',$userdata);
		 $this->load->view('admin/inneradmin/edit_profile',$userdata);
		 $this->load->view('admin/inneradmin/footer_layout');
		
	   }else
	   {
	    redirect('/users','refresh');
	   }
	}
	public function adminlogout()
	{
	$this->session->sess_destroy();
	redirect('/users','refresh');
	}
	public function checksession()
	{
	  $getid= $this->session->userdata('adminid');
	  return (empty($getid)?0:1);
	}
	public function admininner()
	{
	    if($this->checksession()==1)
		{
		$getid= $this->session->userdata('adminid');
		$data=array('id'=>$getid);
		$userdata["userinfo"]=$this->user_model->get_info('users',$data);
	    $this->load->view('admin/inneradmin/header_layout',$userdata);
		$this->load->view('admin/inneradmin/index');
		$this->load->view('admin/inneradmin/footer_layout');
		}
		else
		redirect('/users','refresh');
	}
	public function adminlog()
	{
	      $this->form_validation->set_rules('lemail', 'Email', 'required|valid_email');
		  $this->form_validation->set_rules('lpassword', 'Password', 'required');
          
          if($this->form_validation->run() == FALSE)
          return validation_errors();
		  else
		  {
			$data=array('email'=>$_POST['lemail'],'password'=>$_POST['lpassword']);
			$count=$this->user_model->has_record('users',$data);
			if($count==0)
			return "Enter valid email address and password";
			else
			$this->session->set_userdata('adminid', $count);
		  }
          
	
	}
	public function adminprofile()
	{

		
		      $this->form_validation->set_rules(
              'ename', 'Name',
              'required|min_length[5]|max_length[100]',
              array(
                'required'      => 'You have not provided %s.'
                ));
		  $this->form_validation->set_rules('ephone', 'Phone', 'required|min_length[10]|max_length[15]');
		  $this->form_validation->set_rules('eaddress', 'Address', 'required|max_length[1000]');
		  $this->form_validation->set_rules('epassword', 'Password', 'trim|min_length[6]|required');
          
          if($_POST["formtype"]=="add")
		  {
		   $this->form_validation->set_rules('erpassword', 'Confirm Password', 'trim|min_length[6]|required|matches[epassword]');
		  $this->form_validation->set_rules('remail', 'Email', 'required|valid_email|is_unique[users.email]');
		  }else{
		  $this->form_validation->set_rules('remail', 'Email', 'required|valid_email');}
	      
	            if($this->form_validation->run() == FALSE)
                return validation_errors();
                else
				return "";

	}
}


?>