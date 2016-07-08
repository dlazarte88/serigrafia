<?php 

class MY_Controller extends MX_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->module('welcome_admin','welcome');
	}

	function home_run(){
		$this->welcome_admin->call_admin_template();
	}
}
