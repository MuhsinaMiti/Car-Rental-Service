<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){

    parent::__construct();

    if(!isset($this->session->user_id) && ($this->session->user_status !== 1)) {

      redirect('admin');
    }

    $this->load->model('admin_model');




  }

  public function show_dashboard(){


                $data=array();
                $data['brand']=$this->admin_model->dashboard_brand_data();
                $data['fuel']=$this->admin_model->dashboard_fuel_data();
                $data['location']=$this->admin_model->dashboard_location_data();
                $data['customer']=$this->admin_model->dashboard_customer_data();
                $data['car']=$this->admin_model->dashboard_car_data();
          $data['admin_maincontent'] = $this->load->view('admin/admin_pages/dashboard',$data,TRUE);
          $this->load->view('admin/admin_master',$data);


  }


   public function register_new_admin(){

    $this->form_validation->set_rules('user_name','User name', 'required|max_length[255]');
    $this->form_validation->set_rules('user_email','Email address', 'required|max_length[255]|is_unique[tbl_user.user_email]');
    $this->form_validation->set_rules('user_password','User Password', 'required|min_length[6]');
    $this->form_validation->set_rules('confirm_password','Confirm Password', 'required|min_length[6]|matches[user_password]');


    if($this->form_validation->run()){
      $this->admin_model->register_new_admin();

      $data['success_message'] = 'User Registration Successful';
      
    $data['admin_maincontent'] = $this->load->view('admin/admin_pages/register_admin_form',$data,TRUE);


    $this->load->view('admin/admin_master',$data);
    }else{

      $this->show_admin_register_form();
    }





       //$confim_password = $this->input->post('confim_password',TRUE);

       


    }


  public function show_admin_register_form(){
    $data = array();
    $data['admin_maincontent'] = $this->load->view('admin/admin_pages/register_admin_form','',TRUE);
    $this->load->view('admin/admin_master',$data);




  }


  }

