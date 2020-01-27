<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_filter_model extends CI_Model{


	function fetch_filter_type($type)
	{
		$this->db->distinct();
		$this->db->select($type);
		$this->db->from('tbl_car');
		$this->db->join('tbl_brand','tbl_brand.brand_id = tbl_car.car_brand' );
        $this->db->join('tbl_fuel','tbl_fuel.fuel_id = tbl_car.car_fuel' );
		$this->db->where('car_status','1');
		return $this->db->get();
		//return $brand_data;
	}

	

}

?>
