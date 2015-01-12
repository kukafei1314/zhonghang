<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 企业概况处理控制器
 * 
 * @author 风格独特
 */

class About extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('article_m');
		$this->load->model('about_m');
		$this->load->model('article_list_model');
		$this->load->model('article_type_m');
		$this->load->helper('url');
	}


   public function index() 
	{
		$aid = (int) $this->input->get('aid');
		$array = $this->about_m->get($aid);
		$data['title2'] = $array['title'];
		$data['title'] = "公司概况";
		$data['add_date'] = $array['add_date'];
		$data['content'] = $array['content'];
		$this->load->view('second_header');
		$this->load->view('nav_about');
		$this->load->view('nav_content_about',$data);
		$this->load->view('main_bottom');
		$this->load->view('footer');
	}
}