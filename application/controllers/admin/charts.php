<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 功能：后台图标控制器
 * 作者：lizzyphy
 * 日期：2014.12.29
 */
class Charts extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
		    redirect('d=admin&c=index');
		}
	}
	
	public function index() 
	{
	    $data['username'] = $this->admin_user_m->user->username;
		$this->load->view('admin/charts',$data);
	}
}