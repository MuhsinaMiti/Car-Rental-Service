<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	


	
	public function index()

	{    
        $data=array();
        $data['title']="Home";
        $data['all_recent_car']=$this->welcome_model->all_recent_car();
        $data['recent_car'] = $this->load->view('pages/recent_car',$data,true);
        $data['location']=$this->admin_model->dashboard_location_data();
        $data['brand']=$this->admin_model->dashboard_brand_data();
        $data['car']=$this->admin_model->dashboard_car_data();
        $data['customer']= $this->admin_model->dashboard_customer_data();
		$data['Fun_facts'] = $this->load->view('pages/Fun_facts',$data,true);
		$data['testimonial'] = '';
        $this->load->view('master',$data);
	}


	public function about_us()

	{    
        $data=array();
        $data['title']="About Us";
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		$data['testimonial'] = $this->load->view('pages/about_us','',true);
        $this->load->view('master',$data);
	}


	public function contact_us()

	{    
        $data=array();
        $data['title']="Contact Us";
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		$data['testimonial'] = $this->load->view('pages/contact_us','',true);
        $this->load->view('master',$data);
	}

	

public function car_details($car_id)

	{    
         $data=array();
        $data['title']="About Us";
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		$data['car_info']=$this->welcome_model->select_car_by_id($car_id);

		/*$sdata=array();
        $sdata['car_name']=$this->input->post('car_name');
        $sdata['car_id']=$car_id;
        $this->session->set_userdata($sdata);*/

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
		$data['all_recent_car']=$this->welcome_model->all_recent_car();
		$data['all_active_car']=$this->welcome_model->all_active_car();
		$data['location_info']=$this->car_model->get_all_active_location();
		
		$data['car_filter'] = $this->load->view('car_filter',$data,true);
		//$data['sidebar_recent_car'] = $this->load->view('sidebar_recent_car',$data,true);
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
		$data['recent_car'] = $this->load->view('recent_car',$data,true);
        $data['car_filter'] = $this->load->view('car_filter',$data,true);
		$data['testimonial'] =$this->load->view('pages/result',$data,true);
        $this->load->view('master',$data);

    }

    
public function customer_registration()

	{    
         $data=array();
        $data['title']="customer_registration";
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		
		$data['testimonial'] =$this->load->view('pages/customer_registration','',true);
        $this->load->view('master',$data);

  }

  public function location_car($location_id)

	{    
        $data=array();
        $data['title']="Car Listing";
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		
		
		$data['all_active_car_by_location']=$this->welcome_model->all_active_car_by_location($location_id);
		
		$data['location_info']=$this->car_model->get_all_active_location();
       
		$data['car_filter'] = $this->load->view('car_filter',$data,true);
		$data['testimonial'] =$this->load->view('pages/result',$data,true);
        $this->load->view('master',$data);
  }
  
}