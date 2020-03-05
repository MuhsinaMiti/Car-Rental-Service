<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('car_model');
	}

	//show add car form
	//save car data
	//edit car data
	//update car data
	//delete car



  //------------ location ---------------------


  function show_add_location_form(){

    $data['admin_maincontent'] = $this->load->view('admin/admin_pages/add_location_form','',TRUE);
    $this->load->view('admin/admin_master',$data);

    }

  function save_location(){

    $this->car_model->save_location();
    $this->show_all_location();

    }

   function show_all_location(){

    $location_data ['all_location']= $this->car_model->get_all_location();
        $data['admin_maincontent'] = $this->load->view('admin/admin_pages/all_location',$location_data,TRUE);
    $this->load->view('admin/admin_master',$data);
    }


  function change_location_status($location_id,$status){

    $this->car_model->change_location_status($location_id,$status);
    redirect('all-location');
    


    
    }

function edit_location($location_id){

  $data['location_data'] = $this->car_model->get_location_detail($location_id);
  $data['admin_maincontent'] = $this->load->view('admin/admin_pages/edit_location_form',$data,TRUE);
    $this->load->view('admin/admin_master', $data);




  }

function update_location (){

      $this->car_model->update_location();   
     
     redirect('all-location');


}




	//------------ brand ---------------------


	function show_add_brand_form(){

		$data['admin_maincontent'] = $this->load->view('admin/admin_pages/add_brand_form','',TRUE);
		$this->load->view('admin/admin_master',$data);

		}

  function save_brand(){

		$this->car_model->save_brand();
		$this->show_all_brand();

		}

   function show_all_brand(){

		$brand_data ['all_brand']= $this->car_model->get_all_brand();
        $data['admin_maincontent'] = $this->load->view('admin/admin_pages/all_brands',$brand_data,TRUE);
		$this->load->view('admin/admin_master',$data);
		}


  function change_brand_status($brand_id,$status){

  	$this->car_model->change_brand_status($brand_id,$status);
  	redirect('all-brand');
		


		
		}

function edit_brand($brand_id){

	$data['brand_data'] = $this->car_model->get_brand_detail($brand_id);
	$data['admin_maincontent'] = $this->load->view('admin/admin_pages/edit_brand_form',$data,TRUE);
    $this->load->view('admin/admin_master', $data);




	}

function update_brand (){

      $this->car_model->update_brand();   
     
     redirect('all-brand');


}

//------------------------ Car -------------------

function add_car(){
    $data=array();
    $data['brand_info'] = $this->car_model->get_all_active_brand();
    $data['fuel_info'] = $this->car_model->get_all_active_fuel();
    $data['location_info'] = $this->car_model->get_all_active_location();
	$data['admin_maincontent'] = $this->load->view('admin/admin_pages/add_car_form',$data,TRUE);
	$this->load->view('admin/admin_master',$data);
}



function upload_car_image(){

      // $sdata=array();
       $error="";
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
     	//print_r($error);
      echo $error;
      exit(); 
      //$this->load->view('admin/admin_pages/add_car_form',compact('error'));
      //$this->load->view('admin/admin_master',$data);

     }



}




    function save_car(){


      $this->form_validation->set_rules('car_name','Car name', 'required|max_length[255]');
    $this->form_validation->set_rules('price_per_day','Price Per Day', 'required|max_length[255]');

    $this->form_validation->set_rules('car_overview','Car Overview', 'required');
    $this->form_validation->set_rules('car_brand','Select Brand', 'required');
    $this->form_validation->set_rules('car_fuel','Select Fuel', 'required');
    $this->form_validation->set_rules('car_location','Select location', 'required');


    if($this->form_validation->run()) {

    //$car_data=array();
    //$car_data['car_image'] = $this->upload_car_image();
    $car_image = $this->upload_car_image();
    $this->car_model->save_car($car_image);
    $this->session->set_userdata('message','Car Saved Successfully');
    $this->add_car();
    //redirect('manage-car');
    }else{

      $this->add_car();
    }


}



public function manage_car(){

	$data=array();
	$data['all_car']=$this->car_model->select_all_car();
    $data['admin_maincontent'] =  $this->load->view('admin/admin_pages/manage_car',$data,TRUE);
	$this->load->view('admin/admin_master',$data);
}

