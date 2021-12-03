<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
	 
	public function __construct(){
    parent::__construct();
		$this->load->model('Contact_model');
		//redirect('#contact');
  }

	public function contact_us(){
    $details['name'] = $this->input->post('name');
    $details['email'] = $this->input->post('email');
    $details['phone'] = $this->input->post('phone');
    $details['message'] = $this->input->post('message');
    //var_dump($details);exit;
    $admin_mail_subject = "Request for Quotation sent";
    $user_mail_subject = "Request for Quotation received";
    //$admin_mail_subject = "Request for Quotation received";
    
    $reqId = $this->Contact_model->saveContact($details);
    $admin_mail_body = "Dear SHR,<br/> You have received a request for Quotation with generated request ID as: " . $reqId . " </br>The following are the details:<br/> Name: <span>" . $details['name'] . "</span><br/> Email:" . "<span>" . $details['email'] . "</span><br/> Contact: <span>" . $details['phone'] . "</span><br/><br/> Message: " . $details['message'] . "</span></br>";
    
    $user_mail_body = "Dear " . $details['name'] . ",<br/> We have received your mail requesting for Quotation from Sweet Home Renovators.<br/> We will get back to you soon!!";
    
    if($reqId){
      //configure email settings
      $config['protocol'] = MAIL_PROTOCOL;
      $config['smtp_host'] = MAIL_HOST;
      //$config['smtp_port'] = '587';
      $config['smtp_port'] = MAIL_PORT;
      $config['smtp_user'] = MAIL_USERNAME;
      //$config['smtp_pass'] = '11060147';
      $config['smtp_pass'] = MAIL_PASSWORD;
      $config['mailtype'] = 'html';
      $config['charset'] = 'iso-8859-1';
      $config['wordwrap'] = TRUE;
      $config['newline'] = "\r\n"; //use double quotes
      $this->load->library('email', $config);
      $this->email->initialize($config);
      $this->email->from(MAIL_ID_SUPPORT);
      $this->email->to($details['email']);
      $this->email->set_mailtype("html");
      $this->email->subject($user_mail_subject);
      $this->email->message($user_mail_body);
      if( $this->email->send()){
        $this->email->from(MAIL_ID_SUPPORT);
        $this->email->to(MAIL_ID_SUPPORT);
        $this->email->set_mailtype("html");
        $this->email->subject($user_mail_subject);
        $this->email->message($admin_mail_body);	
        $this->email->send();			
        $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Thank you for contacting us. We will get back to you soon!</div>');
        redirect('/');
      }
      else{
        //echo $this->email->print_debugger();
        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Apologies,There was an error in sending the Email! Please try again later</div>');
        redirect('/');
      }
    }
	}

  public function contactmails()
    {
       $data['data'] = $this->contactDetails->get_contact();

       $this->load->view('theme/header');       
       $this->load->view('contactmails',$data);
       $this->load->view('theme/footer');
    }   

	public function partyorder()
    {
       $data['data'] = $this->contactDetails->get_partyorders();

       $this->load->view('theme/header');       
       $this->load->view('partyorders',$data);
       $this->load->view('theme/footer');
    }   

	public function franchise()
    {
       $data['data'] = $this->contactDetails->get_franchise();

       $this->load->view('theme/header');       
       $this->load->view('franchise',$data);
       $this->load->view('theme/footer');
    }   

}       
