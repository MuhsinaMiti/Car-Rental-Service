<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model{


 function insert($data)
 {
  $this->db->insert('tbl_customer', $data);
  return $this->db->insert_id();
 }
/*
 function verify_email($key)
 {
  $this->db->where('verification_key', $key);
  $this->db->where('is_email_verified', 'no');
  $query = $this->db->get('tbl_customer');
  if($query->num_rows() > 0)
  {
   $data = array(
    'is_email_verified'  => 'yes'
   );
   $this->db->where('verification_key', $key);
   $this->db->update('tbl_customer', $data);
   return true;
  }
  else
  {
   return false;
  }
 }
*/



	/*public function save_customer_info(){
      
     $data=array();
     $data['customer_name']=$this->input->post('customer_name');
     $data['email_address']=$this->input->post('email_address');
     //$data['password'] = $this->input->post('password');
     //$data['password']=password_hash('password', PASSWORD_DEFAULT);
     $data['password']=md5($this->input->post('password'));
     $data['verification_key'] = md5(rand());

     $this->db->insert('tbl_customer',$data);
     $this->session->set_userdata($data);
     $customer_id=$this->db->insert_id();

     return $customer_id;



	} 

*/

    function verify_email($key)

 {
  $this->db->where('verification_key', $key);
  $this->db->where('is_email_verified', 'no');
  $query = $this->db->get('tbl_customer');
  if($query->num_rows() > 0)
  {
   $data = array(
    'is_email_verified'  => 'yes'
   );
   $this->db->where('verification_key', $key);
   $this->db->update('tbl_customer', $data);
   return true;
  }
  else
  {
   return false;
  }
 }
  /*  $this->db->select('*');
 $this->db->from ('tbl_customer');
 $this->db->where('verification_key', $verification_key);
 $result = $this->db->get('tbl_customer');
 $row = $result->row();
 if($result->num_rows() > 0){
   $data = array(
    'is_email_verified'  => 'yes'
   );
   $this->db->where('verification_key', $verification_key);
   $this->db->update('tbl_customer', $data);
   return true;
  }
  else
  {
   return false;
  }


  /*$this->db->where('verification_key', $verification_key);
 $this->db->where('is_email_verified', 'no');
  $query = $this->db->get('tbl_customer');
  if($query->num_rows() > 0)
  {
   $data = array(
    'is_email_verified'  => 'yes'
   );
   $this->db->where('verification_key', $verification_key);
   $this->db->update('tbl_customer', $data);
   return true;
  }
  else
  {
   return false;
  }*/
 

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
     $data['date'] = $this->input->post('date');
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