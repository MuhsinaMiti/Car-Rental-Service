<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()

	{    
        $data=array();
        $data['title']="Home";
        $data['recent_car'] = $this->load->view('pages/recent_car','',true);
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





}
