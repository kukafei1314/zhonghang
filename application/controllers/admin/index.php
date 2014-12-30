<?php
/**
 * 后台首页控制器
 * 
 * @author lizzyphy
 * @version 1.0 2014-12-30
 */

class Index extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
	}
	
	public function index() 
	{
		$this->load->view('admin/index');
	}
}