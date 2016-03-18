<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller 
{

	public function __construct() 
	{
     parent::__construct();
    $this->load->model('user_model');
	$this->load->model('country_model');
    }
	public function viewpart($id)
	{
	   if($this->checksession()==1)
	    {
          $getid= $this->session->userdata('adminid');
		  $data=array('id'=>$getid);
		  $userdata["userinfo"]=$this->user_model->get_info('users',$data);
		  $userdata["name"]=$userdata["userinfo"][0]->name;
		 
		  if(is_null($id))
		  {redirect('/admin/admininner','refresh');}
		  else
		 {
		   $userdata["title"]="View Part";
	       
		   $userdata["partid"]=$id;
		   $userdata["parts"]=$this->user_model->get_info("parts",array("id"=>$id));
		   $this->load->view('admin/inneradmin/header_layout',$userdata);
		   $this->load->view('admin/inneradmin/view_part',$userdata);
		   $this->load->view('admin/inneradmin/footer_layout');
		   }
		
		
		}else
		{
		redirect('/admin','refresh');
		
		}
	
	
	}
	public function editpart($id=NULL)
	{
	    
		if($this->checksession()==1)
	    {
		   if($_POST)
		   {
	          $getdata=$this->geterrorinpars();
		      if(!empty($getdata))
		      $userdata["regerror"]=$getdata;	 
		      else
			  {
			 
			  $data=array('id !='=>$_POST["partid"],'name'=>$this->input->post('pname'));
			  $count=$this->user_model->has_record("parts",$data);
              $data=array('id !='=>$_POST["partid"],'sku'=>$this->input->post('partssku'));
			  $skucount=$this->user_model->has_record("parts",$data);
 				  
				  if($count!=0)
				  {
				    $userdata["regerror"]="This Part name already exist";
				  }else if($skucount!=0)
				  {
				    $userdata["regerror"]="This SKU number already exist"; 
				  }
				  else
				  {
                      
					  $imgfile= $this->user_model->getdatawithcondition('name',"parts",array('id'=>$_POST["partid"]));
					  $imagename= str_replace(' ','_',$imgfile[0]->name).".jpg";
					  $imgethumbname=str_replace(' ','_',$imgfile[0]->name)."_thumb.jpg";
					 
					  if(file_exists('assets/parts_images/'.$imagename))
					  unlink('assets/parts_images/'.$imagename);
					  if(file_exists('assets/parts_images/thumb/'.$imgethumbname))
					  unlink('assets/parts_images/thumb/'.$imgethumbname);
					  $getdata= $this->add_img("uploadimg",$this->input->post('pname'));
					  if(!empty($getdata))
					  {
					  $userdata["regerror"]=$getdata;
					  }
					  else
					  {
				$this->thumb_img($this->input->post('pname'));
				$this->user_model->update_info("parts","id",$_POST["partid"],array("name"=>$this->input->post('pname'),"company_name"=>$this->input->post('pcompanyname'),"size"=>$this->input->post('partssize'),"weight"=>$this->input->post('partsweight'),"sku"=>$this->input->post('partssku'),"quantity"=>$this->input->post('pquantity'),"price"=>$this->input->post('pprice'),"saleprice"=>$this->input->post('psaleprice'),"details"=>$this->input->post('pdetails')));
				
				redirect('/admin/displaypart','refresh');
					  }
				  }
			  }
		   }
		 
		 $getid= $this->session->userdata('adminid');
		 $data=array('id'=>$getid);
		 $userdata["userinfo"]=$this->user_model->get_info('users',$data);
		 $userdata["name"]=$userdata["userinfo"][0]->name;
		 
		 if(is_null($id) && !isset($_POST['partid']))
		 {redirect('/admin/admininner','refresh');}
		 else
		 {
		   $userdata["title"]="Edit Parts";
	       $userdata["type"]="edit";
		   $userdata["partid"]=(is_null($id)?$_POST['partid']:$id);
		   $userdata["parts"]=$this->user_model->get_info("parts",array("id"=>$id));
		   $this->load->view('admin/inneradmin/header_layout',$userdata);
		   $this->load->view('admin/inneradmin/add_part',$userdata);
		   $this->load->view('admin/inneradmin/footer_layout');
		   }
	    }
		else
		{
		redirect('/admin','refresh');
		}
	}
	public function displaypart()
	{
	    if($this->checksession()==1)
		{
		 
		   $config = array();
           $config["base_url"] = base_url() . "admin/displaypart";
           $config["total_rows"] = $this->user_model->countresult(NULL,"parts");
           $config["per_page"] = 6;
           $config["uri_segment"] = 3;
		    $this->pagination->initialize($config);
         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
         
		 $userdata["parts"]=$this->user_model->getalldata("id,name,quantity,price,saleprice,details","parts",$config["per_page"], $page);
		 $getid= $this->session->userdata('adminid');
		 $data=array('id'=>$getid);
		 $userdata["userinfo"]=$this->user_model->get_info('users',$data);
		 $userdata["name"]=$userdata["userinfo"][0]->name;
		 
		 $userdata["links"] = $this->pagination->create_links();
		 
		 $this->load->view('admin/inneradmin/header_layout',$userdata);
		 $this->load->view('admin/inneradmin/display_parts',$userdata);
		 $this->load->view('admin/inneradmin/footer_layout');
		}else
		{
		redirect('/admin','refresh');
		}
	}
	private function add_img($field_name,$filename)
	{
	
	       $filename=str_replace(' ', '_', $filename);
		   $config['upload_path'] = 'assets/parts_images/';
           $config['allowed_types'] = 'gif|jpg|png';
           $config['max_size']	= '5000';
		   $config['file_name']	= $filename.".jpg";
           $config['image_width'] = 500;
		    $config['image_height'] =500;
		   $config['max_width'] = '3024';
           $config['max_height'] = '868';
           $this->load->library('upload', $config);
           $this->upload->do_upload($field_name);
	       
		   return $this->upload->display_errors();
	
	}
	private function thumb_img($filename)
	{
	    $filename=str_replace(' ', '_', $filename);
	    $config['image_library'] = 'gd2';
        $config['source_image']	= 'assets/parts_images/'.$filename.".jpg";
        $config['new_image'] = 'assets/parts_images/thumb/';
		$config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']	 =300;
        $config['height']	= 300;

        $this->load->library('image_lib', $config); 

        $this->image_lib->resize();
	
	}
	public function addpart()
	{
	    if($this->checksession()==1)
		{
		  
	     $userdata["title"]="Add Parts";
	     $userdata["type"]="add";
		 $getid= $this->session->userdata('adminid');
		 $data=array('id'=>$getid);
		 $userdata["userinfo"]=$this->user_model->get_info('users',$data);
		 $userdata["name"]=$userdata["userinfo"][0]->name;
		 if($_POST)
		 {
		   
		   $getdata=$this->geterrorinpars();
		   
		   if(!empty($getdata))
		   {
		   $userdata["regerror"]=$getdata;
	       }
		   else
		   {
		     $getdata= $this->add_img("uploadimg",$this->input->post('pname'));
		   	 if(!empty($getdata))
		     {
		      $userdata["regerror"]=$getdata;
	         }
			 else
			 {
			 $this->thumb_img($this->input->post('pname'));
		    $this->user_model->insert_data("parts",array("name"=>$this->input->post('pname'),"company_name"=>$this->input->post('pcompanyname'),"size"=>$this->input->post('partssize'),"weight"=>$this->input->post('partsweight'),"sku"=>$this->input->post('partssku'),"quantity"=>$this->input->post('pquantity'),"price"=>$this->input->post('pprice'),"saleprice"=>$this->input->post('psaleprice'),"details"=>$this->input->post('pdetails')));
		   redirect('/admin/displaypart','refresh');
		     }		 
		   }
		 }
		 $this->load->view('admin/inneradmin/header_layout',$userdata);
	     $this->load->view('admin/inneradmin/add_part',$userdata);
		 $this->load->view('admin/inneradmin/footer_layout');
		 }
		 else
		 {
          redirect('/admin','refresh');		 
		 }
	}
	public function displayuser()
	{
	    if($this->checksession()==1)
		{
		$getid= $this->session->userdata('adminid');
		$data=array('id'=>$getid);
		$userdata["userinfo"]=$this->user_model->get_info('users',$data);
		$userdata["name"]=$userdata["userinfo"][0]->name;
	    $this->load->view('admin/inneradmin/header_layout',$userdata);
	    
	    $userdata["customer"]=$this->user_model->leftright_join("users.id,users.name,users.email,users.phone,users.address,country.country_name,users.state,users.postcode","users","country","users.country_id = country.id", "left",'users.type !=','admin');
        $this->load->view('admin/inneradmin/dispaly_customer',$userdata);
		$this->load->view('admin/inneradmin/footer_layout');
		}else
		{
		redirect('/admin','refresh');
		}
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
			 redirect('/admin/admininner','refresh');

			 }
		  }
	   }	
    else{
	
		 if($this->checksession()==1)
		 redirect('/admin/admininner','refresh');
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
$userdata["userinfo"]=$this->user_model->leftright_join("users.id,users.name,users.email,country.country_name,users.state,users.postcode,users.address,users.phone","users","country", "users.country_id = country.id", "left",'users.id',$getid);
$userdata["name"]=$userdata["userinfo"][0]->name;
	    $this->load->view('admin/inneradmin/header_layout',$userdata);
		$this->load->view('admin/inneradmin/dispaly_profile',$userdata);
		$this->load->view('admin/inneradmin/footer_layout');
	   }else
	   {
	    redirect('/admin','refresh');
	   }
	}
	public function deletepats($id)
	{
	   if($this->checksession()==1)
	  {
	                 $imgfile= $this->user_model->getdatawithcondition('name',"parts",array('id'=>$id));
					 $imagename= str_replace(' ','_',$imgfile[0]->name).".jpg";
					 $imgethumbname=str_replace(' ','_',$imgfile[0]->name)."_thumb.jpg";
					 
					  if(file_exists('assets/parts_images/'.$imagename))
					  unlink('assets/parts_images/'.$imagename);
					  if(file_exists('assets/parts_images/thumb/'.$imgethumbname))
					  unlink('assets/parts_images/thumb/'.$imgethumbname);

	     $this->user_model->row_delete_with_othertable("parts",array("id"=>$id));
		 redirect('/admin/displaypart','refresh');
	  }else
	  {
	  redirect('/admin','refresh');
	  }
	}
	public function deletecus($id)
	{
	  if($this->checksession()==1)
	  {
	     $this->user_model->row_delete(array("id"=>$id));
		 redirect('/admin/displayuser','refresh');
	  }else
	  {
	  redirect('/admin','refresh');
	  }
	}
