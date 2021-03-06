<?php

class Welcome_model extends CI_Model {


	public function all_active_car($limit, $start){

        $this->db->limit($limit, $start);
		$result = $this->db->select('*')
                 ->from('tbl_car')
                 ->join('tbl_location','tbl_location.location_id = tbl_car.car_location' )
                 ->join('tbl_brand','tbl_brand.brand_id = tbl_car.car_brand' )
                 ->join('tbl_fuel','tbl_fuel.fuel_id = tbl_car.car_fuel' )
		         ->where('car_status', 1)
		         ->where('brand_status', 1)
		         ->where('fuel_status', 1)
		         ->where('location_status', 1)
		         ->get()->result();
		return $result;
}
	

	 public function active_car(){


		$result = $this->db->select('*')
                 ->from('tbl_car')
                 ->join('tbl_location','tbl_location.location_id = tbl_car.car_location' )
                 ->join('tbl_brand','tbl_brand.brand_id = tbl_car.car_brand' )
                 ->join('tbl_fuel','tbl_fuel.fuel_id = tbl_car.car_fuel' )
		         ->where('car_status', 1)
		         ->where('brand_status', 1)
		         ->where('fuel_status', 1)
		         ->where('location_status', 1)
		         ->get()->result();
		return $result; 

		


	}


/*public function all_recent_car($limit, $start){

        $this->db->limit($limit, $start);
		$result = $this->db->select('*')
                 ->from('tbl_car')
                 ->join('tbl_location','tbl_location.location_id = tbl_car.car_location' )
                 ->join('tbl_brand','tbl_brand.brand_id = tbl_car.car_brand' )
                 ->join('tbl_fuel','tbl_fuel.fuel_id = tbl_car.car_fuel' )
		         ->where('recent_car', 1)
		         ->where('car_status', 1)
		         ->where('brand_status', 1)
		         ->where('fuel_status', 1)
		         ->where('location_status', 1)
                 ->get()->result();
		return $result;
}  */


public function all_recent_car(){


		$result = $this->db->select('*')
                 ->from('tbl_car')
                 ->join('tbl_location','tbl_location.location_id = tbl_car.car_location' )
                 ->join('tbl_brand','tbl_brand.brand_id = tbl_car.car_brand' )
                 ->join('tbl_fuel','tbl_fuel.fuel_id = tbl_car.car_fuel' )
		         ->where('recent_car', 1)
		         ->where('car_status', 1)
		         ->where('brand_status', 1)
		         ->where('fuel_status', 1)
		         ->where('location_status', 1)
                 ->get()->result();
		return $result;
          
          
} 


public function  select_car_by_id($car_id){

       $car_info = $this->db->select('*')
                 ->from('tbl_car')
                 ->join('tbl_location','tbl_location.location_id = tbl_car.car_location' )
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


public function all_active_car_by_location($location_id){


		$result = $this->db->select('*')
                 ->from('tbl_car')
                 ->join('tbl_location','tbl_location.location_id = tbl_car.car_location' )
                 ->join('tbl_brand','tbl_brand.brand_id = tbl_car.car_brand' )
                 ->join('tbl_fuel','tbl_fuel.fuel_id = tbl_car.car_fuel' )
		         ->where('car_status', 1)
		         ->where('location_id', $location_id)
		         ->get()->result();
		return $result;



}

public function all_active_car_by_brand($brand_id){


		$result = $this->db->select('*')
                 ->from('tbl_car')
                 ->join('tbl_location','tbl_location.location_id = tbl_car.car_location' )
                 ->join('tbl_brand','tbl_brand.brand_id = tbl_car.car_brand' )
                 ->join('tbl_fuel','tbl_fuel.fuel_id = tbl_car.car_fuel' )
		         ->where('car_status', 1)
		         ->where('brand_id', $brand_id)
		         ->get()->result();
		return $result;

		}


  public function record_count() {
    return $this->db->count_all("tbl_car");
         }


  public function search($query)

  {
    $q = $this->db->from('tbl_car')

         ->join('tbl_location','tbl_location.location_id = tbl_car.car_location' )
         ->join('tbl_brand','tbl_brand.brand_id = tbl_car.car_brand' )
         ->join('tbl_fuel','tbl_fuel.fuel_id = tbl_car.car_fuel' )
    ->like('car_name',$query)
    ->get();
    return $q->result();

   }

}