public function car_published($car_id){

       $this->car_model->car_published_by_id($car_id);
       redirect('manage-car');

	}
public function car_unpublished($car_id){

       $this->car_model->car_unpublished_by_id($car_id);
       redirect('manage-car');

	}

	public function car_delete($car_id){

       $this->car_model->car_delete_by_id($car_id);
       redirect('manage-car');

	}

	public function car_edit($car_id){

    $data=array();
    $data['brand_info'] = $this->car_model->get_all_active_brand();
    $data['fuel_info'] = $this->car_model->get_all_active_fuel();
    $data['location_info'] = $this->car_model->get_all_active_location();
    $data['car_info'] = $this->car_model->car_info_by_id($car_id);
	$data['admin_maincontent'] = $this->load->view('admin/admin_pages/edit_car_form',$data,TRUE);
	$this->load->view('admin/admin_master',$data);

	}

	public function update_car(){
     
     echo'<pre>';
     print_r($_FILES);
     if($_FILES ['car_image'] ['name']=='' || $_FILES['car_image']['size']==0)

     {

      $car_image = $this->input->post('car_old_image',TRUE);
      $this->car_model->update_car($car_image);
      $sdata=array();
      $sdata['message']="update car information successfully !!";
      $this->session->set_userdata($sdata);
      $car_id=$this->input->post('car_id',true);
      redirect('car-edit/'.$car_id);
     }

     else{

       $car_image = $this->upload_car_image();
       $this->car_model->update_car($car_image);
       unlink($this->input->post('car_old_image',TRUE));
       $sdata=array();
       $sdata['message']="update car information successfully !!";
       $this->session->set_userdata($sdata);
       $car_id=$this->input->post('car_id',true);
       redirect('car-edit/'.$car_id);
	}

}

//function car_listing(){
   // $data=array();
    //$data['brand_data'] = $this->car_model->get_all_active_brand('car_brand');
    //$data['fuel_data'] = $this->car_model->get_all_active_fuel('car_fuel');
	//$this->load->view('pages/car_listing',$data);
	//$this->load->view('master',$data);
//}

function getRecords(){
   /*$data=array();
   $data['brand_id']=$this->input->post('brand_id',true);
   $data['fuel_id']=$this->input->post('fuel_id',true);
   $records=$this->welcome_model->getRecords($brand,$fuel);*/
    $brand = $this->input->post('brand_id');
    $fuel = $this->input->post('fuel_id'); 
    echo $brand_id;
    echo $fuel_id;
    exit();
    $records=$this->welcome_model->getRecords($brand,$fuel);
    echo '<pre>';
    print_r($records);
    exit();

    $this->load->view('pages/result',['brand'=>$brand,'fuel'=>$fuel,'records'=>$records]);
    

    }



//-------------------- Fuel -------------------

function show_add_fuel_form(){

		$data['admin_maincontent'] = $this->load->view('admin/admin_pages/add_fuel_form','',TRUE);
		$this->load->view('admin/admin_master',$data);

		}

  function save_fuel(){

		$this->car_model->save_fuel();
		$this->show_all_fuel();

		}

   function show_all_fuel(){

		$fuel_data ['all_fuel']= $this->car_model->get_all_fuel();
        $data['admin_maincontent'] = $this->load->view('admin/admin_pages/all_fuel',$fuel_data,TRUE);
		$this->load->view('admin/admin_master',$data);
		}


  function change_fuel_status($fuel_id,$status){

  	$this->car_model->change_fuel_status($fuel_id,$status);
  	redirect('all-fuel');
		


		
		}

function edit_fuel($fuel_id){

	$data['fuel_data'] = $this->car_model->get_fuel_detail($fuel_id);
	$data['admin_maincontent'] = $this->load->view('admin/admin_pages/edit_fuel_form',$data,TRUE);
    $this->load->view('admin/admin_master', $data);




	}

function update_fuel (){

      $this->car_model->update_fuel();   
     
     redirect('all-fuel');


}
function dashboard_data(){

      $this->car_model->dashboard_data();   
     
     redirect('admin-dashboard');


   }

   
}
