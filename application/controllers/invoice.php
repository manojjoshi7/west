<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class invoice extends CI_Controller 
{

	public function __construct() 
    {
      parent::__construct();
      $this->load->model('invoices_model');
	  $this->load->model('user_model');
	  $this->load->model('country_model');
    }
	public function viewinvoice($invoice_id)
	{
	   if($this->checksession()==1)
	   {
		
	$userdata["invoice"]=$this->user_model->getdatawithcondition('invoice_id,billdate,duedate,address,total,tax,subtotal,blance,paid',"invoice",array('invoice_id'=>$invoice_id));
	
	//print_r($userdata["invoice"]);die;
	
	$userdata["invoicerows"]=$this->user_model->leftright_join("invoice_details.sku,invoice_details.qty,parts.name,parts.details,parts.saleprice","invoice_details","parts", "invoice_details.sku = parts.sku", "inner",'invoice_details.invoice_id',$invoice_id);
	   
	  // print_r($userdata["invoicerows"]);
	   //die;
	     $getid= $this->session->userdata('adminid');
		 $data=array('id'=>$getid);
		 $userdata["userinfo"]=$this->user_model->get_info('users',$data);
		 $userdata["name"]=$userdata["userinfo"][0]->name;
         $this->load->view('admin/inneradmin/header_layout',$userdata);
	     $this->load->view('admin/inneradmin/view_invoice',$userdata);
		 $this->load->view('admin/inneradmin/footer_layout');
	   }else
	   {
	   
	     redirect('/admin','refresh');		 
	   }

	}
	public function displayInvoices()
	{
	    if($this->checksession()==1)
		{
		 
		   $config = array();
           $config["base_url"] = base_url() . "invoice/displayInvoices";
           $config["total_rows"] = $this->user_model->countresult(NULL,"invoice");
           $config["per_page"] = 6;
           $config["uri_segment"] = 3;
		   $this->pagination->initialize($config);
         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
   
  $userdata["invoice"]=$this->user_model->getalldata("invoice_id,billdate,duedate,address,total,tax,subtotal,blance,paid","invoice",$config["per_page"], $page);
		 $getid= $this->session->userdata('adminid');
		 $data=array('id'=>$getid);
		 $userdata["userinfo"]=$this->user_model->get_info('users',$data);
		 $userdata["name"]=$userdata["userinfo"][0]->name;
		 
		 $userdata["links"] = $this->pagination->create_links();

		 
		 $this->load->view('admin/inneradmin/header_layout',$userdata);
	     $this->load->view('admin/inneradmin/display_invoices',$userdata);
		 $this->load->view('admin/inneradmin/footer_layout');
		 }
		 else
		 {
          redirect('/admin','refresh');		 
		 }
	}
	public function saveIncoiceInfo()
	{
			if($this->checksession()==1)
			{
			$total=trim(str_replace('$','',$_POST["hidsubtotal"]));
			$tax=trim(str_replace('$','',$_POST["hidgst"]));
			$subtotal=trim(str_replace('$','',$_POST["hidty"]));
			$blance=trim(str_replace('$','',$_POST["hidduepay"]));
			
			
			$blance=($blance==""?0:$blance);
			$paid=trim(str_replace('$','',$_POST["paid"]));
			
			$invoice_data=array("invoice_id"=>$_POST["readinvoice"],"billdate"=>$_POST["billdate"],"duedate"=>$_POST["duedate"],"address"=>$_POST["useraddress"],"total"=>$total,"tax"=>$tax,"subtotal"=>$subtotal,"blance"=>$blance,"paid"=>$paid);
			$this->user_model->insert_data("invoice",$invoice_data);
			foreach($_POST["sku"] as $key=>$value)
			{
				 if(empty($_POST["sku"][$key]) || empty($_POST["qty"][$key]))
				 {
				 continue;
				 }
				 else
				 {
				 
				 $invoice_details=array("invoice_id"=>$_POST["readinvoice"],"sku"=>$_POST["sku"][$key],"qty"=>$_POST["qty"][$key]);
				 $this->user_model->insert_data("invoice_details",$invoice_details);
				 }
			}
			redirect('/invoice/displayInvoices','refresh');
			}
			else
			{
				  redirect('/admin','refresh');		 
			}
	}
	public function get_sku_info()
	{
	        $data= file_get_contents("php://input");
			$data = strip_tags($data);
            $clean_input = trim($data);
            $data = array();
            parse_str($clean_input, $data);
            
		   $result=$this->invoices_model->filterdata("id,name,sku,saleprice,company_name,details",'parts','sku',$data["sku"]);
		   echo "<ul class='filter' style='list-style-type: none;
  width:50%;position:absolute;background-color:#000000;color:#FFFFFF;overflow-y:scroll;	height:100px;'>";
		   foreach($result as $row)
		   {
		   //\'".$row->sku."\',\'".$row->name."\',\'".$row->saleprice."\'
		   echo "<li onclick='display(".$row->sku.",\"".$row->name."\",\"".$row->details."\",".$row->saleprice.")'><div><span>SKU:{$row->sku}</span><span>&nbsp;|&nbsp;</span><span>Name:{$row->name}</span><span>&nbsp;|&nbsp;</span><span>Company Name:{$row->company_name}</span></div></li>";
		   
		   }
		   echo "</ul>";
	}
	public function createInvoice()
	{
	    if($this->checksession()==1)
		{
		  
	     $userdata["title"]="Add Invoices";
	     $userdata["type"]="add";
		 $getid= $this->session->userdata('adminid');
		 $data=array('id'=>$getid);
		 $userdata["userinfo"]=$this->user_model->get_info('users',$data);
		 $userdata["name"]=$userdata["userinfo"][0]->name;
		 
		 
		 $this->load->view('admin/inneradmin/header_layout',$userdata);
	     $this->load->view('admin/inneradmin/create-invoice',$userdata);
		 $this->load->view('admin/inneradmin/footer_layout');
		 }
		 else
		 {
          redirect('/admin','refresh');		 
		 }
	}
	public function checksession()
	{
	  $getid= $this->session->userdata('adminid');
	  return (empty($getid)?0:1);
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

}


?>