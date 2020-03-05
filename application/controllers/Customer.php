<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id'))
  {
   redirect('private_area');
  }
  $this->load->library('form_validation');
  //$this->load->library('encryption');
  $this->load->model('customer_model');
 }


//<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

//class Customer extends CI_Controller {



  public function index()

  {    
         $data=array();
        $data['title']="customer";
        $data['banner']='';
        $data['recent_car'] = '';
        $data['Fun_facts'] = '';
        $data['testimonial'] =$this->load->view('pages/customer_registration','',true);
        $this->load->view('master',$data);

  }




 /*function validation()
 {
  $this->form_validation->set_rules('customer_name', 'Full Name', 'required|trim');
  $this->form_validation->set_rules('email_address', 'Email Address', 'required|trim|valid_email|is_unique[tbl_customer.email_address]');
  $this->form_validation->set_rules('password', 'Password', 'required');
  if($this->form_validation->run())
  {
   $verification_key = md5(rand());
   $encrypted_password = md5($this->input->post('password'));
   $data = array(
    'customer_name'  => $this->input->post('customer_name'),
    'email_address'  => $this->input->post('email_address'),
    'password' => $encrypted_password,
    'verification_key' => $verification_key
   );
   $id = $this->customer_model->insert($data);
   if($id > 0)
   {
    $subject = "Please verify email for login";
    $message = "
    <p>Hi ".$this->input->post('customer_name')."</p>
    <p>This is email verification mail from Codeigniter Login Register system. For complete registration process and login into system. First you want to verify you email by click this <a href='".base_url()."customer/verify_email/".$verification_key."'>link</a>.</p>
    <p>Once you click this link your email will be verified and you can login into system.</p>
    <p>Thanks,</p>
    ";
    $config = array(
     'protocol'  => 'smtp',
     'smtp_host' => 'ssl://smtp.gmail.com',
     'smtp_port' => '465',
     'smtp_timeout' => '7',
     'smtp_user'  => 'your email', 
     'smtp_pass'  => 'pass', 
     'mailtype'  => 'html',
     'charset'    => 'utf-8',
     'wordwrap'   => TRUE
    );
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from('your email');
    $this->email->to($this->input->post('email_address'));
    $this->email->subject($subject);
    $this->email->message($message);
    if($this->email->send())
    {
     $this->session->set_flashdata('message', 'Check in your email for email verification mail');
     redirect('customer');
    }
   }
  }
  else
  {
   $this->index();
  }
 }



 function verify_email()
 {
  if($this->uri->segment(3))
  {
   $verification_key = $this->uri->segment(3);
   if($this->customer_model->verify_email($verification_key))
   {
    $data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="'.base_url().'customer">here</a></h1>';
   }
   else
   {
    $data['message'] = '<h1 align="center">Invalid Link</h1>';
   }
   $this->load->view('email_verification', $data);
  }
 } */









 public function customer_registration()

 {
  $this->form_validation->set_rules('customer_name', 'Full Name', 'required|trim');
  $this->form_validation->set_rules('email_address', 'Email Address', 'required|trim|valid_email|is_unique[tbl_customer.email_address]');
  $this->form_validation->set_rules('password', 'Password', 'required');
  if($this->form_validation->run())
  

  {    
      /* $customer_id =  $this->customer_model->save_customer_info();
       $sdata=array();
       $sdata['customer_name']=$this->input->post('customer_name');
       $sdata['customer_id']=$customer_id;
       $this->session->set_userdata($sdata); */


   $verification_key = md5(rand());
   $encrypted_password = md5($this->input->post('password'));
   $data = array(
    'customer_name'  => $this->input->post('customer_name'),
    'email_address'  => $this->input->post('email_address'),
    'password' => $encrypted_password,
    'verification_key' => $verification_key
   );
   $id = $this->customer_model->insert($data);
   if($id > 0)
   {

    $to =  $this->input->post('email_address');  
    $subject = 'Welcome To RentCar';

    $from = 'your-email';              

    $emailContent = "<p>Hi ".$this->input->post('customer_name')."</p>
    <p>This is email verification mail from RentCar Register system. For complete registration process and login into system. First you want to verify you email by click this <a href='".base_url()."customer/verify_email/".$verification_key."'>link</a>.</p>
    <p>Once you click this link your email will be verified and you can login into system.</p>
    <p>Thanks,</p>
    ";
    //$emailContent .='<tr><td style="height:20px"></td></tr>';


    //$emailContent .= $this->input->post('message');  //   Post message available here

  // $emailContent .='<tr><td <a href="' .base_url() .'">click here</a> ></td></tr>';
    //$emailContent .='<tr><td style="height:20px"></td></tr>';
    //$emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'> target='_blank' style='text-decoration:none;color: #60d2ff;'></a></p></td></tr></table></body></html>";
                


    $config['protocol']    = 'smtp';
    $config['smtp_host']    = 'ssl://smtp.gmail.com';
    $config['smtp_port']    = '465';
    $config['smtp_timeout'] = '7';

    $config['smtp_user']    = 'your email';    //Important
    $config['smtp_pass']    = 'your 2 step verification password';  //Important

    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not 

     

    $this->email->initialize($config);
    $this->email->set_mailtype("html");
    $this->email->from($from);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message ($emailContent); // ('text');   //
    $this->email->send();

    $this->session->set_flashdata('msg',"Mail has been sent successfully");
    $this->session->set_flashdata('msg_class','alert-success');
    return redirect('customer');  
  } 

    }
  
  else
  {
   $this->index();
  }
 }


    //  $this->load->view('customer');
      // redirect('booking');

 




 function verify_email()
 {
  if($this->uri->segment(3))
  {
   $verification_key = $this->uri->segment(3);
   if($this->customer_model->verify_email($verification_key))
   { // echo "true";
    $data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="'.base_url().'customer/index">here</a></h1>';
   }
   else
   { // echo "false";
    $data['message'] = '<h1 align="center">Invalid Link</h1>';
   }
  $this->load->view('email_verification', $data);
  }
 }
