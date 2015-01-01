<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 功能：后台widgets控制器
 * 作者：lizzyphy
 * 日期：2014.12.29
 */
class Widgets extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
	}
	
	public function index() 
	{
		$this->load->view('admin/article_list');
	}
}