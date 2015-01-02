<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 功能：动态要闻
 * 作者：LZZ
 * 日期：2015.1.2
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