/*
 function verify_email($verification_key)
{


$verify=$this->customer_model->verify_email($verification_key);
if ($verify === true){
 echo "its done";
  /*$data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="'.base_url().'customer">here</a></h1>'; 
}
 else
   { echo "keep going";
   /* $data['message'] = '<h1 align="center">Invalid Link</h1>';
   }

}*/

 /*{
  if($this->uri->segment(3))
  {
   $verification_key = $this->uri->segment(3);
   if($this->customer_model->verify_email($verification_key))
   {
    $data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="'.base_url().'booking">here</a></h1>';
   }
   else
   {
    $data['message'] = '<h1 align="center">Invalid Link</h1>';
   }

   redirect('customer');
   //$this->load->view('email_verification', $data);
  }
 }*/

  public function booking(){

        $data=array();
        $data['title']="Booking";
        $data['banner']='';
        $customer_id=$this->session->userdata('customer_id');
        $data['customer_info']=$this->customer_model->select_customer_info_by_id($customer_id);
        //$data['car_info']=$this->welcome_model->select_car_by_id($car_id);
        $car_id = $this->input->post('car_id');
        $sdata=array();
        $sdata['car_id']=$this->input->post('car_id');
        $sdata['car_id']=$car_id;
        $this->session->set_userdata($sdata);

/*        $data['car_info']=$this->welcome_model->select_car_by_id($car_id);
       // $car_detail=$this->customer_model->save_booking_info($data);

        $car_data = array();

   foreach ($car_info as $v_car_info) {
   $car_data['car_name']= $v_car_info ['car_name'];
   $car_data['price_per_day']= $v_car_info ['price_per_day'];
   }
      print_r( $car_data);*/  

        $data['recent_car'] = $this->load->view('pages/booking',$data,true);
        $data['Fun_facts'] = '';
        $data['testimonial'] ='';
        $this->load->view('master',$data);
  }

  public function save_booking(){

   $this->customer_model->save_booking_info();

   $this->session->set_userdata('message','Please wait for our call to confirm the booking!');
   $customer_id=$this->session->userdata('customer_id');
   $car_id=$this->session->userdata('car_id');
   redirect('booking');

 }

 /*  $car_info=$this->welcome_model->select_car_by_id($car_id);

   $data = array();

   foreach ($car_info as $v_car_info) {
   $data['car_name']= $v_car_info ['car_name'];
   $data['price_per_day']= $v_car_info ['price_per_day'];
   }
   $car_detail=$this->customer_model->save_booking_info($data);*/


   
 



//--------------------- customer Login ----------------


   public function customer_login()

  {  if(isset($this->session->user_id)){
    redirect('booking');
  }  else{
      $this->load->view('customer');
  }

  } 

  public function check_customer_login()

  
  {    $email_address = $this->input->post('email_address',TRUE);
       $password = $this->input->post('password',TRUE); 
       $encrypt_password = md5($password);
       
       
       $customer_detail  = $this->customer_model->get_customer_detail ($email_address);

       if ($encrypt_password == $customer_detail->password){

          $session_data['email_address'] = $customer_detail ->email_address;
          $session_data['customer_status'] = $customer_detail ->customer_status;
          $session_data['customer_id'] = $customer_detail ->customer_id;
          $session_data['customer_name'] = $customer_detail ->customer_name;
          $this->session->set_userdata($session_data);

          redirect('booking');


       }


      //if(password_verify($password, $customer_detail->password))

   else{
                
        $this->session->set_userdata('error_message','Incorrect Email or Password!');
        redirect ('customer');

       } 
       
       }
     

       
       /* if($customer_detail ->customer_status==1){

          $session_data['email_address'] = $customer_detail ->email_address;
          $session_data['customer_status'] = $customer_detail ->customer_status;
          $session_data['customer_id'] = $customer_detail ->customer_id;
          $this->session->set_userdata($session_data);
          redirect('booking');
          

           }

           else{
                
        $data['error_message'] = 'Not a Valid User';
        $this->session->set_userdata($data);
        redirect ('customer');

       }*/
        

        

     /*  }else{
         //redirect('admin');
        $data['error_message'] = 'Incorrect Email or Password';
       // $this->session->set_userdata($data);
        redirect ('customer');


       }





       } */

  
//Cusotmer logout


 public function check_customer_logout(){

        $this->session->sess_destroy();
        redirect('customer');
    
      
    } 
  

}