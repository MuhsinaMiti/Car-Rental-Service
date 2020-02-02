<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('car_filter_model');
	}

	function car_filter()
	{

		$data['brand_data'] = $this->car_filter_model->fetch_filter_type('car_brand');
		$data['fuel_data'] = $this->car_filter_model->fetch_filter_type('car_fuel');
		$this->load->view('pages/car_listing',$data);
		$this->load->view('master',$data);
	}



}
?>