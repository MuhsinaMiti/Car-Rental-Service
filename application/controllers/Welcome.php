<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	


	
	public function index()

	{    
        $data=array();
        $data['title']="Home";
        $data['banner']=$this->load->view('pages/banner','',true);
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
        $data['banner']='';
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		$data['testimonial'] = $this->load->view('pages/about_us','',true);
        $this->load->view('master',$data);
	}


	public function contact_us()

	{    
        $data=array();
        $data['title']="Contact Us";
        $data['banner']='';
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		$data['testimonial'] = $this->load->view('pages/contact_us','',true);
        $this->load->view('master',$data);
	}

	

public function car_details($car_id)

	{    
         $data=array();
        $data['title']="Car Details";
        $data['car_info']=$this->welcome_model->select_car_by_id($car_id);
        $data['banner']=$this->load->view('pages/car_details',$data,true);;
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		

		/*$sdata=array();
        $sdata['car_name']=$this->input->post('car_name');
        $sdata['car_id']=$car_id;
        $this->session->set_userdata($sdata);*/

		$data['testimonial'] ='';
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
        $data['banner']='';
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';

		$config = array();
        $config["base_url"] = base_url() . "welcome/car_listing";
        $config["total_rows"] = $this->welcome_model->record_count();
        $config["per_page"] = 3;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = '<ul class="uk-pagination uk-text-primary">';
		 $config['full_tag_close'] = '</ul>';
		 $config['cur_tag_open'] = ' <li class="uk-active uk-text-bold uk-text-secondary"><a href="/">';
		 $config['cur_tag_close'] = '</a></li>';
		 $config['prev_tag_open'] = '<li>';
		 $config['prev_tag_close'] = '</li>';
		 $config['next_tag_open'] = '<li>';
		 $config['next_tag_close'] = '</li>';
		 $config['num_tag_open'] = '<li>';
		 $config['num_tag_close'] = '</li>';
		 $config['last_tag_open'] = '<li>';
		 $config['last_tag_close'] = '</li>';
		 $config['first_tag_open'] = '<li>';
		 $config['first_tag_close'] = '</li>';
		 $config['next_link'] = 'Next >';
		 $config['prev_link'] = '< Prev';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        /*$data["allProduct"] = $this->modUser->
            fetchallProduct($config["per_page"], $page);*/
        $data["links"] = $this->pagination->create_links();
		//$data['brand_info'] = $this->car_filter_model->fetch_filter_type();
		//$data['fuel_info'] = $this->car_filter_model->fetch_filter_type();
		$data['all_recent_car']=$this->welcome_model->all_recent_car($config["per_page"], $page);
		$data['all_active_car']=$this->welcome_model->all_active_car($config["per_page"], $page);
        $data['location_info']=$this->car_model->get_all_active_location();
		$data['booking_info']=$this->booking_model->select_all_booking($config["per_page"], $page);
		
		$data['car_filter'] = $this->load->view('car_filter',$data,true);
		//$data['sidebar_recent_car'] = $this->load->view('sidebar_recent_car',$data,true);
		$data['testimonial'] =$this->load->view('pages/car_listing',$data,true);
        $this->load->view('master',$data);

    }

	

/*public function car_listing()

	{    
        $data=array();
        $data['title']="Car Listing";
        $data['banner']='';
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		//$data['brand_info'] = $this->car_filter_model->fetch_filter_type();
		//$data['fuel_info'] = $this->car_filter_model->fetch_filter_type();
		$data['all_recent_car']=$this->welcome_model->all_recent_car();
		$data['all_active_car']=$this->welcome_model->all_active_car();
		$data['location_info']=$this->car_model->get_all_active_location();
		$data['booking_info']=$this->booking_model->select_all_booking();
		
		$data['car_filter'] = $this->load->view('car_filter',$data,true);
		//$data['sidebar_recent_car'] = $this->load->view('sidebar_recent_car',$data,true);
		$data['testimonial'] =$this->load->view('pages/car_listing',$data,true);
        $this->load->view('master',$data);

    } */

public function getRecords()

	{    
        $data=array();
        $data['title']="Car Listing";
        $data['banner']=$this->load->view('pages/banner','',true);
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
        $data['banner']=$this->load->view('pages/banner','',true);
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		
		$data['testimonial'] =$this->load->view('pages/customer_registration','',true);
        $this->load->view('master',$data);

  }

  public function location_car($location_id)

	{    
        $data=array();
        $data['title']="Car Listing";
        $data['banner']='';
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		
		
		$data['all_active_car_by_location']=$this->welcome_model->all_active_car_by_location($location_id);
		
		$data['location_info']=$this->car_model->get_all_active_location();
       
		$data['car_filter'] = $this->load->view('car_filter',$data,true);
		$data['testimonial'] =$this->load->view('pages/result',$data,true);
        $this->load->view('master',$data);
  }
  

  public function brand_car($brand_id)

	{    
        $data=array();
        $data['title']="Car Listing";
        $data['banner']='';
		$data['recent_car'] = '';
		$data['Fun_facts'] = '';
		
		
		$data['all_active_car_by_brand']=$this->welcome_model->all_active_car_by_brand($brand_id);
		
		$data['brand_info']=$this->car_model->get_all_active_brand();
       
		$data['car_filter'] = $this->load->view('car_filter',$data,true);
		$data['testimonial'] =$this->load->view('pages/result_by_brand',$data,true);
        $this->load->view('master',$data);
  }
  

/*public function search(){

	$this->form_validation->set_rules('query','Query','required');
	if (! $this->form_validation->run())

		$this->car_listing();
	$query = $this->input->post('query');
	//print_r($query);
	$car = $this->welcome_model->search($query);
	$this->load->vi
	}
*/

	 public function search()

	{    

		$this->form_validation->set_rules('query','Query','required');
	    if (! $this->form_validation->run())

		$this->car_listing();
	    $query = $this->input->post('query');
	//print_r($query);

        $data=array();
        $data['title']="Car Listing";
        $data['banner']='';
       // $data['all_recent_car']=$this->welcome_model->all_recent_car();
        $data['recent_car'] =''; //$this->load->view('pages/recent_car',$data,true);
		
		$data['Fun_facts'] = '';
		$data['car'] = $this->welcome_model->search($query);
		//$data['all_active_car']=$this->welcome_model->active_car();
		//print_r($data['car'] );
		$data['car_filter'] = $this->load->view('car_filter',$data,true);
		$data['testimonial'] =$this->load->view('pages/search_result_car_list',$data,true);
        $this->load->view('master',$data);
  


  
}

}