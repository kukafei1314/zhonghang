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
		$this->load->model('article_list_model');
	}
	
	public function index()
	{
		$data['active_news'] = $this->article_list_model->query_article('10',7);
		$data['notice'] 	 = $this->article_list_model->query_article('1',7);
		$data['pic_news'] 	 = $this->article_list_model->pic_list();
		$data['pic']    	 = $this->article_list_model->pic_home();
		$this->load->view('main_nav',$data);
		$this->load->view('main_middle',$data);
		$this->load->view('main_bottom');
		$this->load->view('footer');
	}
}