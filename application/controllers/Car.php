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

function add_car(){
    $data=array();
    $data['brand_info'] = $this->car_model->get_all_active_brand();
	$data['admin_maincontent'] = $this->load->view('admin/admin_pages/add_car_form',$data,TRUE);
	$this->load->view('admin/admin_master',$data);
}

    function save_car(){

    $this->car_model->save_car();
    $this->session->set_userdata('message','Car Saved Successfully');
    $this->add_car();
    //redirect('add-car');


}

public function manage_car(){

	$data=array();
	$data['all_car']=$this->car_model->select_all_car();

	$data['admin_maincontent'] =  $this->load->view('admin/admin_pages/manage_car',$data,TRUE);
	$this->load->view('admin/admin_master',$data);



}

}
