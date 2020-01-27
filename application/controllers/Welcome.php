<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	


	
	public function index()

	{    
        $data=array();
        $data['title']="Home";
        $data['all_recent_car']=$this->welcome_model->all_recent_car();
        $data['recent_car'] = $this->load->view('pages/recent_car',$data,true);
		$data['Fun_facts'] = $this->load->view('pages/Fun_facts','',true);
		$data['testimonial'] = $this->load->view('pages/Testimonial','',true);
        $this->load->view('master',$data);
	}


	public function about_us()

	{    
        $data=array();
        $data['title']="About Us";
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		$data['testimonial'] ="<h1 align ='center'>this is about us page</h1>";
        $this->load->view('master',$data);
	}

	

public function car_details($car_id)

	{    
         $data=array();
        $data['title']="About Us";
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		$data['car_info']=$this->welcome_model->select_car_by_id($car_id);
		$data['testimonial'] =$this->load->view('pages/car_details',$data,true);
        $this->load->view('master',$data);


       /* $data=array();
        $data['title']="Car Details";
		$data['recent_car'] =  //"<h1 align ='center'>this is about us page</h1>"; 
		$data['Fun_facts'] = '';
		$data['testimonial'] ='';
        $this->load->view('master',$data);*/
	}

	

public function car_listing()

	{    
        $data=array();
        $data['title']="Car Listing";
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		//$data['brand_info'] = $this->car_filter_model->fetch_filter_type();
		//$data['fuel_info'] = $this->car_filter_model->fetch_filter_type();
		$data['all_active_car']=$this->welcome_model->all_active_car();
		$data['fuel_info'] = $this->car_model->get_all_active_fuel();
		$data['brand_info']=$this->car_model->get_all_active_brand();
		$data['testimonial'] =$this->load->view('pages/car_listing',$data,true);
        $this->load->view('master',$data);

    }

public function getRecords()

	{    
        $data=array();
        $data['title']="Car Listing";
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		
		$data['getRecords']=$this->welcome_model->getRecords();
		//echo '<pre>';
    //print_r($data);
    //exit();
		$data['fuel_info'] = $this->car_model->get_all_active_fuel();
		$data['brand_info']=$this->car_model->get_all_active_brand();
		$data['testimonial'] =$this->load->view('pages/result',$data,true);
        $this->load->view('master',$data);

    }

    


}
