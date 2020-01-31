<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_model extends CI_Model{




//-----------location-------------

  function save_location(){

    $data['location_name'] = $this->input->post('location_name',TRUE);
    $data['location_status'] = 1;

        $this->db->insert('tbl_location',$data);

  }

  function get_all_location(){

    $data = $this->db->select('*')->from(' tbl_location')->get()->result();

        return $data;


  }


  function change_location_status($location_id,$status){

    $data['location_status'] = $status;
    $this->db->where('location_id',$location_id);
    $this->db->update('tbl_location',$data);

    

  }


  function get_location_detail($location_id){


    $result = $this->db->select('*')->from('tbl_location')
             ->where('location_id', $location_id)
             ->get()->row();
    return $result;
  }


  function update_location(){

     $data = $this->input->post(NULL,TRUE);
     $location_id = $data ['location_id'];
     unset($data ['location_id']);

     $this->db->where('location_id',$location_id)->update ('tbl_location',$data);

  } 

  public function get_all_active_location(){

    $result = $this->db->select('*')
             ->from('tbl_location')
             ->where('location_status', 1)
             ->get()->result();
    return $result;

  }


//-----------brand-------------

	function save_brand(){

		$data['brand_name'] = $this->input->post('brand_name',TRUE);
		$data['brand_status'] = 1;

        $this->db->insert('tbl_brand',$data);

	}

	function get_all_brand(){

		$data = $this->db->select('*')->from(' tbl_brand')->get()->result();

        return $data;


	}


	function change_brand_status($brand_id,$status){

		$data['brand_status'] = $status;
		$this->db->where('brand_id',$brand_id);
		$this->db->update('tbl_brand',$data);

		

	}


	function get_brand_detail($brand_id){


		$result = $this->db->select('*')->from('tbl_brand')
		         ->where('brand_id', $brand_id)
		         ->get()->row();
		return $result;
	}


	function update_brand(){

     $data = $this->input->post(NULL,TRUE);
     $brand_id = $data ['brand_id'];
     unset($data ['brand_id']);

     $this->db->where('brand_id',$brand_id)->update ('tbl_brand',$data);

	} 

	function get_all_active_brand(){

    $result = $this->db->select('*')
                 ->from('tbl_brand')
		         ->where('brand_status', 1)
		         ->get()->result();
		return $result;

	}

    

  /* public function save_car_info(){

                $data=array();
                $data['car_name']=$this->input->post('car_name',true);
                $data['car_overview']=$this->input->post('car_overview',true);
                $data['brand_id']=$this->input->post('brand_id',true);
                $data['car_fuel']=$this->input->post('car_fuel',true);
                $data['car_image']=$this->input->post('car_image',true);
                $this->db->insert('tbl_car',$data);



                $sdata=array();
                $error="";
                $config['upload_path']    = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 10024;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('car_image'))
                {
                        $error = $this->upload->display_errors();
                         
                        echo $error;
                        exit();
                        //$this->load->view('upload_form', $error);
                }
                else
                {
                        $sdata = $this->upload->data();
                        
                        $data['car_image']=$config['upload_path'].$sdata['file_name'];
                        //$this->load->view('upload_success', $data);
                }

            $data['car_status']=$this->input->post('car_status',true);
            
            $this->db->insert('tbl_car',$data);

   }*/


//------------------Car---------------------






	function save_car($car_image){

        $car_data = $this->input->post(NULL,TRUE);
    	
        $recent_car=$this->input->post('recent_car',true);
    	if($recent_car ==NULL)
        {

            $car_data['recent_car']=0;
        }
        if ($recent_car=='on')
        {

            $car_data['recent_car']=1;
        }

        $car_data['car_image'] = $car_image;   //$this->upload_car_image();
    	$this->db->insert('tbl_car', $car_data);

		/*$car_data = $this->input->post(NULL, TRUE);
		$car_data['car_status'] = 1;
		$car_data['car_image'] = $this->upload_car_image();
        $this->db->insert('tbl_car', $car_data);*/

     

}

  function select_all_car(){

     
$result = $this->db->select('*')
                 ->from('tbl_car')
		         ->get()->result();
		return $result;


}

public function car_published_by_id($car_id){

        $this->db->set('car_status',2);
        $this->db->where('car_id',$car_id);
        $this->db->update('tbl_car');


}

public function car_unpublished_by_id($car_id){

        $this->db->set('car_status',1);
        $this->db->where('car_id',$car_id);
        $this->db->update('tbl_car');


}

public function car_delete_by_id($car_id){

        $this->db->set('car_status',3);
        $this->db->where('car_id',$car_id);
        $this->db->update('tbl_car');


}

public function car_info_by_id($car_id){

        $result = $this->db->select('*')
                 ->from('tbl_car')
                 ->where('car_id',$car_id)
                 ->get()->row();
        return $result;


}

public function update_car($car_image){

      $data=array();
      $car_id=$this->input->post('car_id',true);
      $data['car_name']=$this->input->post('car_name',true);
      $data['price_per_day']=$this->input->post('price_per_day',true);
      $data['car_overview']=$this->input->post('car_overview',true);
      $data['car_brand']=$this->input->post('car_brand',true);
      $data['car_fuel']=$this->input->post('car_fuel',true);
      $data['car_location']=$this->input->post('car_location',true);
      $data['car_image']= $car_image;      //$this->input->post('car_image',true);

      $recent_car=$this->input->post('recent_car',true);
        if($recent_car ==NULL)
        {

            $data['recent_car']=0;
        }
        if ($recent_car=='on')
        {

            $data['recent_car']=1;
        }

        $this->db->where('car_id',$car_id);
        $this->db->update('tbl_car',$data);
//$this->db->where('car_id',$car_id)->update ('tbl_car',$data);


}


//---------------- fuel -------------------

function save_fuel(){

        $data['fuel_name'] = $this->input->post('fuel_name',TRUE);
        $data['fuel_status'] = 1;

        $this->db->insert('tbl_fuel',$data);

    }

    function get_all_fuel(){

        $data = $this->db->select('*')->from('tbl_fuel')->get()->result();

        return $data;


    }


    function change_fuel_status($fuel_id,$status){

        $data['fuel_status'] = $status;
        $this->db->where('fuel_id',$fuel_id);
        $this->db->update('tbl_fuel',$data);

        

    }


    function get_fuel_detail($fuel_id){


        $result = $this->db->select('*')->from('tbl_fuel')
                 ->where('fuel_id', $fuel_id)
                 ->get()->row();
        return $result;
    }


    function update_fuel(){

     $data = $this->input->post(NULL,TRUE);
     $fuel_id = $data ['fuel_id'];
     unset($data ['fuel_id']);

     $this->db->where('fuel_id',$fuel_id)->update ('tbl_fuel',$data);

    } 

    function get_all_active_fuel(){

    $result = $this->db->select('*')
                 ->from('tbl_fuel')
                 ->where('fuel_status', 1)
                 ->get()->result();
        return $result;

    }





}