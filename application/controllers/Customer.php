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
       redirect('/booking');

  }

  public function booking(){

    $data=array();
        $data['title']="Booking";
        $customer_id=$this->session->userdata('customer_id');
        $data['customer_info']=$this->customer_model->select_customer_info_by_id($customer_id);
        $data['car_info']=$this->welcome_model->select_car_by_id($car_id);
		$data['recent_car'] = $this->load->view('pages/booking',$data,true);
		$data['Fun_facts'] = '';
		$data['testimonial'] ='';
        $this->load->view('master',$data);
  }

  public function update_booking(){

   $this->customer_model->update_booking_info();
   $this->session->set_userdata('message','Your Car has been Booked Successfully');
   redirect('booking');
  }

}