<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Beranda extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		if ($this->session->userdata('isloggedin')) {
			$this->load->view("admin/v_home_admin");	
		}else{
			redirect('admin/user/login');
		}
		
	}


}
?>