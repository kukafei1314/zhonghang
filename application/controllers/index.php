<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 功能：主页控制器
 * 作者：lizzyphy
 * 日期：2014.12.29
 */
class Index extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->view('main_nav');
		$this->load->view('main_middle');
		$this->load->view('main_bottom');
		$this->load->view('footer');
	}
	public function middle()
	{
		$this->load->view('second_header');
	}
}