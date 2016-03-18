<?php 
class contact_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 
 public function add_contact()
 {
  $data=array(
    'sender'=>$this->input->post('comp_name'),
	'email'=>$this->input->post('email'),
	'phone'=>$this->input->post('phone'),
	'subject'=>$this->input->post('subject'),
	'message'=>$this->input->post('message')
	
	
	
  );
 
  $this->db->insert('contact_queries',$data);
    $this->load->view('contactus');
  
 }
 
 
}
?>