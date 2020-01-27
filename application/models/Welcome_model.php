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

public function all_recent_car(){


		$result = $this->db->select('*')
                 ->from('tbl_car')
		         ->where('recent_car', 1)
		         ->where('car_status', 1)
                 ->get()->result();
		return $result;
          
          
} 


public function  select_car_by_id($car_id){

       $car_info = $this->db->select('*')
                 ->from('tbl_car')
                 ->join('tbl_brand','tbl_brand.brand_id = tbl_car.car_brand' )
                 ->join('tbl_fuel','tbl_fuel.fuel_id = tbl_car.car_fuel' )
		         ->where('car_id', $car_id)
		         ->get()->row();
		return $car_info;



}

public function  getRecords(){

	            
    $brand = $this->input->post('brand_id');
    $fuel = $this->input->post('fuel_id'); 
    $car_info = $this->db->select('*')
                 ->from('tbl_car')
                 ->join('tbl_brand','tbl_brand.brand_id = tbl_car.car_brand' )
                 ->join('tbl_fuel','tbl_fuel.fuel_id = tbl_car.car_fuel' )
		         ->where(['tbl_brand.brand_id'=>$brand,'tbl_fuel.fuel_id'=>$fuel])
		         ->get()->row();
		return $car_info;
    

                /* $this->db->select('*');
                 $this->db->from('tbl_car');
                 $this->db->join('tbl_brand','tbl_brand.brand_id = tbl_car.car_brand' );
                 $this->db->join('tbl_fuel','tbl_fuel.fuel_id = tbl_car.car_fuel' );
		         $this->db->where(['tbl_brand.brand_id'=>$brand,'tbl_fuel.fuel_id'=>$fuel]);
		         $query= $this->db->get()->row();
		         return $query->result();*/



}




}