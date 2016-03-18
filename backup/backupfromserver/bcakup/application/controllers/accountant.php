<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class accountant extends CI_Controller 
{

	public function __construct() 
	{
     parent::__construct();
    $this->load->model('accountant_model');
	
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
             $this->load->view('account/accountant',$data);
			 }else
			 {
			 redirect('/account/accounant','refresh');

			 }
		  }
	   }	
    else{
	
		 if($this->checksession()==1)
		 redirect('/account/accountant','refresh');
		 else
		 $this->load->view('account/accountant');    
		}
	}
	public function accountantprofile()
	{
	   if($this->checksession()==1)
	   {
	    $getid= $this->session->userdata('accountantid');
		$data=array('id'=>$getid);
$userdata["userinfo"]=$this->accountant_model->leftright_join("accountant.id,accountant.name,accountant.email,accountant.country_name,accountant.state,accountant.postcode,accountant.address,accountant.phone","accountant","country", "accountant.country_id = country.id", "left",'accountant.id',$getid);
$userdata["name"]=$userdata["userinfo"][0]->name;
	    $this->load->view('account/accountant/header_layout',$userdata);
		$this->load->view('account/accountant/dispaly_profile',$userdata);
		$this->load->view('account/accountant/footer_layout');
	   }else
	   {
	    redirect('/account','refresh');
	   }
	}
	public function deletepats($id)
	{
	   if($this->checksession()==1)
	  {
	     $this->user_model->row_delete_with_othertable("parts",array("id"=>$id));
		 redirect('/account/displayinvoice','refresh');
	  }else
	  {
	  redirect('/account','refresh');
	  }
	}
	public function deletecus($id)
	{
	  if($this->checksession()==1)
	  {
	     $this->user_model->row_delete(array("id"=>$id));
		 redirect('/account/displayinvoices','refresh');
	  }else
	  {
	  redirect('/account','refresh');
	  }
	}
