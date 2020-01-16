<?php

class Welcome_model extends CI_Model {

	public function all_active_car(){


		$result = $this->db->select('*')
                 ->from('tbl_car')
		         ->where('car_status', 1)
		         ->get()->result();
		return $result;

		/*$this->db->select('*');
		$this->db->from('tbl_car');
		$this->db->where('car_status',1);
		$query_result=$this->db->get();
		$car_info=$query_result->result();
		return $car_info;*/


          
          



	} 
}