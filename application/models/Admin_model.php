<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

	public function get_user_detail($user_email){

		$user_detail = $this->db->select('*')
		                    ->from('tbl_user')
		                    ->where('user_email', $user_email)
		                    ->get()
		                    ->row();
		 return $user_detail;

	}


	public function register_new_admin(){

   	   $data['user_name'] = $this->input->post('user_name',TRUE);
   	   $data['user_email'] = $this->input->post('user_email',TRUE);

   	   $password = $this->input->post('user_password',TRUE);
   	   $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
   	   $data['user_password'] = $encrypted_password;

   	   //$data['user_password'] = password_hash($this->input->post('user_password',TRUE), PASSWORD_DEFAULT);

   	   $data['user_role'] =1;
   	   $data['user_status'] = 1;
   	   $this->db->insert('tbl_user',$data);
   	   


    }


function dashboard_car_data(){

  return $this->db->count_all('tbl_car');
  

}
 

function dashboard_location_data(){

  return $this->db->count_all('tbl_location');
  

}

function dashboard_brand_data(){

  return $this->db->count_all('tbl_brand');
  

}
function dashboard_fuel_data(){

  return $this->db->count_all('tbl_fuel');
  

}
   

function dashboard_customer_data(){

  return $this->db->count_all('tbl_customer');
  

}
}