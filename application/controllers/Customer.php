<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {



  public function index()

  {    
         $data=array();
        $data['title']="customer";
        $data['recent_car'] = '';
        $data['Fun_facts'] = '';
        $data['testimonial'] =$this->load->view('pages/customer_registration','',true);
        $this->load->view('master',$data);

  }


public function customer_registration()

  {    
       $customer_id =  $this->customer_model->save_customer_info();
       $sdata=array();
       $sdata['customer_name']=$this->input->post('customer_name');
       $sdata['customer_id']=$customer_id;
       $this->session->set_userdata($sdata);
       redirect('booking');

  }

  public function booking(){

        $data=array();
        $data['title']="Booking";
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