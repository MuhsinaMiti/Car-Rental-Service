<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()

	{    
      $this->load->view('admin/admin_login');

	}

public function check_admin_login()

	{    

		$this->load->view('admin/admin_master');
      
    }
	





}
