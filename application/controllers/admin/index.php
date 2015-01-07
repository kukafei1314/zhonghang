<?php
/**
 * 后台首页控制器
 * 
 * @author lizzyphy
 * @version 1.0 2014-12-30
 */
 /**
 * 添加登录信息
 * 
 * @modify lyb
 * @version 1.1 2014-1-3
 */

class Index extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('form');
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
			redirect('d=admin&c=login');
			//redirect('admin/login');
		}
	}
	
	public function index() 
	{
		$data['username'] = $this->admin_user_m->user->username;
		$this->load->view('admin/admin_header', $data);
	}
}