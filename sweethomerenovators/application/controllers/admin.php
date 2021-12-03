<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

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
	function __construct(){
		 parent::__construct();
			
		 $this->load->model('login_model');
	 }
	public function index()
	{
		$this->load->view('admin');
		
	}

	public function fpasswd()
	{
		$this->load->view('fpasswd');
		
	}

	public function login()
	{	
      $post = $this->input->post();  
      $clean = $this->security->xss_clean($post);
      $verify = $this->login_model->check_user($clean);
      if($verify == 1)
	  {
        $data['user_verify'] = $this->login_model->user_verify($post['email'],$post['password']);
		  if($data['user_verify']){
		    $_SESSION['username'] = ($data['user_verify'][0]['first_name']);
		    $_SESSION['email'] = ($data['user_verify'][0]['email']);
		    //echo 'welcome '. $_SESSION['username'] . '  ' . $_SESSION['userid'];
		   // redirect('welcome');
			$this->load->view('welcome_message',$_SESSION['username']);
			}
			else{
			  $this->session->set_flashdata('msg1','<html><h3 class="p-b-20" style="text-align:center;">Invalid Credentials.</h3></html>');
      		  redirect('admin');
				
			}
		
	  } else
	  {
		$this->session->set_flashdata('msg2','<html><h3 class="p-b-20" style="text-align:center;">Your account does not exist, Kindly check with admin for further details.</h3></html>');
        redirect('admin');
	    
	  } 
    }

	public function logout()
	{	
	   $this->session->sess_destroy();
       redirect(base_url());
    }

	public function register()
	{	$email = $this->input->post('email');
    	if($this->login_model->isDuplicate($this->input->post('email'))){
		$this->session->set_flashdata('msg', '<html><h3 class="p-b-20" style="text-align:center;">User email already exists.</h3></html>');
		redirect(site_url().'itemCRUD/register');
      }else{
	    $clean = $this->security->xss_clean($this->input->post(NULL, TRUE));
		$id = $this->login_model->insertUser($clean); 
		$token = $this->login_model->insertToken($id);                                        
		$qstring = $this->base64url_encode($token);                    
		$url = site_url() . 'admin/complete/token/' . $qstring;
		$link = '<a href="' . $url . '">' . $url . '</a>'; 
//email
/*
					$subject = "Regitration at Misty Nitrogenie ";
			$body = "Dear,<br/> Click on the below link to accept the admin request at Misty NitroGenie " . "<br/><br/>" . $link;
			$this->email->from('info@mistynitrogenie.com');
            $this->email->to($email);
		    $this->email->set_mailtype("html");
            $this->email->subject($subject);
            $this->email->message($body);
			if($this->email->send()){
			  $this->session->set_flashdata('msg','<html><h3 class="p-b-20" style="text-align:center;">A unique password  link has been successfully sent on '.$email . ' </h3></html>');
			redirect('itemCRUD');    	
			}else{
				$this->session->set_flashdata('msg','<html><h3 class="p-b-20" style="text-align:center;">Sorry, Email sending failed.');
				redirect('itemCRUD'); 
			}
			
		*/
		$message = '';                     
		$message .= '<strong>You have signed up with our website</strong><br>';
		$message .= '<strong>Please click:</strong> ' . $link;                          
		echo $message; //send this in email
		exit;	
	 }; 
    }
	public function complete()
        {                                   
            $token = base64_decode($this->uri->segment(4));       
            $cleanToken = $this->security->xss_clean($token);
            
            $user_info = $this->login_model->isTokenValid($cleanToken); //either false or array();             
            if(!$user_info){
                $this->session->set_flashdata('flash_message', 'Token is invalid or expired');
                redirect(site_url().'admin');
            }     
			
            $data = array(
                
                'email'=>$user_info->email, 
                'user_id'=>$user_info->id, 
                'token'=>$this->base64url_encode($token)
            );
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');  
            if ($this->form_validation->run() == FALSE) {   
                
                $this->load->view('complete_reg', $data);
               
            }else{
                              
                $post = $this->input->post(NULL, TRUE);
		
                $userInfo = $this->login_model->updateUserInfo($post);
                
                if(!$userInfo){
                    $this->session->set_flashdata('msg', '<html><h3 class="p-b-20" style="text-align:center;">There was a problem updating your record </h3><html>');
                    redirect(site_url().'itemCRUD/');
                }
                
                unset($userInfo->password);
                
                foreach($userInfo as $key=>$val){
                    $this->session->set_userdata($key, $val);
                }
				$this->session->set_flashdata('msg', '<html><h3 class="p-b-20" style="text-align:center;">User added successfully! </h3><html>');
				$_SESSION['username'] = ($post['name']);
                redirect(site_url());
                
            }
        }
        
	
        public function forgot()
          {
            
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
            
            if($this->form_validation->run() == FALSE) {
                $this->load->view('fpasswd');
            }else{
                $email = $this->input->post('email');  
                $clean = $this->security->xss_clean($email);
                $userInfo = $this->login_model->getUserInfoByEmail($clean);
                
                if(!$userInfo){
                    $this->session->set_flashdata('msg','<html><h3 class="p-b-20" style="text-align:center;">Email Id does not exist.</h3></html>');
               redirect(site_url().'admin/fpasswd');
                }   
                
                //build token 
				
                $token = $this->login_model->insertToken($userInfo->id);                        
                $qstring = $this->base64url_encode($token);                  
                $url = site_url() . 'admin/reset_password/token/' . $qstring;
                $link = '<a href="' . $url . '">' . $url . '</a>'; 
                //send mail in link.
			$subject = "Password Reset link ";
			$body = "Dear " . $userInfo->username . ",<br/> Click on the below link to reset your password at Misty NitroGenie " . "<br/><br/>" . $link;
			$this->email->from('info@mistynitrogenie.com');
            $this->email->to($userInfo->username);
		    $this->email->set_mailtype("html");
            $this->email->subject($subject);
            $this->email->message($body);
			if($this->email->send()){
			  $this->session->set_flashdata('msg','<html><h3 class="p-b-20" style="text-align:center;">A unique password reset link has been successfully sent on '.$userInfo->username . ' </h3></html>');
			redirect('admin');    	
			}else{
				$this->session->set_flashdata('msg','<html><h3 class="p-b-20" style="text-align:center;">Sorry, Email sending failed.');
				redirect('admin/fpasswd'); 
			}/*
			    $message = '';                     
                $message .= '<strong>A password reset has been requested for this email account</strong><br>';
                 $message .= '<strong>Please click:</strong> ' . $link;             
                 echo $message; //send this through mail
                 exit;
                */
            }
            
        }
        
        public function reset_password()
        {
            $token = $this->base64url_decode($this->uri->segment(4));                  
            $cleanToken = $this->security->xss_clean($token);
            
            $user_info = $this->login_model->isTokenValid($cleanToken); //either false or array();               
            
            if(!$user_info){
                $this->session->set_flashdata('msg', '<html><h3 class="p-b-20" style="text-align:center;">Token is expired</h3></html>');
                redirect(site_url().'admin');
            }            
            $data = array(
                'firstName'=> $user_info->first_name, 
                'email'=>$user_info->email, 
//                'user_id'=>$user_info->id, 
                'token'=>$this->base64url_encode($token)
            );
           
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');              
            
            if ($this->form_validation->run() == FALSE) {   
             
                $this->load->view('reset_password', $data);
             
            }else{
                                
               // $this->load->library('password');                 
                $post = $this->input->post(NULL, TRUE); 
				
               $cleanPost = $this->security->xss_clean($post);                
                //$hashed = $this->password->create_hash($cleanPost['password']);                
                //$cleanPost['password'] = $hashed;
                $cleanPost['user_id'] = $user_info->id;
                //unset($cleanPost['passconf']);                
                if(!$this->login_model->updatePassword($cleanPost)){
                    $this->session->set_flashdata('msg1', '<html><h3 class="p-b-20" style="text-align:center;">There was a problem updating your password</h3></html>');
					 redirect(site_url().'admin/fpasswd'); 
					
                }else{
                    $this->session->set_flashdata('msg2', '<html><h3 class="p-b-20" style="text-align:center;">	Your password has been updated. You may now login with your new password</h3></html>');
					 redirect(site_url().'admin'); 
					
                }
                              
            }
        }
		
	public function base64url_encode($data) { 
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
    } 

	public function base64url_decode($data) { 
      return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
    }     
}
