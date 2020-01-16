<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	


	
	public function index()

	{    
        $data=array();
        $data['title']="Home";
        $data['all_active_car']=$this->welcome_model->all_active_car();
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

	public function car_listing()

	{    
        $data=array();
        $data['title']="Car Listing";
		$data['car_listing'] = $this->load->view('pages/car_listing','',true);
		
		 
        $this->load->view('master',$data);
	}





}
