<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_model extends CI_Model{

public function select_all_invoice(){
            $result = $this->db->select('*')
                 ->from('tbl_booking')
                 ->join('tbl_car','tbl_car.car_id = tbl_booking.car_id' )
                // ->where('car_status', 1)
		         ->get()->result();
		return $result;

}

}