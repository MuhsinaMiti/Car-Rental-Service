<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model{

public function select_all_booking(){
            $result = $this->db->select('*')
                 ->from('tbl_booking')
                 ->join('tbl_car','tbl_car.car_id = tbl_booking.car_id' )
                // ->where('car_status', 1)
		         ->get()->result();
		return $result;

}

function change_booking_status($car_id,$status){

    $data['booking_status'] = $status;
    $this->db->where('car_id',$car_id);
    $this->db->update('tbl_car',$data);

    

  }


}