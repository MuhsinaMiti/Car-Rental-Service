<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_model extends CI_Model{

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

    

   function upload_car_image(){
       $config['upload_path'] = './uploads';
       $config['allowed_types'] = 'gif|jpg|png';
       $config['max_size'] = 1000;
       $config['max_width'] = 1024;
       $config['max_height'] = 768;

       $this->load->library('upload', $config);

       if($this->upload->do_upload('car_image')){

             $data = $this->upload->data();
             $image_path = "uploads/ $data[file_name]";
             return $image_path;

       }else{

       	$error = $this->upload->display_errors();
       	print_r($error);

       }



   }




	function save_car(){

		$car_data = $this->input->post(NULL, TRUE);
		$car_data['car_status'] = 1;
		$car_data['car_image'] = $this->upload_car_image();
        $this->db->insert('tbl_car', $car_data);

     

}

}