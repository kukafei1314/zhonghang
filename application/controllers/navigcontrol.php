<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Navigcontrol extends CI_Controller 
{	
	/**
	 * 构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('article_m');
		$this->load->model('about_m');
		$this->load->model('article_list_model');
		$this->load->model('article_type_m');
		$this->load->helper('url');
	}

	/**
	 * 首页
	*/
	public function index()
	{
		$tid = (int) $this->input->get('tid');
		$row = $this->article_m->get_tid($tid);   //通过tid得到包含tid的所有内容  
		$data['title2'] = $row['name'];
		$pid = $row['pid'];
		if($pid != 0) {
			$data['title_second'] = $this->article_m->get_pid($pid);
			$row = $this->article_m->get_tid($pid);   //通过pid得到父类的名称与英文名称
		} else {
			$data['title_second'] = array();
		}
		$data['title'] = $row['name'];
		$data['en_title'] = $row['en_name'];
		$data['tid'] = $tid;
		$data['News'] = $this->article_list_model->query_article($tid);
		$this->load->view('second_header');
		if($pid == 5) {
			$this->load->view('navigation');
		} else {
			$this->load->view('navigation_about',$data);
		}
		$this->load->view('nav_list',$data);
		$this->load->view('main_bottom');
		$this->load->view('footer');
    }

	public function news()
	{
	    $tid = (int)$this->input->get('tid');
	    $aid = (int)$this->input->get('aid');
	    $data['article'] = $this->article_list_model->get_article($aid);
	    $row = $this->article_m->get_tid($tid);   //通过tid得到包含tid的所有内容
	    $pid = $row['pid'];
	    $data['title2'] = $row['name'];
	    if($pid != 0) {
	    	$data['title_second'] = $this->article_m->get_pid($pid);
	    	$row = $this->article_m->get_tid($pid);   //通过pid得到父类的名称与英文名称
	    } else {
	    	$data['title_second'] = array();
	    }
	    $data['title'] = $row['name'];
	    $data['en_title'] = $row['en_name'];
		$this->load->view('second_header');
		if($pid == 5) {
			$this->load->view('navigation');
		} else {
			$this->load->view('navigation_about',$data);
		}
		$this->load->view('nav_content',$data);
		$this->load->view('main_bottom');
		$this->load->view('footer');
	}
	
	public function search(){
		$per_page		  =	2;
		$p				  =	(int) page_cur();	// 获取当前页码
		$data['p']        = $p;
		$keyword = $this->input->get('keyword');
		$data['News'] = $this->article_m->search($keyword,$per_page,$per_page*($p-1));
		$data['page_html']	  =	page($this->article_m->count_all($keyword), $per_page);
		$data['keyword'] = $keyword;
		$this->load->view('search_result',$data);	
	}
}


