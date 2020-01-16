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


function upload_car_image(){
     $config['upload_path']          = './uploads/';
     $config['allowed_types']        = 'gif|jpg|png';
     $config['max_size']             = 10000;
     $config['max_width']            = 10024;
     $config['max_height']           = 7680;

     $this->load->library('upload',$config);

     if($this->upload->do_upload('car_image')){

      $data = $this->upload->data();
      $image_path = "uploads/$data[file_name]";//base_url();
      return $image_path;
     }else{

      $error = $this->upload->display_errors();
      print_r($error);
     }



}




  function save_car(){

    $car_data = $this->input->post(NULL,TRUE);
      $car_data['car_status'] = 1;
      $car_data['car_image'] = $this->upload_car_image();

      
      $this->db->insert('tbl_car', $car_data);

    /*$car_data = $this->input->post(NULL, TRUE);
    $car_data['car_status'] = 1;
    $car_data['car_image'] = $this->upload_car_image();
        $this->db->insert('tbl_car', $car_data);*/

     

}

  public function select_all_car(){

     
$result = $this->db->select('*')
                 ->from('tbl_car')
             ->get()->result();
    return $result;


}

}