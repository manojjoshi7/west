<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('contact_model');
    }

	public function index()
	{
	
		$this->load->library('googlemaps');
// Initialize our map. Here you can also pass in additional parameters for customising the map (see below)

// Create the map. This will return the Javascript to be included in our pages <head></head> section and the HTML code to be
// placed where we want the map to appear.

$config = array();
$config['center'] = '2, 177-181, Newton Road
            Wetherill Park 2164, Australia ';
			$config['zoom']='15';
			$config['animation']="bounce";
$this->googlemaps->initialize($config);

$marker = array();
$marker['position'] = '2/177-181, Newton Road
            Wetherill Park 2164, Australia ';
			$marker['infowindow_content']='Big West Diesel Service PTY Ltd 2/177-181 Newton Road Wetherill Park 2164';
           
$this->googlemaps->add_marker($marker);
$data['map'] = $this->googlemaps->create_map();
// Load our view, passing the map data that has just been created
$this->load->view('contactus', $data);
			
		
	}
	
	 public function sendemail(){
                    //Set the validation rules based on the page
                    $this->form_validation->set_rules('comp_name', 'Name', 'required|max_length[50]|xss_clean|prep_for_form');
                    $this->form_validation->set_rules('email', 'Email Address', 'trim|required|max_length[255]|xss_clean|valid_email|prep_for_form');
                    $this->form_validation->set_rules('phone', 'Phone Number', 'required|max_length[14]|xss_clean|prep_for_form');
                    $this->form_validation->set_rules('subject', 'Subject', 'required|max_length[70]|xss_clean|prep_for_form');
                    $this->form_validation->set_rules('message', 'Message/Comment', 'required|max_length[800]|min_length[15]xss_clean|prep_for_form');
					
                


                        if($this->form_validation->run() == FALSE)
  {
 $this->index();
  }
  else
  {
   $this->contact_model->add_contact();
   
      redirect('contact/contactthank');
	
 
  }

}
	function contactthank(){
		
		
		$this->load->view('contactThank');
		}
	
}