public function adduser()
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
			  $data=array("name"=>$this->input->post('ename'),"email"=>$this->input->post('remail'),"password"=>'',"phone"=>$this->input->post('ephone'),"country_id"=>$this->input->post('admincountry'),"address"=>$this->input->post('eaddress'),"type"=>$this->input->post('usertype'),"state"=>$this->input->post("estate"),"postcode"=>$this->input->post("epostcode"));
			 $this->user_model->insert_data("users",$data);
			 redirect('/admin/displayuser','refresh');
			  }
			  
	  }
	      $userdata["type"]="add";
	      $userdata["usertype"]="customer";
	      $userdata["title"]="Add Customer";
	      
		  $userdata["country"]=$this->country_model->getdatawithcondition('id,country_name',array("id"=>'13'));
          $getid= $this->session->userdata('adminid');
		  $data=array('id'=>$getid);
		  $headdata["userinfo"]=$this->user_model->get_info('users',$data);
          $userdata["name"]=$headdata["userinfo"][0]->name;
	      $this->load->view('admin/inneradmin/header_layout',$userdata);
		  $headdata["userinfo"]="";
          $this->load->view('admin/inneradmin/edit_profile',$userdata);	
	      $this->load->view('admin/inneradmin/footer_layout');
	 }
	 else
	 {
	     redirect('/admin','refresh');
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
			  $checkcount=$this->user_model->countresult(array('id'=>$getid),'users');
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
		  }
          
	
	}
	private function geterrorinpars()
	{
	
	    
	    $this->form_validation->set_rules('pquantity', 'Quantity', 'required|max_length[100]|numeric|xss_clean');
	    $this->form_validation->set_rules(
              'pname', 'Name',
              'required|max_length[100]',
              array(
                'required'      => 'You have not provided %s.'
                ));
           $this->form_validation->set_rules('pcompanyname', 'Compnay Name', 'required|max_length[1000]');
		   $this->form_validation->set_rules('partssize', 'Size', 'required|max_length[100]');		 		 
		   $this->form_validation->set_rules('partsweight', 'Weight', 'required|max_length[100]');		 		 
		   if($_POST["formtype"]=="add")
		   {
		   $this->form_validation->set_rules('partssku', 'Sku', 'required|max_length[100]|is_unique[parts.sku]');
		   }		 		 
		   $this->form_validation->set_rules('pquantity', 'Quantity', 'required|max_length[100]|numeric|xss_clean');
		   $this->form_validation->set_rules('pprice', 'Price', 'required|max_length[12]|numeric|xss_clean');
		   $this->form_validation->set_rules('psaleprice', 'Sale Price', 'required|max_length[12]|numeric|xss_clean');
		   $this->form_validation->set_rules('pdetails', 'Details', 'required|max_length[1000]');
          
	      if($this->form_validation->run() == FALSE)
                return validation_errors();
                else
				return "";
	}
	private function adminprofile()
	{

		
		      $this->form_validation->set_rules(
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