<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {


	public function manage_invoice(){

		        $data=array();
		        $data['all_invoice'] = $this->invoice_model->select_all_invoice();
		        //echo '<pre>';
		        //print_r($data);
		        //exit();
               
	     		$data['admin_maincontent'] = $this->load->view('admin/admin_pages/manage_invoice',$data,TRUE);
	     		$this->load->view('admin/admin_master',$data);
	}

}