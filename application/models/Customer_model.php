<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model{

    public function save_customer_info(){
      
     $data=array();
     $data['customer_name']=$this->input->post('customer_name');
     $data['email_address']=$this->input->post('email_address');
     //$data['password'] = $this->input->post('password');
     //$data['password']=password_hash('password', PASSWORD_DEFAULT);
     $data['password']=md5($this->input->post('password'));

     $this->db->insert('tbl_customer',$data);
     $customer_id=$this->db->insert_id();
     return $customer_id;



    }

    public function select_customer_info_by_id($customer_id){
   
      $customer_info=$this->db->select('*')
                     ->from ('tbl_customer')
                     ->where('customer_id',$customer_id)
                     ->get()->row();
      return $customer_info;
    }


    public function save_booking_info(){
     $data=array();
     $data['customer_name'] = $this->input->post('customer_name');
     $data['email_address'] = $this->input->post('email_address');
     $data['mobile_number'] = $this->input->post('mobile_number');
     $data['car_delivery_address'] = $this->input->post('car_delivery_address');
     $data['days'] = $this->input->post('days');
     $data['customer_id'] = $this->session->userdata('customer_id');
     $data['car_id'] = $this->session->userdata('car_id');
    


     //$customer_id=$this->input->post('customer_id');
    // $this->db->where('customer_id',$customer_id);
    // $this->db->update('tbl_customer',$data);
     $this->db->insert('tbl_booking',$data);



    }

    public function save_car_info(){
     
     $this->db->insert('tbl_booking',$data);



    }



        public function get_customer_detail($email_address){

        $customer_detail = $this->db->select('*')
                            ->from('tbl_customer')
                            ->where('email_address', $email_address)
                            ->get()
                            ->row();
         return $customer_detail;

    }



}