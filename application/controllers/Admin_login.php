<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	
	public function index()

	{  if(isset($this->session->user_id)){
		redirect('admin-dashboard');
	}  else{
      $this->load->view('admin/admin_login');
	}

	}

public function check_admin_login()

	{    $user_email = $this->input->post('user_email',TRUE);
	     $user_password = $this->input->post('user_password',TRUE); 
	     
	     $this->load->model('admin_model');
	     $user_detail = $this->admin_model->get_user_detail($user_email);
	     
	     
	     if(password_verify($user_password, $user_detail->user_password)){
	     	if($user_detail->user_status==1){

	     		$session_data['user_email'] = $user_detail->user_email;
	     		$session_data['user_status'] = $user_detail->user_status;
	     		$session_data['user_role'] = $user_detail->user_role;
	     		$session_data['user_id'] = $user_detail->user_id;
	     		$this->session->set_userdata($session_data);
	     		redirect('admin-dashboard');
	     		




	     	}else{
                //redirect('admin');
	     	$data['error_message'] = 'Not a Valid User';
	     	$this->load->view('admin/admin_login',$data);

	     }
	     	

	     	

	     }





	     } 

	
//Admin logout


 public function check_admin_logout(){

	     	$this->session->sess_destroy();
	     	redirect('admin');
		
      
    }
	





}
