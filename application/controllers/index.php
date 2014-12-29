<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * ���ܣ���ҳ������
 * ���ߣ�lizzyphy
 * ���ڣ�2014.12.29
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
	}
	public function middle()
	{
		$this->load->view('main_middle');
	}
}