<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {


	public function manage_booking(){

		        $data=array();
		        $data['all_booking'] = $this->booking_model->select_all_booking();
		        //echo '<pre>';
		        //print_r($data);
		        //exit();
               
	     		$data['admin_maincontent'] = $this->load->view('admin/admin_pages/manage_booking',$data,TRUE);
	     		$this->load->view('admin/admin_master',$data);
	}


 function change_booking_status($car_id,$status){

    $this->booking_model->change_booking_status($car_id,$status);
    redirect('manage-booking');
}

}