public function adduser()
 {
	 if($this->checksession()==1)
	 {
	   if($_POST)
	   {

	          $getdata=$this->accountantprofile();
			  if(!empty($getdata))
			  $userdata["regerror"]=$getdata;
			  else
			  {
			  $data=array("name"=>$this->input->post('ename'),"email"=>$this->input->post('remail'),"password"=>'',"phone"=>$this->input->post('ephone'),"country_id"=>$this->input->post('admincountry'),"address"=>$this->input->post('eaddress'),"type"=>$this->input->post('usertype'),"state"=>$this->input->post("estate"),"postcode"=>$this->input->post("epostcode"));
			 $this->user_model->insert_data("users",$data);
			 redirect('/account/displayinovices','refresh');
			  }
			  
	  }
	      $userdata["type"]="add";
	      $userdata["usertype"]="accountant";
	      $userdata["title"]="Add Invoice";
	      
		  $userdata["country"]=$this->country_model->getdatawithcondition('id,country_name',array("id"=>'13'));
          $getid= $this->session->userdata('accountantid');
		  $data=array('id'=>$getid);
		  $headdata["userinfo"]=$this->accountant_model->get_info('users',$data);
          $userdata["name"]=$headdata["userinfo"][0]->name;
	      $this->load->view('account/accontant/header_layout',$userdata);
		  $headdata["userinfo"]="";
          $this->load->view('account/accontant/edit_profile',$userdata);	
	      $this->load->view('account/accontant/footer_layout');
	 }
	 else
	 {
	     redirect('/account','refresh');
	 }
	}
	private function sendemail()
	{
	     $config = Array(
         'protocol' => 'smtp',
         'smtp_host' => 'ssl://smtp.googlemail.com',
         'smtp_port' => 465,
         'smtp_user' => '',
         'smtp_pass' => '',
         'mailtype'  => 'html', 
         'charset'   => 'iso-8859-1');
         $this->load->library('email', $config);
         $this->email->set_newline("\r\n");

         $this->email->from('manojjoshi.joshi@gmail.com', 'manoj joshi');
         $this->email->to('manojjoshi574@yahoo.in');

         $this->email->subject('Account varification mail');
         $this->email->message('hi manoj'); 


        $result = $this->email->send();
			  
	
	
	}
	public function editprofile($id=NULL)
	{
      if($this->checksession()==1)
	   {
	          
		      $getid= $this->session->userdata('adminid');
              $getid=(is_null($id)?(isset($_POST['userid'])?$_POST['userid']:$getid):$id);
			  $page=is_null($id)?'adminpage':'cuspage';
			  $checkcount=$this->user_model->countresult(array('id'=>$getid));
			  if($checkcount==0){redirect('/admin/admininner','refresh');}
		 
	    if($_POST)
		{
			  $getdata=$this->adminprofile();
			  if(!empty($getdata))
			  $userdata["regerror"]=$getdata;
			  else
			  {
			  $data=array('id !='=>$getid,'email'=>$_POST['remail']);
			  $count=$this->user_model->has_record('users',$data);
			  if($count!=0)
			  $userdata["regerror"]="This email address already exist";
			  else
			  {
	$data=array('email'=>$_POST['remail'],'name'=>$_POST['ename'],'password'=>$_POST['epassword'],'phone'=>$_POST['ephone'],'country_id'=>$_POST['admincountry'],'address'=>$_POST['eaddress'],'state'=>$_POST['estate'],'postcode'=>$_POST['epostcode'],'last_update'=>date("Y-m-d H:i:s",strtotime("+5 hours")));
	$this->user_model->update_info('users','id',$getid,$data);
			  
			  if(isset($_POST["forpage"]) && $_POST["forpage"]=="cuspage")
			  redirect('/admin/displayuser','refresh');
			  else
			  redirect('/admin/userprofile','refresh');
			  }
			  }
		}
		
$data=array('id'=>$getid);
$userdata["userinfo"]=$this->user_model->leftright_join("users.id,users.name,users.email,users.phone,users.password,users.country_id,users.address,users.type,country.country_name,users.state,users.postcode","users","country", "users.country_id = country.id", "left",'users.id',$getid);
	     
		 $userdata["country"]=$this->country_model->getdatawithcondition('id,country_name',array("id"=>'13'));
		 $userdata["type"]="edit";
		 $userdata["usertype"]=$userdata["userinfo"][0]->type;
	     $userdata["title"]="Edit Profile";
         $userdata["name"]=$userdata["userinfo"][0]->name;
		 $userdata["userid"]=$getid;
		 $userdata["forpage"]=$page;
		 $this->load->view('admin/inneradmin/header_layout',$userdata);
		 $this->load->view('admin/inneradmin/edit_profile',$userdata);
		 $this->load->view('admin/inneradmin/footer_layout');
		
	   }else
	   {
	    redirect('/admin','refresh');
	   }
	}
	public function adminlogout()
	{
	$this->session->sess_destroy();
	redirect('/admin','refresh');
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

		$userdata["name"]=$userdata["userinfo"][0]->name;
	    $this->load->view('admin/inneradmin/header_layout',$userdata);
		$this->load->view('admin/inneradmin/index');
		$this->load->view('admin/inneradmin/footer_layout');
		}
		else
		redirect('/admin','refresh');
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
		  }}
		  
	private function geterrorinpars()
	{
	
	    $this->form_validation->set_rules(
              'pname', 'Name',
              'required|max_length[100]',
              array(
                'required'      => 'You have not provided %s.'
                ));
		  $this->form_validation->set_rules('pquantity', 'Quantity', 'required|max_length[100]|numeric|xss_clean');
		  $this->form_validation->set_rules('pprice', 'Price', 'required|max_length[10]|numeric|xss_clean');
		  $this->form_validation->set_rules('pdetails', 'Details', 'required|max_length[1000]');
          
	      if($this->form_validation->run() == FALSE)
                return validation_errors();
                else
				return "";
	}
	
	private function adminprofile()
	{ $this->form_validation->set_rules(
              'ename', 'Name',
              'required|max_length[100]',
              array(
                'required'      => 'You have not provided %s.'
                ));
		  $this->form_validation->set_rules('ephone', 'Phone', 'required|min_length[10]|max_length[15]');
		  $this->form_validation->set_rules('eaddress', 'Address', 'required|max_length[1000]');
		  $this->form_validation->set_rules('estate', 'State', 'required|max_length[50]');
          $this->form_validation->set_rules('epostcode', 'Postcode', 'required|min_length[2]|max_length[10]');
          if($_POST["formtype"]=="add")
		  {
		   $this->form_validation->set_rules('remail', 'Email', 'required|valid_email|is_unique[users.email]');
		  }else{
		  $this->form_validation->set_rules('epassword', 'Password', 'trim|min_length[6]|required');
		  $this->form_validation->set_rules('remail', 'Email', 'required|valid_email');
		      }
	      
	            if($this->form_validation->run() == FALSE)
                return validation_errors();
                else
				return "";

	}
}


?>