<?php 
class contact_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 
 public function add_contact()
 {
  $data=array(
    'name'=>$this->input->post('name'),
	'email_id'=>$this->input->post('email'),
	'mobile'=>$this->input->post('phone'),
	'subject'=>$this->input->post('subject'),
	'message'=>$this->input->post('message')
	
  );
 
  $this->db->insert('contact',$data);
    $this->load->view('contact');
  
 }
 
 
}
?>